var IMAGE_HEIGHT = 82;
var IMAGE_TOP_MARGIN = 0;
var IMAGE_BOTTOM_MARGIN = 0;
var SLOT_SEPARATOR_HEIGHT = 1;
var SLOT_HEIGHT = IMAGE_HEIGHT +  IMAGE_TOP_MARGIN + IMAGE_BOTTOM_MARGIN + SLOT_SEPARATOR_HEIGHT; // berapa banyak piksel yang dibutuhkan satu gambar slot
var RUNTIME = 3000; // berapa lama semua slot berputar sebelum memulai hitungan mundur
var SPINTIME = 1000; // berapa lama setiap slot berputar minimal
var ITEM_COUNT = 8 // jumlah item dalam slot
var SLOT_SPEED = 15; // berapa banyak piksel per detik slot yang diputar
var DRAW_OFFSET = 45 // berapa banyak draw offset dalam tampilan slot dari atas
var minGet = 1500
var maxGet = 5000
// var get = 0
// const a = Math.floor(Math.random() * 11);
// if (a >= 2) { // 20% chance
// 	get = randomGet()
// } else { // 80% chance
// 	get = 1500
// }

function randomGet(){
	var r = Math.floor(Math.random() * 51) * 100 * 5;
	if(r < minGet || r > maxGet || r == 0){
		return randomGet()
	}else{
		return r
	}
}

var BLURB_TBL = [
    'No win!',
    'Good!',
    'Excellent!',
    'JACKPOT!'
];

function shuffleArray( array ) {

    for (i = array.length - 1; i > 0; i--) {
	var j = parseInt(Math.random() * i)
	var tmp = array[i];
	array[i] = array[j]
	array[j] = tmp;
    }
}


// Gambar harus dimuat terlebih dahulu sebelum digunakan untuk menggambar ke kanvas
function preloadImages( images, callback ) {

    function _preload( asset ) {
	asset.img = new Image();
	asset.img.src = 'img/' + asset.id+'.png';

	asset.img.addEventListener("load", function() {
	    _check();
	}, false);

	asset.img.addEventListener("error", function(err) {
	    _check(err, asset.id);
	}, false);
    }

    var loadc = 0;
    function _check( err, id ) {
	if ( err ) {
	    alert('Failed to load ' + id );
	}
	loadc++;
	if ( images.length == loadc )
	    return callback()
    }

    images.forEach(function(asset) {
	_preload( asset );
    });
}

function copyArray( array ) {
    var copy = [];
    for( var i = 0 ; i < array.length; i++) {
	copy.push( array[i] );
    }
    return copy;
}


function SlotGame() {

    var game = new Game();

    var items = [
		{id: 1, value: 500}, //1
		{id: 2, value: 1000},//2
		{id: 3, value: 2000},//3
		{id: 4, value: 5000},//4
		{id: 5, value: 10000},//5
		{id: 6, value: 20000},//6
		{id: 7, value: 50000},//7
		{id: 8, value: 100000}//8
    ];


    $('canvas').attr('height', IMAGE_HEIGHT * ITEM_COUNT * 2);
    $('canvas').css('height', IMAGE_HEIGHT * ITEM_COUNT * 2);

    game.items = items;

    // load assets and predraw the reel canvases
    preloadImages( items, function() {

	// images are preloaded

	// draws canvas strip
	function _fill_canvas( canvas, items ) {
	    ctx = canvas.getContext('2d');
	    ctx.fillStyle = '#ddd';

	    for (var i = 0 ; i < ITEM_COUNT ; i++) {
		var asset = items[i];
		ctx.save();
		ctx.shadowColor = "rgba(0,0,0,0.5)";
		ctx.shadowOffsetX = 2;
		ctx.shadowOffsetY = 3;
		ctx.shadowBlur = 5;
		ctx.drawImage(asset.img, 3, i * SLOT_HEIGHT + IMAGE_TOP_MARGIN);
		ctx.drawImage(asset.img, 3, (i + ITEM_COUNT) * SLOT_HEIGHT + IMAGE_TOP_MARGIN);
		ctx.restore();
		ctx.fillRect(0, i * SLOT_HEIGHT, 70, SLOT_SEPARATOR_HEIGHT);
		ctx.fillRect(0, (i + ITEM_COUNT)  * SLOT_HEIGHT, 70, SLOT_SEPARATOR_HEIGHT);
	    }
	}
	// Draw the canvases with shuffled arrays
	game.items1 = copyArray(items);
	shuffleArray(game.items1);
	_fill_canvas( game.c1[0], game.items1 );
	game.items2 = copyArray(items);
	shuffleArray(game.items2);
	_fill_canvas( game.c2[0], game.items2 );
	game.items3 = copyArray(items);
	shuffleArray(game.items3);
	_fill_canvas( game.c3[0], game.items3 );
	game.resetOffset =  (ITEM_COUNT + 3) * SLOT_HEIGHT;
	game.loop();
    });

    $('#play').click(function(e) {
	// start game on play button click
	$('h1').text('Rolling!');
	game.restart();
    });

    // Show reels for debugging
    var toggleReels = 1;
    $('#debug').click(function() {
	toggleReels = 1 - toggleReels;
	if ( toggleReels ) {
	    $('#reels').css('overflow', 'hidden' );
	} else {
	    $('#reels').css('overflow', 'visible' );
	}
    });
}

