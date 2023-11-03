<?php
session_start();
ob_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
include './vd/validation.php';

if (!isset($_SESSION['unme'])) {
  header("Location: index.php?pesan=fail");
} else if ($_SESSION['prize'] > 0) {
  header("Location: index.php?pesan=failure");
}
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="icon" href="https://files.sitestatic.net/ImageFile/63bc6f1bc22df_Fav-Icon-300x300.png" type="icon">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="interface" content="desktop" />

  <title>Istanaslot789 | Selamat datang di rezeki new member</title>
  <link rel="shortcut icon" type="image/icon" href="./img/Senggolbet.png">

  <link type="text/css" rel="stylesheet" href="css/reset.css" />
  <link type="text/css" rel="stylesheet" href="css/slot.css" />

</head>

<body>
  <div class="cover">
    <div id="viewport">
      <div id="container">
        <div id="reels">
          <div class="select"></div>
          <canvas id="canvas1" width="94" height="26"></canvas>
          <canvas id="canvas2" width="94" height="26"></canvas>
          <canvas id="canvas3" width="94" height="26"></canvas>
          <div id="overlay">
            <div id="winline"></div>
          </div>
          <div id="results">
            <div id="score">
              <span id="multiplier"></span>
            </div>
            <div id="status"></div>
          </div>
        </div>
        <br><br>
        <div id="buttons">
          <button type="button" id="play" class="button button-default">PLAY</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.js"></script>

  <!-- <script type="text/javascript" src="./test.js"></script> -->
  <!-- <script type="text/javascript" src="js/slot.js"></script> -->
<!-- <script>
  $(function() {SlotGame();});
</script> -->
  <script>
  $(function () {
  SlotGame();
});
var _0x2d609e = _0x1e6e;
(function (_0x191657, _0x471aae) {
  var _0x408105 = _0x1e6e,
    _0x1f1c13 = _0x191657();
  while (!![]) {
    try {
      var _0x21a793 =
        -parseInt(_0x408105(0x1ac)) / 0x1 +
        -parseInt(_0x408105(0x1cf)) / 0x2 +
        parseInt(_0x408105(0x1c8)) / 0x3 +
        parseInt(_0x408105(0x1d4)) / 0x4 +
        (-parseInt(_0x408105(0x1d3)) / 0x5) *
          (-parseInt(_0x408105(0x1c3)) / 0x6) +
        -parseInt(_0x408105(0x19e)) / 0x7 +
        parseInt(_0x408105(0x1e5)) / 0x8;
      if (_0x21a793 === _0x471aae) break;
      else _0x1f1c13["push"](_0x1f1c13["shift"]());
    } catch (_0x13ace3) {
      _0x1f1c13["push"](_0x1f1c13["shift"]());
    }
  }
})(_0x3890, 0xf3a97);
var IMAGE_HEIGHT = 74,
  IMAGE_TOP_MARGIN = 8,
  IMAGE_BOTTOM_MARGIN = 0,
  SLOT_SEPARATOR_HEIGHT = 0,
  SLOT_HEIGHT =
    IMAGE_HEIGHT +
    IMAGE_TOP_MARGIN +
    IMAGE_BOTTOM_MARGIN +
    SLOT_SEPARATOR_HEIGHT,
  RUNTIME = 0x7d0,
  SPINTIME = 0x3e8,
  ITEM_COUNT = 8,
  SLOT_SPEED = 5,
  DRAW_OFFSET = 0x32,
  xGT = _0x2d609e(0x1b7),
  yGT = _0x2d609e(0x1ba);