function Game() {

    // reel canvases
    this.c1 = $('#canvas1');
    this.c2 = $('#canvas2');
    this.c3 = $('#canvas3');

    // set random canvas offsets
    this.offset1 = -parseInt(Math.random() * ITEM_COUNT ) * SLOT_HEIGHT;
    this.offset2 = -parseInt(Math.random() * ITEM_COUNT ) * SLOT_HEIGHT;
    this.offset3 = -parseInt(Math.random() * ITEM_COUNT ) * SLOT_HEIGHT;
    this.speed1 = this.speed2 = this.speed3 = 0;
    this.lastUpdate = new Date();

    // Needed for CSS translates
    this.vendor =
	(/webkit/i).test(navigator.appVersion) ? '-webkit' :
    	(/firefox/i).test(navigator.userAgent) ? '-moz' :
	(/msie/i).test(navigator.userAgent) ? 'ms' :
    	'opera' in window ? '-o' : '';

    this.cssTransform = this.vendor + '-transform';
    this.has3d = ('WebKitCSSMatrix' in window && 'm11' in new WebKitCSSMatrix())
    this.trnOpen       = 'translate' + (this.has3d ? '3d(' : '(');
    this.trnClose      = this.has3d ? ',0)' : ')';
    this.scaleOpen     = 'scale' + (this.has3d ? '3d(' : '(');
    this.scaleClose    = this.has3d ? ',0)' : ')';

    // draw the slots to initial locations
    this.draw( true );
}

// Restar the game and determine the stopping locations for reels
Game.prototype.restart = function() {
    this.lastUpdate = new Date();
    this.speed1 = this.speed2 = this.speed3 = SLOT_SPEED

    // function locates id from items
    function _find( items, id ) {
		for ( var i=0; i < items.length; i++ ) {
			if ( items[i].id == id ) return i;
		}
    }




    // uncomment to get always jackpot
    // this.result1 = _find( this.items1, '1' );
    // this.result2 = _find( this.items2, '1' );
    // this.result3 = _find( this.items3, '1' );


    // // get random results
    // this.result1 = parseInt(Math.random() * this.items1.length)
    // this.result2 = parseInt(Math.random() * this.items2.length)
    // this.result3 = parseInt(Math.random() * this.items3.length)

	var itemShuf1 = [
		{id: 1, value: 500}, //1
		{id: 2, value: 1000},//2
		{id: 3, value: 2000},//3
		{id: 4, value: 5000},//4
		{id: 5, value: 10000},//5
		{id: 6, value: 20000},//6
		{id: 7, value: 50000},//7
		{id: 8, value: 100000}//8
    ];

	var itemShuf2 = [
		{id: 1, value: 500}, //1
		{id: 2, value: 1000},//2
		{id: 3, value: 2000},//3
		{id: 4, value: 5000},//4
		{id: 5, value: 10000},//5
		{id: 6, value: 20000},//6
		{id: 7, value: 50000},//7
		{id: 8, value: 100000}//8
    ];

	var itemShuf3 = [
		{id: 1, value: 500}, //1
		{id: 2, value: 1000},//2
		{id: 3, value: 2000},//3
		{id: 4, value: 5000},//4
		{id: 5, value: 10000},//5
		{id: 6, value: 20000},//6
		{id: 7, value: 50000},//7
		{id: 8, value: 100000}//8
    ];

	shuffleArray(itemShuf1)
	shuffleArray(itemShuf2)
	shuffleArray(itemShuf3)


	for(var it1 = 0; it1 < itemShuf1.length; it1++){
		for(var it2 = 0; it2 < itemShuf2.length; it2++){
			for(var it3 = 0; it3 < itemShuf3.length; it3++){
				var ans = itemShuf1[it1].value + itemShuf2[it2].value + itemShuf3[it3].value;
				if(ans >= minGet && ans <= maxGet){
					// console.log("ans", ans)
					// console.log("it", `it1 = ${it1}, it2 = ${it2}, it3 = ${it3}`)
					this.result1 = _find(this.items1, itemShuf1[it1].id)
					this.result2 = _find(this.items2, itemShuf2[it2].id)
					this.result3 = _find(this.items3, itemShuf3[it3].id)
					break;
				}
			}
		}
	}

	// console.log('result1', this.items1[this.result1], 'result2',this.items2[this.result2], 'result3', this.items3[this.result3])

    // Clear stop locations
    this.stopped1 = false;
    this.stopped2 = false;
    this.stopped3 = false;

    // randomize reel locations
    this.offset1 = -parseInt(Math.random( ITEM_COUNT )) * SLOT_HEIGHT;
    this.offset2 = -parseInt(Math.random( ITEM_COUNT )) * SLOT_HEIGHT;
    this.offset3 = -parseInt(Math.random( ITEM_COUNT )) * SLOT_HEIGHT;

    $('#results').hide();

    this.state = 1;
}

window.requestAnimFrame = (function(){
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function(/* function */ callback, /* DOMElement */ element){
            window.setTimeout(callback, 1000 / 60);
        };
})();

Game.prototype.loop = function() {
    var that = this;
    that.running = true;
    (function gameLoop() {
	that.update();
	that.draw();
	if (that.running) {
	    requestAnimFrame( gameLoop );
	}
    })();
}

Game.prototype.update = function() {

    var now = new Date();
    var that = this;

    // Check slot status and if spun long enough stop it on result
    function _check_slot( offset, result ) {
	if ( now - that.lastUpdate > SPINTIME ) {
	    var c = parseInt(Math.abs( offset / SLOT_HEIGHT)) % ITEM_COUNT;
	    if ( c == result ) {
		if ( result == 0 ) {
		    if ( Math.abs(offset + (ITEM_COUNT * SLOT_HEIGHT)) < (SLOT_SPEED * 1.5)) {
			return true; // done
		    }
		} else if ( Math.abs(offset + (result * SLOT_HEIGHT)) < (SLOT_SPEED * 1.5)) {
		    return true; // done
		}
	    }
	}
	return false;
    }

    switch (this.state) {
    case 1: // all slots spinning
	if (now - this.lastUpdate > RUNTIME) {
	    this.state = 2;
	    this.lastUpdate = now;
	}
	break;
    case 2: // slot 1
	this.stopped1 = _check_slot( this.offset1, this.result1 );
	if ( this.stopped1 ) {
	    this.speed1 = 0;
	    this.state++;
	    this.lastUpdate = now;
	}
	break;
    case 3: // slot 1 stopped, slot 2
	this.stopped2 = _check_slot( this.offset2, this.result2 );
	if ( this.stopped2 ) {
	    this.speed2 = 0;
	    this.state++;
	    this.lastUpdate = now;
	}
	break;
    case 4: // slot 2 stopped, slot 3
	this.stopped3 = _check_slot( this.offset3, this.result3 );
	if ( this.stopped3 ) {
	    this.speed3 = 0;
	    this.state++;
	}
	break;
    case 5: // slots stopped
	if ( now - this.lastUpdate > 3000 ) {
	    this.state = 6;
	}
	break;
    case 6: // check results
	var ec = 0;
	var that = this;

	var energye = $('#results #score');
	function _add_win( delay, score ) {

	    setTimeout(function() {

	    }, delay * 1000 );
	}
	$('#results').show();
	// if (that.items1[that.result1].id == '5000') {
	//     ec++;
	// }
	// if (that.items2[that.result2].id == '5000') {
	//     ec++;
	// }
	// if (that.items3[that.result3].id == '5000') {
	//     ec++;
	// }
	// console.log(that.items1[that.result1].id, that.items2[that.result2].id, that.items3[that.result3].id)
	console.log(that.items1)
	console.log(that.items2)
	console.log(that.items3)



	// $('#multiplier').text(ec);

	// $('#status').text(BLURB_TBL[ec]);
	var totalAns = that.items1[that.result1].value + that.items2[that.result2].value + that.items3[that.result3].value
	var jackpot = that.items1[that.result1].value == that.items2[that.result2].value && that.items1[that.result1].value  == that.items3[that.result3].value ? "JACKPOT!!!" : ""
	$('#status').text(`${jackpot}YOU WIN ${totalAns}!`);

	this.state = 7;
	break;
    case 7: // game ends
	break;
    default:
    }
    this.lastupdate = now;
}

Game.prototype.draw = function( force ) {

    if (this.state >= 6 ) return;

    // draw the spinning slots based on current state
    for (var i=1; i <= 3; i++ ) {
	var resultp = 'result'+i;
	var stopped = 'stopped'+i;
	var speedp = 'speed'+i;
	var offsetp = 'offset'+i;
	var cp = 'c'+i;
	if (this[stopped] || this[speedp] || force) {
	    if (this[stopped]) {
		this[speedp] = 0;
		var c = this[resultp]; // get stop location
		this[offsetp] = -(c * SLOT_HEIGHT);

		if (this[offsetp] + DRAW_OFFSET > 0) {
		    // reset back to beginning
		    this[offsetp] = -this.resetOffset + SLOT_HEIGHT * 3;
		}

	    } else {
		this[offsetp] += this[speedp];
		if (this[offsetp] + DRAW_OFFSET > 0) {
		    // reset back to beginning
		    this[offsetp] = -this.resetOffset + SLOT_HEIGHT * 3 - DRAW_OFFSET;
		}
	    }
	    // translate canvas location
	    this[cp].css(this.cssTransform, this.trnOpen + '0px, '+(this[offsetp] + DRAW_OFFSET)+'px' + this.trnClose);
	}
    }
}