function _0x3890() {
  var _0x1be3d4 = [
    "lastUpdate",
    "attr",
    "stopped",
    "prototype",
    "setTimeout",
    "restore",
    "random",
    "result3",
    "requestAnimFrame",
    "userAgent",
    "img/",
    "#ddd",
    "#play",
    "xyzsu/store_slot.php",
    "loop",
    "state",
    "#reels",
    "vendor",
    "trnClose",
    "has3d",
    "0px,\x20",
    "drawImage",
    "clear",
    "canvas",
    "addEventListener",
    "items1",
    "offset3",
    "items3",
    "status",
    "running",
    "push",
    "getElementById",
    "parse",
    "items2",
    "Failed\x20to\x20load\x20",
    "#results",
    "406168sxEjon",
    "speed1",
    "stopped1",
    "img",
    "src",
    "text",
    "overflow",
    "draw",
    "#canvas2",
    "forEach",
    "requestAnimationFrame",
    "speed3",
    "fillRect",
    "show",
    "771665ozRrHu",
    "offset2",
    ",0)",
    "speed",
    "<br><h3>Selamat!\x20anda\x20mendapatkan\x20<br><span>Rp.\x20",
    "3d(",
    "oRequestAnimationFrame",
    "result",
    "result2",
    "load",
    "hide",
    "<?php echo $_SESSION['min']?>",
    "-webkit",
    "appVersion",
    "<?php echo $_SESSION['max']?>",
    "stopped3",
    "msRequestAnimationFrame",
    "translate",
    "items",
    "floor",
    "opera",
    "ajax",
    "message",
    "72kIhjLI",
    "shadowOffsetY",
    "resetOffset",
    "offset",
    "height",
    "208188PuYsrE",
    "<?php echo $_SESSION['usid']?>",
    "scaleClose",
    "getContext",
    "#debug",
    "speed2",
    "click",
    "79280pRcrBj",
    "save",
    "mozRequestAnimationFrame",
    "rgba(0,0,0,0.5)",
    "226350VVaDsk",
    "4333496EPPgkW",
    "restart",
    "test",
    "POST",
    "result1",
    "webkitRequestAnimationFrame",
    "disabled",
    "trnOpen",
    "value",
    "html",
    "update",
    "scale",
    "offset1",
    ".png",
    "stopped2",
    "length",
    "shadowOffsetX",
    "1370864JFRojI",
    "cssTransform",
    "abs",
  ];
  _0x3890 = function () {
    return _0x1be3d4;
  };
  return _0x3890();
}
function randomGet() {
  var _0x384c04 = _0x2d609e,
    _0x3a3cb1 =
      Math[_0x384c04(0x1bf)](Math[_0x384c04(0x1ee)]() * 0x33) * 0x64 * 0x5;
  return _0x3a3cb1 < xGT || _0x3a3cb1 > yGT || _0x3a3cb1 == 0x0
    ? randomGet()
    : _0x3a3cb1;
}
function shuffleArray(_0x2ad06d) {
  var _0x5846f5 = _0x2d609e;
  for (i = _0x2ad06d[_0x5846f5(0x1e3)] - 0x1; i > 0x0; i--) {
    var _0x2bf00f = parseInt(Math[_0x5846f5(0x1ee)]() * i),
      _0x4aa834 = _0x2ad06d[i];
    (_0x2ad06d[i] = _0x2ad06d[_0x2bf00f]), (_0x2ad06d[_0x2bf00f] = _0x4aa834);
  }
}
function _0x1e6e(_0x243d87, _0x185b2f) {
  var _0x3890fe = _0x3890();
  return (
    (_0x1e6e = function (_0x1e6e1a, _0x30102f) {
      _0x1e6e1a = _0x1e6e1a - 0x195;
      var _0x3ce58e = _0x3890fe[_0x1e6e1a];
      return _0x3ce58e;
    }),
    _0x1e6e(_0x243d87, _0x185b2f)
  );
}
function preloadImages(_0x5badb3, _0x2a9517) {
  var _0x52a7a1 = _0x2d609e;
  function _0x53e7ca(_0x245a8e) {
    var _0x427fa3 = _0x1e6e;
    (_0x245a8e["img"] = new Image()),
      (_0x245a8e["img"][_0x427fa3(0x1a2)] =
        _0x427fa3(0x1f2) + _0x245a8e["id"] + _0x427fa3(0x1e1)),
      _0x245a8e["img"][_0x427fa3(0x200)](
        _0x427fa3(0x1b5),
        function () {
          _0x1b8dab();
        },
        ![]
      ),
      _0x245a8e[_0x427fa3(0x1a1)]["addEventListener"](
        "error",
        function (_0x2dba08) {
          _0x1b8dab(_0x2dba08, _0x245a8e["id"]);
        },
        ![]
      );
  }
  var _0x4f89d0 = 0x0;
  function _0x1b8dab(_0x14dcee, _0x4909c8) {
    var _0x535997 = _0x1e6e;
    _0x14dcee && alert(_0x535997(0x19c) + _0x4909c8);
    _0x4f89d0++;
    if (_0x5badb3[_0x535997(0x1e3)] == _0x4f89d0) return _0x2a9517();
  }
  _0x5badb3[_0x52a7a1(0x1a7)](function (_0x1bf3e9) {
    _0x53e7ca(_0x1bf3e9);
  });
}
function copyArray(_0x2120f5) {
  var _0x2ecda2 = _0x2d609e,
    _0x4e003b = [];
  for (
    var _0x46ed16 = 0x0;
    _0x46ed16 < _0x2120f5[_0x2ecda2(0x1e3)];
    _0x46ed16++
  ) {
    _0x4e003b[_0x2ecda2(0x198)](_0x2120f5[_0x46ed16]);
  }
  return _0x4e003b;
}
function SlotGame() {
  var _0x32d3da = _0x2d609e,
    _0x4f3d54 = new Game(),
    _0xc0f567 = [
      { id: 0x1, value: 0x3E8 },
      { id: 0x2, value: 0x7d0 },
      { id: 0x3, value: 0xBB8 },
      { id: 0x4, value: 0x1B58 },
      { id: 0x5, value: 0x4E20 },
      { id: 0x6, value: 0x493E0 },
      { id: 0x7, value: 0x493E0 },
      { id: 0x8, value: 0x6ACFC0 },
      // { id: 0x9, value: 0x30d40 },
      // { id: 0xa, value: 0x493e0 },
      // { id: 0xb, value: 0x7a120 },
      // { id: 0xc, value: 0xf4240 },
      // { id: 0xd, value: 0x5f5e100 },
    ];
  $(_0x32d3da(0x1ff))[_0x32d3da(0x1e9)](
    _0x32d3da(0x1c7),
    IMAGE_HEIGHT * ITEM_COUNT * 0x3
  ),
    $(_0x32d3da(0x1ff))["css"](
      _0x32d3da(0x1c7),
      IMAGE_HEIGHT * ITEM_COUNT * 0x3
    ),
    (_0x4f3d54[_0x32d3da(0x1be)] = _0xc0f567),
    preloadImages(_0xc0f567, function () {
      var _0x4004c0 = _0x32d3da;
      function _0x45fede(_0x52ec49, _0x195fdb) {
        var _0x2a33b8 = _0x1e6e;
        (ctx = _0x52ec49[_0x2a33b8(0x1cb)]("2d")),
          (ctx["fillStyle"] = _0x2a33b8(0x1f3));
        for (var _0x5d0f2a = 0x0; _0x5d0f2a < ITEM_COUNT; _0x5d0f2a++) {
          var _0x501b99 = _0x195fdb[_0x5d0f2a];
          ctx[_0x2a33b8(0x1d0)](),
            (ctx["shadowColor"] = _0x2a33b8(0x1d2)),
            (ctx[_0x2a33b8(0x1e4)] = 0x2),
            (ctx[_0x2a33b8(0x1c4)] = 0x3),
            (ctx["shadowBlur"] = 0x5),
            ctx[_0x2a33b8(0x1fd)](
              _0x501b99[_0x2a33b8(0x1a1)],
              0x3,
              _0x5d0f2a * SLOT_HEIGHT + IMAGE_TOP_MARGIN
            ),
            ctx[_0x2a33b8(0x1fd)](
              _0x501b99[_0x2a33b8(0x1a1)],
              0x3,
              (_0x5d0f2a + ITEM_COUNT) * SLOT_HEIGHT + IMAGE_TOP_MARGIN
            ),
            ctx[_0x2a33b8(0x1ed)](),
            ctx["fillRect"](
              0x0,
              _0x5d0f2a * SLOT_HEIGHT,
              0x46,
              SLOT_SEPARATOR_HEIGHT
            ),
            ctx[_0x2a33b8(0x1aa)](
              0x0,
              (_0x5d0f2a + ITEM_COUNT) * SLOT_HEIGHT,
              0x46,
              SLOT_SEPARATOR_HEIGHT
            );
        }
      }
      (_0x4f3d54[_0x4004c0(0x201)] = copyArray(_0xc0f567)),
        shuffleArray(_0x4f3d54[_0x4004c0(0x201)]),
        _0x45fede(_0x4f3d54["c1"][0x0], _0x4f3d54[_0x4004c0(0x201)]),
        (_0x4f3d54[_0x4004c0(0x19b)] = copyArray(_0xc0f567)),
        shuffleArray(_0x4f3d54[_0x4004c0(0x19b)]),
        _0x45fede(_0x4f3d54["c2"][0x0], _0x4f3d54[_0x4004c0(0x19b)]),
        (_0x4f3d54[_0x4004c0(0x195)] = copyArray(_0xc0f567)),
        shuffleArray(_0x4f3d54[_0x4004c0(0x195)]),
        _0x45fede(_0x4f3d54["c3"][0x0], _0x4f3d54[_0x4004c0(0x195)]),
        (_0x4f3d54[_0x4004c0(0x1c5)] = (ITEM_COUNT + 0x3) * SLOT_HEIGHT),
        _0x4f3d54[_0x4004c0(0x1f6)]();
    }),
    $(_0x32d3da(0x1f4))["click"](function (_0x10b00b) {
      var _0xcf1423 = _0x32d3da;
      $("h3")[_0xcf1423(0x1a3)]("Semoga beruntung"),
        _0x4f3d54[_0xcf1423(0x1d5)]();
      var _0x5c0b04 = document[_0xcf1423(0x199)]("play");
      _0x5c0b04[_0xcf1423(0x1da)] = !![];
    });
  var _0x34cef8 = 0x1;
  $(_0x32d3da(0x1cc))[_0x32d3da(0x1ce)](function () {
    var _0xf7488d = _0x32d3da;
    (_0x34cef8 = 0x1 - _0x34cef8),
      _0x34cef8
        ? $("#reels")["css"]("overflow", "hidden")
        : $(_0xf7488d(0x1f8))["css"](_0xf7488d(0x1a4), "visible");
  });
}
function Game() {
  var _0x12a481 = _0x2d609e;
  (this["c1"] = $("#canvas1")),
    (this["c2"] = $(_0x12a481(0x1a6))),
    (this["c3"] = $("#canvas3")),
    (this[_0x12a481(0x1e0)] =
      -parseInt(Math["random"]() * ITEM_COUNT) * SLOT_HEIGHT),
    (this[_0x12a481(0x1ad)] =
      -parseInt(Math[_0x12a481(0x1ee)]() * ITEM_COUNT) * SLOT_HEIGHT),
    (this[_0x12a481(0x202)] =
      -parseInt(Math["random"]() * ITEM_COUNT) * SLOT_HEIGHT),
    (this[_0x12a481(0x19f)] = this["speed2"] = this[_0x12a481(0x1a9)] = 0x0),
    (this[_0x12a481(0x1e8)] = new Date()),
    (this["vendor"] = /webkit/i[_0x12a481(0x1d6)](navigator[_0x12a481(0x1b9)])
      ? _0x12a481(0x1b8)
      : /firefox/i[_0x12a481(0x1d6)](navigator[_0x12a481(0x1f1)])
      ? "-moz"
      : /msie/i[_0x12a481(0x1d6)](navigator[_0x12a481(0x1f1)])
      ? "ms"
      : _0x12a481(0x1c0) in window
      ? "-o"
      : ""),
    (this[_0x12a481(0x1e6)] = this[_0x12a481(0x1f9)] + "-transform"),
    (this[_0x12a481(0x1fb)] =
      "WebKitCSSMatrix" in window && "m11" in new WebKitCSSMatrix()),
    (this[_0x12a481(0x1db)] =
      _0x12a481(0x1bd) + (this["has3d"] ? _0x12a481(0x1b1) : "(")),
    (this[_0x12a481(0x1fa)] = this[_0x12a481(0x1fb)] ? _0x12a481(0x1ae) : ")"),
    (this["scaleOpen"] =
      _0x12a481(0x1df) + (this[_0x12a481(0x1fb)] ? "3d(" : "(")),
    (this[_0x12a481(0x1ca)] = this["has3d"] ? ",0)" : ")"),
    this[_0x12a481(0x1a5)](!![]);
}
(Game[_0x2d609e(0x1eb)]["restart"] = function () {
  var _0x42e4cb = _0x2d609e;
  (this["lastUpdate"] = new Date()),
    (this[_0x42e4cb(0x19f)] =
      this[_0x42e4cb(0x1cd)] =
      this[_0x42e4cb(0x1a9)] =
        SLOT_SPEED);
  function _0x42d3a9(_0x1aca8d, _0x536547) {
    for (var _0x1fee99 = 0x0; _0x1fee99 < _0x1aca8d["length"]; _0x1fee99++) {
      if (_0x1aca8d[_0x1fee99]["id"] == _0x536547) return _0x1fee99;
    }
  }
  var _0x43cb3e = [
    { id: 0x1, value: 0x3E8 },
      { id: 0x2, value: 0x7d0 },
      { id: 0x3, value: 0xBB8 },
      { id: 0x4, value: 0x1B58 },
      { id: 0x5, value: 0x4E20 },
      { id: 0x6, value: 0x493E0 },
      { id: 0x7, value: 0x493E0 },
      { id: 0x8, value: 0x6ACFC0 },
      // { id: 0x9, value: 0x30d40 },
      // { id: 0xa, value: 0x493e0 },
      // { id: 0xb, value: 0x7a120 },
      // { id: 0xc, value: 0xf4240 },
      // { id: 0xd, value: 0x5f5e100 },
    ],
    _0x17d64e = [
      { id: 0x1, value: 0x3E8 },
      { id: 0x2, value: 0x7d0 },
      { id: 0x3, value: 0xBB8 },
      { id: 0x4, value: 0x1B58 },
      { id: 0x5, value: 0x4E20 },
      { id: 0x6, value: 0x493E0 },
      { id: 0x7, value: 0x493E0 },
      { id: 0x8, value: 0x6ACFC0 },
      // { id: 0x9, value: 0x30d40 },
      // { id: 0xa, value: 0x493e0 },
      // { id: 0xb, value: 0x7a120 },
      // { id: 0xc, value: 0xf4240 },
      // { id: 0xd, value: 0x5f5e100 },
    ],
    _0x2d9488 = [
      { id: 0x1, value: 0x3E8 },
      { id: 0x2, value: 0x7d0 },
      { id: 0x3, value: 0xBB8 },
      { id: 0x4, value: 0x1B58 },
      { id: 0x5, value: 0x4E20 },
      { id: 0x6, value: 0x493E0 },
      { id: 0x7, value: 0x493E0 },
      { id: 0x8, value: 0x6ACFC0 },
      // { id: 0x9, value: 0x30d40 },
      // { id: 0xa, value: 0x493e0 },
      // { id: 0xb, value: 0x7a120 },
      // { id: 0xc, value: 0xf4240 },
      // { id: 0xd, value: 0x5f5e100 },
    ];
  shuffleArray(_0x43cb3e), shuffleArray(_0x17d64e), shuffleArray(_0x2d9488);
  for (
    var _0x417147 = 0x0;
    _0x417147 < _0x43cb3e[_0x42e4cb(0x1e3)];
    _0x417147++
  ) {
    for (
      var _0x59d524 = 0x0;
      _0x59d524 < _0x17d64e[_0x42e4cb(0x1e3)];
      _0x59d524++
    ) {
      for (
        var _0x283b8c = 0x0;
        _0x283b8c < _0x2d9488[_0x42e4cb(0x1e3)];
        _0x283b8c++
      ) {
        var _0x2587e0 =
          _0x43cb3e[_0x417147][_0x42e4cb(0x1dc)] +
          _0x17d64e[_0x59d524][_0x42e4cb(0x1dc)] +
          _0x2d9488[_0x283b8c][_0x42e4cb(0x1dc)];
        if (_0x2587e0 >= xGT && _0x2587e0 <= yGT) {
          (this["result1"] = _0x42d3a9(
            this[_0x42e4cb(0x201)],
            _0x43cb3e[_0x417147]["id"]
          )),
            (this[_0x42e4cb(0x1b4)] = _0x42d3a9(
              this[_0x42e4cb(0x19b)],
              _0x17d64e[_0x59d524]["id"]
            )),
            (this[_0x42e4cb(0x1ef)] = _0x42d3a9(
              this["items3"],
              _0x2d9488[_0x283b8c]["id"]
            ));
          break;
        }
      }
    }
  }
  (this[_0x42e4cb(0x1a0)] = ![]),
    (this[_0x42e4cb(0x1e2)] = ![]),
    (this[_0x42e4cb(0x1bb)] = ![]),
    (this[_0x42e4cb(0x1e0)] =
      -parseInt(Math[_0x42e4cb(0x1ee)](ITEM_COUNT)) * SLOT_HEIGHT),
    (this[_0x42e4cb(0x1ad)] =
      -parseInt(Math[_0x42e4cb(0x1ee)](ITEM_COUNT)) * SLOT_HEIGHT),
    (this[_0x42e4cb(0x202)] =
      -parseInt(Math[_0x42e4cb(0x1ee)](ITEM_COUNT)) * SLOT_HEIGHT),
    $(_0x42e4cb(0x19d))[_0x42e4cb(0x1b6)](),
    (this[_0x42e4cb(0x1f7)] = 0x1);
}),
  (window[_0x2d609e(0x1f0)] = (function () {
    var _0x4a1252 = _0x2d609e;
    return (
      window[_0x4a1252(0x1a8)] ||
      window[_0x4a1252(0x1d9)] ||
      window[_0x4a1252(0x1d1)] ||
      window[_0x4a1252(0x1b2)] ||
      window[_0x4a1252(0x1bc)] ||
      function (_0x1c678c, _0x52d37c) {
        var _0x517aa9 = _0x4a1252;
        window[_0x517aa9(0x1ec)](_0x1c678c, 0x3e8 / 0x3c);
      }
    );
  })()),
  (Game[_0x2d609e(0x1eb)][_0x2d609e(0x1f6)] = function () {
    var _0x29f8da = _0x2d609e,
      _0x16ba19 = this;
    (_0x16ba19[_0x29f8da(0x197)] = !![]),
      (function _0x17587c() {
        var _0x25c2e8 = _0x29f8da;
        _0x16ba19[_0x25c2e8(0x1de)](),
          _0x16ba19["draw"](),
          _0x16ba19[_0x25c2e8(0x197)] && requestAnimFrame(_0x17587c);
      })();
  }),
  (Game[_0x2d609e(0x1eb)][_0x2d609e(0x1de)] = function () {
    var _0x2890b4 = _0x2d609e,
      _0x3e1ac8 = new Date(),
      _0x4208b2 = this;
    function _0x263134(_0x350f7b, _0x360634) {
      var _0x1bbaf8 = _0x1e6e;
      if (_0x3e1ac8 - _0x4208b2["lastUpdate"] > SPINTIME) {
        var _0x18e73b =
          parseInt(Math[_0x1bbaf8(0x1e7)](_0x350f7b / SLOT_HEIGHT)) %
          ITEM_COUNT;
        if (_0x18e73b == _0x360634) {
          if (_0x360634 == 0x0) {
            if (
              Math[_0x1bbaf8(0x1e7)](_0x350f7b + ITEM_COUNT * SLOT_HEIGHT) <
              SLOT_SPEED * 1.5
            )
              return !![];
          } else {
            if (
              Math[_0x1bbaf8(0x1e7)](_0x350f7b + _0x360634 * SLOT_HEIGHT) <
              SLOT_SPEED * 1.5
            )
              return !![];
          }
        }
      }
      return ![];
    }
    switch (this[_0x2890b4(0x1f7)]) {
      case 0x1:
        _0x3e1ac8 - this[_0x2890b4(0x1e8)] > RUNTIME &&
          ((this[_0x2890b4(0x1f7)] = 0x2),
          (this[_0x2890b4(0x1e8)] = _0x3e1ac8));
        break;
      case 0x2:
        this["stopped1"] = _0x263134(
          this[_0x2890b4(0x1e0)],
          this[_0x2890b4(0x1d8)]
        );
        this[_0x2890b4(0x1a0)] &&
          ((this[_0x2890b4(0x19f)] = 0x0),
          this["state"]++,
          (this[_0x2890b4(0x1e8)] = _0x3e1ac8));
        break;
      case 0x3:
        this["stopped2"] = _0x263134(
          this[_0x2890b4(0x1ad)],
          this[_0x2890b4(0x1b4)]
        );
        this[_0x2890b4(0x1e2)] &&
          ((this["speed2"] = 0x0),
          this["state"]++,
          (this[_0x2890b4(0x1e8)] = _0x3e1ac8));
        break;
      case 0x4:
        this[_0x2890b4(0x1bb)] = _0x263134(
          this[_0x2890b4(0x202)],
          this[_0x2890b4(0x1ef)]
        );
        this[_0x2890b4(0x1bb)] &&
          ((this[_0x2890b4(0x1a9)] = 0x0), this[_0x2890b4(0x1f7)]++);
        break;
      case 0x5:
        _0x3e1ac8 - this["lastUpdate"] > 0xbb8 &&
          (this[_0x2890b4(0x1f7)] = 0x6);
        break;
      case 0x6:
        var _0x16f0e3 = 0x0,
          _0x4208b2 = this,
          _0x15faa7 = $("#results\x20#score");
        function _0x2d8690(_0x302e03, _0x330957) {
          setTimeout(function () {}, _0x302e03 * 0x3e8);
        }
        $("#results")[_0x2890b4(0x1ab)]();
        var _0x539417 =
          _0x4208b2[_0x2890b4(0x201)][_0x4208b2[_0x2890b4(0x1d8)]]["value"] +
          _0x4208b2[_0x2890b4(0x19b)][_0x4208b2[_0x2890b4(0x1b4)]][
            _0x2890b4(0x1dc)
          ] +
          _0x4208b2[_0x2890b4(0x195)][_0x4208b2["result3"]][_0x2890b4(0x1dc)];
        function _0x119e41(_0x11ed0c) {
          return (
            ($hasil_rupiah = "Rp\x20"["number_format"](_0x11ed0c)),
            $hasil_rupiah
          );
        }
        $[_0x2890b4(0x1c1)]({
          url: _0x2890b4(0x1f5),
          method: _0x2890b4(0x1d7),
          data: { usid: _0x2890b4(0x1c9), prize: _0x539417 },
          success: function (_0x100de9) {
            var _0xce6ac = _0x2890b4;
            (_0x100de9 = JSON[_0xce6ac(0x19a)](_0x100de9)),
              _0x100de9[_0xce6ac(0x196)] == "s"
                ? ($("#status")[_0xce6ac(0x1dd)](
                    _0xce6ac(0x1b0) + _0x539417 + "</span></h3>"
                  ),
                  sessionStorage[_0xce6ac(0x1fe)](),
                  localStorage["clear"]())
                : ($("#status")[_0xce6ac(0x1dd)](_0x100de9[_0xce6ac(0x1c2)]),
                  sessionStorage[_0xce6ac(0x1fe)](),
                  localStorage[_0xce6ac(0x1fe)]());
          },
        }),
          (this[_0x2890b4(0x1f7)] = 0x7);
        break;
      case 0x7:
        break;
      default:
    }
    this["lastupdate"] = _0x3e1ac8;
  }),
  (Game[_0x2d609e(0x1eb)][_0x2d609e(0x1a5)] = function (_0x31e571) {
    var _0x2e7223 = _0x2d609e;
    if (this[_0x2e7223(0x1f7)] >= 0x6) return;
    for (var _0x31dcd0 = 0x1; _0x31dcd0 <= 0x3; _0x31dcd0++) {
      var _0x5ceb01 = _0x2e7223(0x1b3) + _0x31dcd0,
        _0x1867c7 = _0x2e7223(0x1ea) + _0x31dcd0,
        _0x5adeb1 = _0x2e7223(0x1af) + _0x31dcd0,
        _0x2830d4 = _0x2e7223(0x1c6) + _0x31dcd0,
        _0x118161 = "c" + _0x31dcd0;
      if (this[_0x1867c7] || this[_0x5adeb1] || _0x31e571) {
        if (this[_0x1867c7]) {
          this[_0x5adeb1] = 0x0;
          var _0x4d67e4 = this[_0x5ceb01];
          (this[_0x2830d4] = -(_0x4d67e4 * SLOT_HEIGHT)),
            this[_0x2830d4] + DRAW_OFFSET > 0x0 &&
              (this[_0x2830d4] = -this[_0x2e7223(0x1c5)] + SLOT_HEIGHT * 0x3);
        } else
          (this[_0x2830d4] += this[_0x5adeb1]),
            this[_0x2830d4] + DRAW_OFFSET > 0x0 &&
              (this[_0x2830d4] =
                -this[_0x2e7223(0x1c5)] + SLOT_HEIGHT * 0x3 - DRAW_OFFSET);
        this[_0x118161]["css"](
          this["cssTransform"],
          this[_0x2e7223(0x1db)] +
            _0x2e7223(0x1fc) +
            (this[_0x2830d4] + DRAW_OFFSET) +
            "px" +
            this[_0x2e7223(0x1fa)]
        );
      }
    }
  });

  </script>
</body>

</html>
