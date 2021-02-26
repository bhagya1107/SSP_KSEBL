(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
var rect; // used to reference frame bounds
lib.ssMetadata = [];


(lib.AnMovieClip = function(){
	this.actionFrames = [];
	this.ignorePause = false;
	this.gotoAndPlay = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndPlay.call(this,positionOrLabel);
	}
	this.play = function(){
		cjs.MovieClip.prototype.play.call(this);
	}
	this.gotoAndStop = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndStop.call(this,positionOrLabel);
	}
	this.stop = function(){
		cjs.MovieClip.prototype.stop.call(this);
	}
}).prototype = p = new cjs.MovieClip();
// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop, this.reversed));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.WarpedAsset_1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-163,0,163.2,0).s().p("EADSAjyQiagHihgdIiEgcQg8gGgqg8Qgkg2gBg/QgEhuAElyIAEldQgFjwABj7QAAg3gTg1QgUgzgkgrQocp9l2uxQh0kohWkjIg+joQB9i+ClhDQBSghA6AFQCrJtDTHmQCaFiCgD7QA8BgBcBFQBbBDBuAgIB5AkQB9AlCBgWIF1hAQA4gJAugaQBBgjAdhDQCFktBgmBQCcpwAAqCIAyABQA/AEA8ARQC+A5BZCsIgBDDQgID3gkEFQhzNClgKTQgDBmgHCNIgKDLQgOEVgmFeQgEAwgMD8QgOEzADCJQACAYgLAWQgJAWgSAQIg2AtQjOC+mpAAQgrAAgugCg");
	this.shape.setTransform(0,0.0251);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(-163,-229.1,326.1,458.4);
p.frameBounds = [rect];


(lib.Symbol1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// man2_hand_rt
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#1C75BB").s().p("ArhOWQgdhDgShNIgMg/QAQiqBbhaQAcgcAhgRIAbgLQIGjPEyq2QBgjZA/jwIAsjEQCHgTCEAnQBCAUAmAXQghOjpuL2QjBDtjmDAQhzBghMAwQirghhejXg");
	this.shape.setTransform(79.7,168.5774);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F9BAA9").s().p("AsDRmQhJkeCjiPQBAgWBgg0QDAhoChiTQIFnXAVrYQgJgRgJgZQgRgxADgmIAQhcQANhKgEgdQgHgrgqhcQgHgRADgMQAMgzBIgNQA5gJBIAPQAjAIAcAYQAcAZAKAiQAcBXAJBlQAFAygCAhQAPgVAJgSQAPghAIg6QAEgeAcgJQANgFAOgBQAVgBADAKQABADgBAGQgMBWgCArQgEBBg5BXQgcArgcAeIABA6QgBBLgJBWQgcEShhESQk3Ntt0IqQhFhzgkiPg");
	this.shape_1.setTransform(87.659,138.3445);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(40));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,167.1,285.2);
p.frameBounds = [rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect];


(lib.man4rt1hand = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#1C75BB").s().p("ApRBbQjQiPisilIiDiHIDfkgQJ1HxLkC/QDoA8DXAWQBtAMA8gBIj+H0QsKhYqZnOg");
	this.shape.setTransform(149.75,93.575);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F9BAA9").s().p("AB5EdQgIABgCgCQiahEhJg4Qg+gug9hVQg9hUgKgrQgMg0AhhKQAehAA+ADQAfACAZAPQBUBjBZBCQAtAhAcANQAFgMgDgVQgGgrgngvQgngvAPgeQAEgJAKgHIAIgEIAdAKQAmAWArA+QAsA+AyBiQAZAwAQAkIAKAJIgBAAQgBATgXAkQgvBJhvBYQgCgBgJAAg");
	this.shape_1.setTransform(31.4418,28.591);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,260.2,157.7);
p.frameBounds = [rect];


(lib.man3rthand = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#DCEB2A").s().p("AjYMGQg7gPgoguIn+pdQh5ing9jEQh5mGEviFILuPpIO8lAIAgAiQAmAsAcAuQBaCYgmCDIxsHIQgiANgjAAQgXAAgXgFg");
	this.shape.setTransform(104.215,77.9461);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F9BAA9").s().p("AkMEpIh5lXIBWhIQBkhRBMguQBMgtAzgGQAZgDALAHIAHAJQAHAMABAMQABAog/AgQhBAggaArIgOAmIBlgNQCAgbCKhCIAVAAQAaACAWAJQBFAcABBVQACBhgmAyQgfArhqA9QhvBAhNASQhWAVidAAIg2gBg");
	this.shape_1.setTransform(229.6801,77.9312);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,268.7,155.9);
p.frameBounds = [rect];


(lib.man2lefthand = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#1C75BB").s().p("AjMEGQAFhRAChuQAFjbgMiPIAZgLQAhgOAngJQB5gfCDAQIANA1QAQBFALBNQAkD3gbDxg");
	this.shape.setTransform(87.6413,88.8389);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F9BAA9").s().p("AnNSOQh4kjCDieQAxghBHhCQCPiFBtilQFfoOhoqQQgLgDgOgKQgdgUgSgjQgOgdghhSQgghQgHgOIAcgNQAggIAUAfIAlA8QAWAkASAOIAHg/QACgqgHgYQgHgagXgyQgVgwgNgVQgKgOABgNQAGg1BCgfQA8gcBCAFQAlADAeAUQAfAUAOAgQAoBRAVBgQAMAwACAgIAAA4QgDBFgPBBIAOA3QAPBGALBRQAfEEggETQhqNtrJLDQhWhxg7iRg");
	this.shape_1.setTransform(51.9498,142.4549);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,108.2,284.9);
p.frameBounds = [rect];


(lib.Path_11 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("Aq9KiQlEg4j6hlQj5hliJiEQiOiHAAiVQAAiUCOiIQCJiDD5hlQD6hlFEg4QFPg5FuAAQFvAAFPA5QFEA4D6BlQD5BlCJCDQCOCIAACUQAACViOCHQiJCEj5BlQj6BllEA4QlPA5lvAAQluAAlPg5g");
	this.shape.setTransform(180.425,73.125);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_11, rect = new cjs.Rectangle(0,0,360.9,146.3), [rect]);


(lib.Path_10 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("Ap/JmQkngzjkhcQjjhch9h4QiBh8AAiHQAAiGCBh8QB9h4DjhcQDkhcEngzQExg0FOAAQFOAAEyA0QEnAzDjBcQDkBcB9B4QCBB8AACGQAACHiBB8Qh9B4jkBcQjjBcknAzQkyA0lOAAQlOAAkxg0g");
	this.shape.setTransform(164.4,66.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_10, rect = new cjs.Rectangle(0,0,328.8,133.2), [rect]);


(lib.Path_9 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("Ap5JhQkmgyjhhcQjihbh8h3Qh/h6gBiHQABiFB/h7QB8h3DihbQDhhcEmgyQEug0FLAAQFLAAEwA0QEkAyDiBcQDhBbB8B3QCBB7gBCFQABCHiBB6Qh8B3jhBbQjiBckkAyQkvA0lMAAQlLAAkug0g");
	this.shape.setTransform(163.05,66.075);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_9, rect = new cjs.Rectangle(0,0,326.1,132.2), [rect]);


(lib.Path_8 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("AragBILZmjILcGmIrZGjg");
	this.shape.setTransform(73.125,42.125);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_8, rect = new cjs.Rectangle(0,0,146.3,84.3), [rect]);


(lib.Path_7 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("AragBILZmkILcGmIrZGlg");
	this.shape.setTransform(73.125,42.15);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_7, rect = new cjs.Rectangle(0,0,146.3,84.3), [rect]);


(lib.Path_6 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("AragBILZmjILcGmIrZGjg");
	this.shape.setTransform(73.125,42.125);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_6, rect = new cjs.Rectangle(0,0,146.3,84.3), [rect]);


(lib.Path_5 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ar3jYIJ3lqIN4SFg");
	this.shape.setTransform(76,57.925);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_5, rect = new cjs.Rectangle(0,0,152,115.9), [rect]);


(lib.Path_4 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ap7i1IIQkvILnPJg");
	this.shape.setTransform(63.6,48.45);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_4, rect = new cjs.Rectangle(0,0,127.2,96.9), [rect]);


(lib.Path_3 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ap7i1IIQkvILnPJg");
	this.shape.setTransform(63.6,48.475);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_3, rect = new cjs.Rectangle(0,0,127.2,97), [rect]);


(lib.Path_2_1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ar3jYIJ3lqIN4SFg");
	this.shape.setTransform(76.025,57.925);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_2_1, rect = new cjs.Rectangle(0,0,152.1,115.9), [rect]);


(lib.Path_2_0 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ap7i1IIQkvILnPJg");
	this.shape.setTransform(63.6,48.45);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_2_0, rect = new cjs.Rectangle(0,0,127.2,96.9), [rect]);


(lib.Path_2 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ap7i1IIQkvILnPJg");
	this.shape.setTransform(63.6,48.45);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_2, rect = new cjs.Rectangle(0,0,127.2,96.9), [rect]);


(lib.Path_1_3 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("Ap/JmQkngzjkhcQjjhch9h4QiBh8AAiHQAAiGCBh8QB9h4DjhcQDkhcEngzQExg0FOAAQFOAAEyA0QEnAzDjBcQDkBcB9B4QCBB8AACGQAACHiBB8Qh9B4jkBcQjjBcknAzQkyA0lOAAQlOAAkxg0g");
	this.shape.setTransform(164.4,66.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_1_3, rect = new cjs.Rectangle(0,0,328.8,133.2), [rect]);


(lib.Path_1_2 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("AragBILZmkILcGmIrZGlg");
	this.shape.setTransform(73.125,42.15);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_1_2, rect = new cjs.Rectangle(0,0,146.3,84.3), [rect]);


(lib.Path_1_1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("ArbAAILamlILdGnIraGkg");
	this.shape.setTransform(73.15,42.15);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_1_1, rect = new cjs.Rectangle(0,0,146.3,84.3), [rect]);


(lib.Path_1_0 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2B778F").s().p("AragBILZmkILcGmIrZGlg");
	this.shape.setTransform(73.125,42.15);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_1_0, rect = new cjs.Rectangle(0,0,146.3,84.3), [rect]);


(lib.Path_1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("Ap7i1IIQkvILnPJg");
	this.shape.setTransform(63.6,48.45);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_1, rect = new cjs.Rectangle(0,0,127.2,96.9), [rect]);


(lib.Path_0 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("EhTwAKEMAqQgt+MB9QBH1g");
	this.shape.setTransform(536.05,229.925);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path_0, rect = new cjs.Rectangle(0,0,1072.1,459.9), [rect]);


(lib.Path = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("EhTwAKEMAqQgt+MB9QBH1g");
	this.shape.setTransform(536.05,229.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Path, rect = new cjs.Rectangle(0,0,1072.1,459.8), [rect]);


(lib.cynlq4 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F7E367").s().p("AsWNoQiGhNhRhiQhPhegYhpIAA4MQAYBpBPBeQBRBiCGBNQFIC9HNAAQHNAAFFi9QCkhfBTh8IAmg6QAmhBABgqIAAWmIgDAAIAAACIABAGQADA4gMAzIAAABQgXBnhOBeQhQBgiEBNQlFC9nNAAQnNAAlIi9g");
	this.shape.setTransform(110.875,106.0375);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,221.8,212.1);
p.frameBounds = [rect];


(lib.cynlq3 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F7E367").s().p("AsVNoQiGhOhShhQhPhfgYhpIAA4MQAYBpBPBfQBSBhCGBOQFHC9HOAAQHMAAFFi9QCjhfBUh9IAmg5QAmhBABgqIAAWmIgDAAIABACIAAAGQADA2gMA1IAAAAQgXBohOBdQhQBhiEBNQlFC9nMAAQnOAAlHi9g");
	this.shape.setTransform(110.875,106.0375);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,221.8,212.1);
p.frameBounds = [rect];


(lib.cynlq2 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F7E367").s().p("AsWNoQiGhNhRhiQhPhfgYhoIAA4MQAYBoBPBfQBRBiCGBNQFIC9HNAAQHNAAFFi9QCjhfBUh8QATgZATghQAmhBABgqIAAWmIgDAAIAAACIABAGQADA1gMA2QgXBohOBdQhQBhiEBNQlFC9nNAAQnNAAlIi9g");
	this.shape.setTransform(110.875,106.0375);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,221.8,212.1);
p.frameBounds = [rect];


(lib.cynlq1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#F7E367").s().p("AsVNoQiGhOhShhQhPhfgYhpIAA4MQAYBpBPBfQBSBhCGBOQFHC9HOAAQHMAAFFi9QCjhfBUh9QATgYATgiQAmhAABgqIAAWmIgDAAIABACIAAAGQADA2gMA1IAAAAQgXBohOBdQhQBhiEBNQlFC9nMAAQnOAAlHi9g");
	this.shape.setTransform(110.875,106.0625);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,221.8,212.2);
p.frameBounds = [rect];


(lib.currenticon = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-175,-509.6,202.1,588.4).s().p("AlRA8ItDniMAmvgZ3ItKfZINDHgMgouAaCg");
	this.shape.setTransform(130.725,207.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,261.5,415.6);
p.frameBounds = [rect];


(lib.PuppetShape_1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.instance = new lib.WarpedAsset_1("synched",0);

	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-163.1,0,163.2,0).s().p("EADUAjyQiYgGihgdIiUggQgmgIgsg1Qgzg8ACg8QADh5ACliIADl3QAAgagDi8QgDi6AChJQABgtgUg3QgVg7gjgpQocp6l1uyQh1kohWkjIg+joQB9i+ClhDQBTghA5AFQCrJtDTHmQCaFiCgD7QA9BgBbBFQBbBDBuAgIB6AkQB7AlCBgWIF2hAQA3gJAvgaQBBgjAdhDQCFktBgmBQCcpwAAqCIAyABQA/AEA7ARQC/A5BYCsIAADDQgID3gkEFQhzNClgKSQgDBngHCNIgLDKQgOEWglFeQgFAvgLD9QgPEzAECJQABAYgKAWQgJAVgSAQIgbAWQgQANgIALQjeC+miAAQgoAAgpgCg");
	this.shape.setTransform(0.075,0.0589);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.shape}]},1).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(-163,-229.1,326.1,458.4);
p.frameBounds = [rect, new cjs.Rectangle(-162.9,-229.1,326,458.3)];


(lib.man4rthand = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.instance = new lib.man3rthand("synched",0);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,268.7,155.9);
p.frameBounds = [rect];


(lib.man3rthand_1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.instance = new lib.man4rthand("synched",0);
	this.instance.setTransform(134.3,78,1,1,0,0,0,134.3,78);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,268.7,155.9);
p.frameBounds = [rect];


// stage content:
(lib._final = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// man1
	this.instance = new lib.PuppetShape_1("synched",1,false);
	this.instance.setTransform(255.8,3309.85);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#B64D50").s().p("Aj+DkQgHhaAShiIAThOQhMABhSgjQgTgJhNgrQgcg1gRhQQgiiiA1iJQATADA4AYQA5AaAnAIQAWgIAcgSQA4glAig4IAwAgQBBAiBQAFIABAAQBoAABqAXQCaAjBcCHQBYCBgJChQgJC4geB1QguCwhkBMQg0AnhiAgQh0Ahg4ASQkEhlgXkeg");
	this.shape.setTransform(287.3731,3229.275);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#2F8ED0").s().p("EgGBAgxQgngKgXghQgYggACgpMACig71ILckZIAPBFQAQBZAIBkQAYE+hGEtMgDPAz6QhBAdhsARQhTAOhTAAQiCAAh/ghg");
	this.shape_1.setTransform(258.1848,3715.9713);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#2F8ED0").s().p("AjNe8QgggEgXgYQgXgYgCghMgBug8NIIlgbIAVBYQAaBvAUBxQBBFsgJD+MAB3AtPQgzAuhlAoQiYA8iwAAQg7AAg+gGg");
	this.shape_2.setTransform(332.325,3705.8375);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F9BAA9").s().p("Am/H2QhLh6gHjYQgGi2AqilQAliSBUhbQBZhgCTgrQBTgZB3gBQBpgCBkARQCBAVBKCPQBAB6gHCGQgICVg7CSQhDCmhpBPQiBBikZBLQhWAXhCAAQh9AAg0hUg");
	this.shape_3.setTransform(287.9473,3238.2698);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F9A4A9").s().p("AkRB7IgJgrQArgIAcgIQErhOCMhpQAcgVAageIABAAIAADAQAAA3gyAjQgkAZhHAUQgwAOg+AAQh1AAisgwg");
	this.shape_4.setTransform(292.7,3289.2564);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F9BAA9").s().p("AinDWQhZkUBLjKQAPgnAxACQAuACA9AkQCOBVA7CRQAyB7gxB2QgYA7gjAjg");
	this.shape_5.setTransform(400.5416,3073.7675);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#F9BAA9").s().p("AimD0QhVhqAXiEQANhKAvhLQArhEA6gxQA6gwAxgLQA2gMAaAjQCIC3gaEgIkyCUQgvgagrg1g");
	this.shape_6.setTransform(105.6637,3087.9734);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#58549D").s().p("ADCDdQjBgSi+heQishVihiPQgWgUgRgVQADgjAIgfIACADQCpCWC1BZQDGBjDLATQDkAVCDg0IgDBPQhcAticAAQg2AAg/gGg");
	this.shape_7.setTransform(311.8,3927.1052);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#5874C0").s().p("ADCFLQjBgSi+heQishVihiPQgWgUgRgVQAUjNB7g7QBIgjBYAVQBcAbBPAzQBMAwBCgTQAigKATgTIGkAaQAfAlADDzQACB5gFBzQhdAtibAAQg3AAg+gGg");
	this.shape_8.setTransform(311.8438,3916.1231);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#58549D").s().p("ADCDdQjBgRi9hfQithVihiPQgSgQgVgZQAEgiAGggIAEADQCpCXC0BYQDHBkDKASQBmAJBPgEQBogGBKgeIgDBOQhdAuiZAAQg4AAg/gGg");
	this.shape_9.setTransform(219.45,3953.5496);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#5874C0").s().p("ADCFLQjCgSi9heQishVihiPQgSgRgVgYQAUjOB7g6QBIgjBXAVQBaAaBSA0QBMAwBCgTQAigKATgTIGkAZQAfAmADDyQACB6gFByQheAuiZAAQg3AAg/gGg");
	this.shape_10.setTransform(219.4938,3942.5675);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance}]}).wait(40));

	// Symbol_1
	this.instance_1 = new lib.Symbol1("synched",0);
	this.instance_1.setTransform(2757,4038.9,1,1,0,0,0,30.9,254.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:31,rotation:29.9992,x:2757.05,y:4038.95,startPosition:9},9).to({regX:31.1,regY:254.7,rotation:0,x:2757.2,y:4039.05,startPosition:19},10).to({rotation:14.999,startPosition:29},10).to({regX:31.2,regY:254.8,scaleX:0.9999,scaleY:0.9999,rotation:44.9981,y:4039.2,startPosition:38},9).wait(2));

	// man2
	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#CCE6E7").s().p("AsQBNQAHhaAGhyQFfAyFdAGQGwAIGUg9IAUDTQlUAnlhACIgnAAQmjAAmigzg");
	this.shape_11.setTransform(2691.4,4178.5305);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#5E617F").s().p("AiXAzQAHhBACg9IBGgLQBfgFCAAeIAAAnQAAAzgDA6Qh1gsi2AIg");
	this.shape_12.setTransform(2865.05,3847.3574);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFDC7A").s().p("AkLFmQgdgQgPgeQgPgfAFghIAWiFQAGgoAMgoQAqiUB8hvQB0hpCYgqQA5gPA+gEQAWgDAdABIgmAJQiYAuh1B3Qh8B9gqCnQgKAogHAzQgJA4gNBeQgGApAUAlQg3gQglgTg");
	this.shape_13.setTransform(2650.8125,3893.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFCB05").s().p("AlRGSQgdgEgmgJQhOgTgzgbQgdgPgPgfQgPgeAFgiIAWiFQAGgoAMgoQAqiUB8hvQB1hpCYgpQA5gQA9gEQB7gKBwAjQB4AkBVBQQBFBAAkBeQAiBXADBnIABAQIgUA4QgkBBhMA0QjHCHmYAAQhZAAhigGg");
	this.shape_14.setTransform(2677.4375,3894.594);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FEB41F").s().p("AkRFAQjdgVhkg8Qhcg3gFhjQgFgsAkg7QBIh5DLhNIAvgTQA8gWBBgRQDOg5CtAJQDXAKCRA2QCXA3APBSQAJA0hWBgQhPBYhPAuQh0BDiyAwQi0AxigAAQgxAAgvgFg");
	this.shape_15.setTransform(2680.1371,3915.1971);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#5E617F").s().p("AgeI1QiNgdhrg+Qh8hJhBhtQhMiBgPigQgQigA0iLQAghWBAhBQA9g9BUglQCIg7CSARQFaAaCPDfQBHBwACBqQhRBShpAYQggAIggABIgYgBIgIBjQgIBzAFBNIg5ASQgCgsgIgsQgOhZgYABQgkADgUAZQgZAfAIA8QAJBGAcAsQAfAxAsAAIgmC2QhWgBh2gZg");
	this.shape_16.setTransform(2681.7618,3919.8011);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#F9BAA9").s().p("AgGI2QiMgdhsg/Qh7hIhBhuQhMiBgQifQgQigA0iMQAghWBBhBQA9g9BTgkQDIhXDLBJQDLBIBkDBQBdCzgDDaQgDDehlCtQgyBYiaAFIgUABQhZAAiAgbg");
	this.shape_17.setTransform(2679.3431,3919.778);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#F9A4A9").s().p("AhrCeQhEgQgjgZQgxghgCg3IgKjCQAeAfAYASQCJBkEcBEQAdAGAnAGIgOAdQiEAuhCAOQg6ANgtAAQgjAAgdgIg");
	this.shape_18.setTransform(2677.35,3972.4158);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#1C75BB").s().p("AsLUmQgigYgNgdIgFgZQA3rEACglQAYmdgQlwQgDhBggjqQgfjlgChGQgFi4Adi/QAKhCA0guQA1guBIgIIDfg8IIGA6IHXBqIBFHRQBGIjAJGbQBiQEgCBiIACA6QABAigDATQgKA2g+AJQkXA7lMATQhrAGhgAAQn4AAjeiog");
	this.shape_19.setTransform(2691.2632,4124.5601);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#1C75BB").s().p("EgAjAg+QhOgKhGgVIg3gSMgChg4MQhHkgAZiwQAIg3ARglIAPgbILjAwMAB2BAjQiqA6iwAAQhHAAhGgJg");
	this.shape_20.setTransform(2729.9745,4402.9801);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#1C75BB").s().p("EgGWAgDQhCgLg5gQIgrgNIDv8LQBBojAIlgQADiiAAlrIgBtaIM/AeMgGhA+eQgDAtgfAhQggAhgsADQhRAHhPAAQiXAAiNgYg");
	this.shape_21.setTransform(2647.25,4407.4752);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#913A40").s().p("AnpCWIgChHQBBAdBeAGQBGAFBcgIQCmgQC3hWQCphPCOh3IABAbIABAYQABASgDADQiLB3ipBQQi2BYilAPQg4AFgxAAQiJAAhSgog");
	this.shape_22.setTransform(2640.6786,4635.9319);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#913A40").s().p("AnvChIgChGQB0AvDJgTQC0gRCwhXQCghPCWiFIADgDQAHAkACAXQgPASgTASQiPB+iZBMQioBTirAQQg4AFgxAAQiJAAhSgog");
	this.shape_23.setTransform(2761.675,4634.7819);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#B54D50").s().p("AnvECQgEhlAChsQADjXAbghIF1gXIAMAKQAQALASAFQA7ARBDgrQBHgtBRgYQBOgSBAAfQBtA0ASC2QgPASgUASQiPB+iZBMQioBTirAQQg4AFgxAAQiJAAhSgog");
	this.shape_24.setTransform(2761.6295,4625.0729);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#B54D50").s().p("AnpEAQgEhlAChsQADjXAbghIF0gXIAMAKQAQAKATAGQA7ARBDgrQBAgoA+gRQAvgOAvAAQA2gBAqAZQApAaAXAxQATAoAGA0QADAYAAAZIABAXQAAATgDADQiKB2ipBRQi3BXilAPQg4AFgxAAQiJAAhSgog");
	this.shape_25.setTransform(2640.6331,4625.2814);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#1C75BB").s().p("AlKCQQD/kMBrhiIEqBqIlKFTg");
	this.shape_26.setTransform(2650.05,3972.525);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11}]}).wait(40));

	// man2_hand_left
	this.instance_2 = new lib.man2lefthand("synched",0);
	this.instance_2.setTransform(2612.25,4059.25,1,1,0,0,0,0,284.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({regX:0.1,rotation:14.9983,x:2612.4,y:4059.3},9).to({rotation:0,y:4059.2},10).to({rotation:14.9985,x:2612.45,y:4059.3},10).to({rotation:0,y:4059.25},9).wait(2));

	// man3_hand_right
	this.instance_3 = new lib.man3rthand_1("synched",0);
	this.instance_3.setTransform(2977.3,3020.75);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({rotation:29.9992},9).to({rotation:14.9985},10).to({regX:0.1,rotation:0,x:2977.4},10).to({regY:0.1,rotation:-14.999,x:2977.45,y:3020.85},9).wait(2));

	// man3
	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#B64D50").s().p("AjpJHQgVgLhNgxQh6hQhWiWQhTiPgPiPQgPiUA3iHQA6iMB1hLQBYg4CPgdQB1gXCDgBQBZAABjATQBTARBkAgQAeAKAeAOQAQglALgpIAIghQCyDYhaCrQgtBWhRAqQhvgHhfAbQhEATg2AiIAvBWQAwBqAHBeQAYEtmMBAQhVgVgjgQg");
	this.shape_27.setTransform(2928.2198,2935.075);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#F9A4A9").s().p("AhtCrQhGgSgkgaQgxgkgDg8IgLjRIABAAQAaAdAdAXQCKBrElBLQApAJAdAEIgPAgQiIAxhCAPQg8AOguAAQgkAAgdgIg");
	this.shape_28.setTransform(2919.675,2997.2107);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#F9BAA9").s().p("ACeJCQkwg/iShfQh1hMhRioQhGiTgQiYQgPiJA/iBQBIiWCKgcQBrgWBygEQB/gEBbAVQCgAmBkBeQBgBaAvCTQA1CnADC8QAEDehLCBQg4BfiYAAQg/AAhQgQg");
	this.shape_29.setTransform(2924.3963,2945.3265);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#BBDA52").s().p("Ar8UyQgkgagMggIgGgaQA2oxARkXQAfnkgzlkQgGgogli0QgciHgDhUQgFjJAejNQAKhHA2gxQA1gyBLgIIDkhCIISA/IIRCGIAkIMQAmJlAKG8QBeOKgBBqIACA/QABAlgDAUQgKA7hAAJQkSA4lJALQhBACg+AAQosAAj0jCg");
	this.shape_30.setTransform(2932.6113,3153.4448);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#6C8CF4").s().p("AkqbCIAw8xIhx6KIKxCUIAmYYIhbclQhcAWh1AJQgtADgpAAQitAAhng4g");
	this.shape_31.setTransform(2894.975,3459.1583);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#6C8CF4").s().p("ABGbtIBW9uIuZ2rIN8jwIJ/YxIiJerQhLAshrAbQhXAWhPAAQhzAAhggwg");
	this.shape_32.setTransform(2986.4,3458.1792);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#DCEB2A").s().p("Ah3lLQArhrBbhIQAdgWAfgQIAZgMIA3RhQmcoqCKlSg");
	this.shape_33.setTransform(2850.9719,3066.95);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#DCEB2A").s().p("AjjFqIChsqIElFyIiZIPg");
	this.shape_34.setTransform(2884.4,2990.2);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#58549D").s().p("AlBCQQhXgOg4giIAEhAQBmAzC5AAQClgBCnhBQCYg6CThuIADgCQAEAdAAAZQgTATgQALQiMBoiRA4QigA+idABQhXAAg+gKg");
	this.shape_35.setTransform(2911.9,3661.525);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#5874C0").s().p("AlBDxQhXgOg4giQAFhdAKhiQAUjDAdgcIFUAKIAKAJQAOALAQAHQA0AUBAghQBEgjBMgQQBJgKA3AhQBfA4ACCnQgTASgQALQiMBpiRA4QigA+idABQhXAAg+gKg");
	this.shape_36.setTransform(2911.9,3651.8087);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#58549D").s().p("AnECTIgChAQA9AYBTAFQBAAEBSgIQCkgPChhQQCShHCJh6IACgDQAGAcADAaQgOASgSAPQiCB0iMBFQiZBMicAOQgzAFgtAAQh9AAhLglg");
	this.shape_37.setTransform(3042.975,3658.4785);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#5874C0").s().p("AnEDsQgDhcABhjQADjEAZgeIFUgVIALAJQAOAKARAFQA2APA9gnQBBgpBKgWQBHgRA7AcQBjAwAQCmQgOASgRAPQiCB0iMBFQiaBMicAOQgzAFgsAAQh+AAhLglg");
	this.shape_38.setTransform(3042.9275,3649.5976);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27}]}).wait(40));

	// man4_hand_right
	this.instance_4 = new lib.man4rt1hand("synched",0);
	this.instance_4.setTransform(4453.55,2353.95,1,1,0,0,0,253.1,142.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({rotation:-14.9983,y:2354},9).to({regY:143,rotation:-44.9988},10).to({rotation:-29.9993,y:2354.05},10).to({regY:143.1,rotation:-14.999,y:2354.15},9).wait(2));

	// man4
	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#FFDC7A").s().p("AnkFNQgUgXAFgiQAQhoAghwQAqiOAvhHQBpifDfgxQDPgvC4BIQBMAdBEAwQgfgQgigOQi4hLjRAyQjdA0hrCoQgvBKgqCVQghB3gQBsQgBAIADAQQgpgVgWgag");
	this.shape_39.setTransform(4467.2,2221.2088);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#FFCB05").s().p("AlWGRQgugGg3gRQhughgsgzQgUgWAFgjQAQhoAghxQApiOAvhGQBqigDfgxQDPguC4BHQCSA5BiBuQBpB2AQCSIAEAvQACAcgEASQgGAWgYAgQgvA/hSAwQi7Brk7AAQiGAAiegTg");
	this.shape_40.setTransform(4478.5161,2225.1674);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#FEB41F").s().p("Ah9EjQh9gBh7gRQhugOhCgZQhhglgthEQgYgkAGgrQAGgnAdgiQA/hMBZg3QAagQBKgZQBYgeBkgXQEWg/DUAeQD3AjBlAxQBoAyADBZQADAugpA4QhSB0jcA+QjzBFjpAAIgUAAg");
	this.shape_41.setTransform(4474.5992,2249.2221);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#5E617F").s().p("AEXG/QAsgOAag+IAQg8QAShzg9gaQgTgJgZACIgUADQAHAygIBSQgEApgGAfQgKAPgsAEIgqABQAUhjggiCIgkhtQj6gmjAAeQg9AJgwAPIglAOQgHADgRgTQgLgNgHgLQgthGAJhiQAJhXAuhRIAFgJQA/hpBqhHQBqhHB4gRQB0gRB0AhQBzAhBbBMQCzCXAsD+QAsD7hxDPQgOAagVAbQgPASgcAeIgdAaQgZAWAAAEg");
	this.shape_42.setTransform(4479.6737,2244.086);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#F9BAA9").s().p("AmmFIQgxh2gOiVQgMh/AQhwQAOhfA6heQA8hhBZhBQBghGBsgOQB4gPB3A8QC9BeBKC/QBKDAgvEVQgPBmhBBoQiCDSj7AOIgfABQkaAAh5khg");
	this.shape_43.setTransform(4480.1175,2256.1964);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#6C8CF4").s().p("AgSiiQBgipBLhzQAnAFBHAZQAjAMAbAMIghGnIjpgjIBLB3QhKAfjHCaIi5CTQBxkQDBlRg");
	this.shape_44.setTransform(4498.925,2357.525);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#6C8CF4").s().p("AhWgIIBigoIiYhHIBok3IAlgCQAuABApAMIAHEqQAOFTAgDXg");
	this.shape_45.setTransform(4452.35,2358.85);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#CCE6E7").s().p("AsKBoQADiCAFhtQFTBNFVAFQHJAGGch9QgCB5gBCFQlBBJlVAPQhSADhQAAQlvAAlrhFg");
	this.shape_46.setTransform(4490.775,2546.0977);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#1C75BB").s().p("AhzWoQhigUhigfIhOgbIiAkWIBYyyQAAgNA7tKIDwnsQAADOAdFYQAPCsAOCDQB4joDAlaICpksIBtPYIhtehQhjAch7AAQiJAAilgjg");
	this.shape_47.setTransform(4473.725,2462.6854);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#1C75BB").s().p("AD6TcQimgShwg9QANkcgolyQhOrikEmrQAejcBDisQCIlZDCDuIAwCIQA7CpAzCmQClIUAkE0IAAREIgjABQgwAAg8gHg");
	this.shape_48.setTransform(4588.8,2472.5119);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#1C75BB").s().p("AgSWIQikg8g+gwQAGmIAXoaQAwwxBcrXIE7ALIAFAFIg9K0QgSDigOD9QguMkAOLqQABA3gsAgQgcAVgfAAQgSAAgSgHg");
	this.shape_49.setTransform(4436.625,2458.0505);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#1C75BB").s().p("AmfWdQg1gsgDhHQgt1IB9tYQAnkMAzi6IAriEQE3BxD2CWQB7BLA9A1QiWFrgpQkQgVITAKHLQgrAhjBArQiLAfjGAgQgNACgNAAQg1AAgsgkg");
	this.shape_50.setTransform(4540.4527,2461.634);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#FFFFFF").s().p("AAAT9QjFgHjBhWMgBbgj2IBiAUIB2ijIAnAAIAEArQAMAwAnAYQCBBOFwi+IAMgaICQCmIiabeIiqJqQgvALhJAAIgmAAg");
	this.shape_51.setTransform(4483.3,2444.135);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#1C75BB").s().p("AjgcbIhp/IIho38IAQhuINTgRIgUHRQgVHxAACaQAACbAOSDIAPRmQgjAohjAhQh7AoioAAQhmAAh3gOg");
	this.shape_52.setTransform(4525.125,2778.1313);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#1C75BB").s().p("AkzdaQhDgNg6gTIgsgSQAPx7AY0OIAVwpICIjhIL1AAIAAGXIimFmQhDLag0S8QgZJegNHMQiEAah8AAQhpAAhkgSg");
	this.shape_53.setTransform(4453.9,2750.0767);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#F9A4A9").s().p("AmnDWIAfjlIBThgIAMABQAOAAANgCQAHhzgOg0IH9hsIAHBHQAKBVAUBMIASAXQAhAdBGAdQBGAdhJCGQgXApgiAwIgeAnIlECrg");
	this.shape_54.setTransform(4487.7443,2329.95);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#58549D").s().p("Am2BjQgxgNgUg3QFOAJE/g5QDLgkCfg2QgIAugHAcQjrBGkxAsQjBAbhqAAQg8AAgggJg");
	this.shape_55.setTransform(4412.275,2984.0081);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#5874C0").s().p("Am6FFQhSgXADh0QABgxATgsQATguAdgYQAwglCxhNQC3hOAJgHQAXgQAEhIIgBhFIICAPQAdCpgTC7QgJBegQA8QjrBHkxArQjBAchqAAQg8AAgggJg");
	this.shape_56.setTransform(4412.665,2961.4581);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#58549D").s().p("AmPDKQgzgDgfgxQFHg+Esh8QC9hOCRhYQADAvgBAdQjXB4kgBrQkSBmhgAAIgIgBg");
	this.shape_57.setTransform(4521.3143,3005.9112);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#5874C0").s().p("AmAGfQhWgFgVhyQgKgvAJgwQAJgxAYgdQAmgvCdhwQChh0AIgJQATgUgMhHIgPhDIH5hgQBBCfAVC7QALBdgCA+QjXB4kgBsQkSBmhgAAIgIgBg");
	this.shape_58.setTransform(4519.8225,2984.6112);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#F9BAA9").s().p("AhBEgQgKgPgGgUIgEgQQAZh3gDhoIgIhPQgMADgOAOQgcAdgMA3QgMA4gfAGQgJACgKgDIgJgEQgGgHgDgUQgFgpAVhCQAVhDArhdIAnhQIAPgMQAVgNAcgHQBZgZCAAmIgDAuQAmCXAABSQAAA+gcBiQgbBdgaAgQgfAnhKARQgQAEgOAAQgqAAgZgkg");
	this.shape_59.setTransform(4603.151,2617.9181);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39}]}).wait(40));

	// lady5
	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#FA9F62").s().p("Aj8EOQhigKhHgTQhggag8gsQAQhkAWhqQAsjUAjgbIGAAzIALAMQAOANASAJQA5AdBMgdQB5guB4AGQBNAEA5AaQAiAQAYASQAkAaAFAYQAOBEglA5QggAyhBAmQirBhiqAtQiIAjiDAAQgyAAgwgFg");
	this.shape_60.setTransform(3302.8304,1776.1285);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#E5E6E7").s().p("AtlAbIK3pXQASgPAXAAQAOAAAOAHIOrHSQAfAQAFAiQAFAjgaAXIqFJSgAiUodIqKIwIPjIIIJxo+QALgLgDgMQgCgOgMgGIurnTQgEgCgGAAQgIAAgHAGg");
	this.shape_61.setTransform(3312.041,1374.375);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.lf(["#42E296","#41DB9B","#3EC7A8","#3BB3B6"],[0,0.278,0.682,1],-53.2,-61.7,134.8,146.7).s().p("AtlAbIK3pXQAOgMATgCQATgDARAJIOrHSQAfAQAFAiQAFAjgaAXIqFJSg");
	this.shape_62.setTransform(3312.041,1374.3966);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#2F8ED0").s().p("AjAROIgW4XQhCiHgwidQhfk7BchxIByALQCIAVBwA0QFnCkgNGUIg0aUQhTARhqABIgNABQjKAAhxhMg");
	this.shape_63.setTransform(3271.1971,1644.1539);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#B54D50").s().p("ArZKcQBPh7BSizQClllAQkSQALjCCWioQCWiqC+geIgBAAIAEgBQAjgFAkABQFvgMB7EPQAnBVAKBnQAFA0gDAiIjMBUIhkDyQhFCkhEB+QjAFljlCgg");
	this.shape_64.setTransform(3177.6563,1271.5996);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#42E296").s().p("AiXNQQhTgjgnhQImWsvQg3hZgbiOQg4kdCKkJIA8ANQBJAWBCApQDTCEA/EYIDRLMIKKmnIAVALQAZARAUAcQBBBbgGCxIsKJVQgjAZgrAAQgiAAgngQg");
	this.shape_65.setTransform(3281.3336,1408.83);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#42E296").s().p("AjPSaQjMgwjRhEIipg8QBPn6BYoEQCwwKAwg4QBRhfBmgjQCAgtCPA5QB5AwC2AUQBbAKBCAAQBoBEA9ELQAeCFAJB4IBGboQicA3jZAAQkKAAlmhTg");
	this.shape_66.setTransform(3161.875,1437.4729);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#2F8ED0").s().p("ARzVLQhPgIhRgYIhBgWIjj38QkVgildg5Qq3hylgh0QlfhziIllQgrhwgQh6IgHhkILFB2INECFIO3DUQCIARBiBgQBiBhASCJIDpb7Qh8B4jKAAQgkAAgngEg");
	this.shape_67.setTransform(3239.65,1662.2941);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#F9BAA9").s().p("AkuHMQiviUgijvQgijuB9i/QB+i+DUgfQDTgeCuCUQCvCUAiDvQAiDuh9C/Qh+C+jUAfQglAFgjAAQipAAiQh7g");
	this.shape_68.setTransform(3196.3904,1253.175);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#FA9F62").s().p("AmOFDQhogHhIgiQgEhsAChzQADjkAegkIGagYIANAKQASAMAUAFQBCATBJguQB0hHB+gTQBQgLBBAQQAlAIAeAPQArAUAKAXQAcBFgbBEQgXA6g9A0QidCGioBRQi4BYi9ARQhAAGg3AAQghAAgdgCg");
	this.shape_69.setTransform(3396.182,1808.5889);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#F9A4A9").s().p("AkMCAIA5lHIG0B/IAsEQg");
	this.shape_70.setTransform(3180.675,1307.325);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#F9BAA9").s().p("AkuASIBHg6QBMhAAcgeQA/hCBXgkQBPggAwAJQAtAJAxAiQAzAkAHAfQAGAZhLAcQhZAcgbANQhKAmgiAnIgSAhQABgCAXgFIAcgGIA2gRIA2gSQAFgCADABQAGACAAAHQABAhgmAiQgiAegjAHQgaAGiBBFIh8BEg");
	this.shape_71.setTransform(3260.8189,1355.0024);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#F9BAA9").s().p("AkmCRQC2jKASgnQAPggAlgbQAogeAfAIQAHABABAGQAAAEgDAFIg4BiQgVAugEADIAlgMQAtgZA1hAQAUgXAuhRQArhDAYALQAcANAYA6QAXA4gBAuQgBAwgxBFQg2BOhOAvQgkAWhOA8IhIA4g");
	this.shape_72.setTransform(3364.1771,1402.1974);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60}]}).wait(40));

	// cynlq1
	this.instance_5 = new lib.cynlq1("synched",0);
	this.instance_5.setTransform(3660.9,4719.8,1,1,0,0,0,110.9,212.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({regX:110.8,scaleY:0.3432,x:3660.8,y:4719.75},9).to({scaleY:0.8866,y:4719.8},10).to({scaleY:1.1583,y:4719.85},10).to({scaleY:0.8864,y:4719.8},9).wait(2));

	// cyn1
	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-111,0,111.1,0).s().p("APnCmQhShiiGhMQlGi9nMAAQnMAAlFC9QiDBLhRBhQhNBdgXBoQghiSBOiLQBSiPC5hsQFFi9HMAAQHMAAFGC9QC8BsBTCRQBQCMghCTQgYhphOheg");
	this.shape_73.setTransform(3660.606,4281.375);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-111.1,0,111.2,0).s().p("AsPHHQighchVh5QhSh0gBh+QAAh9BQh0QBUh5CfhcQFFi9HMAAQHMAAFGC9QChBcBVB5QBSB0ABB9QAAB+hQB0QhUB5ifBcQlFC9nNAAQnLAAlHi9g");
	this.shape_74.setTransform(3660.625,4309.275);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-70,441.4,16.6,-134.3).s().p("EgMPAiuQiFhNhShhQhOhegYhpIAAAAQgMg0ADg0IABgLQACgcAGgYMAAAg/8MAijAAAMAAABCnIgKAAQgXBnhOBeQhQBgiDBMQlFC9nNAAQnLAAlHi9g");
	this.shape_75.setTransform(3660.645,4547.425);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_75},{t:this.shape_74},{t:this.shape_73}]}).wait(40));

	// cynlq2
	this.instance_6 = new lib.cynlq2("synched",0);
	this.instance_6.setTransform(3923.65,4567.65,1,1,0,0,0,110.9,212.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({scaleY:1.6115},9).to({scaleY:0.6599,y:4567.7},10).to({scaleY:1.294,y:4567.65},10).to({regY:212.2,scaleY:0.841,y:4567.7},9).wait(2));

	// cyn2
	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-111,0,111.1,0).s().p("APnCmQhShhiFhNQlHi8nMAAQnMAAlEC8QiEBMhQBgQhOBegXBnQghiSBOiLQBSiPC6hsQFEi9HMAAQHMAAFHC9QC8BsBSCRQBQCMghCTQgXhphPheg");
	this.shape_76.setTransform(3923.3185,4129.275);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-111.1,0,111.2,0).s().p("AsPHHQighchVh4QhSh1gBh+QAAh9BRh0QBTh5CghdQFEi8HMAAQHMAAFHC8QCgBdBVB5QBSB0ABB9QAAB+hQB1QhUB4ifBcQlFC9nMAAQnMAAlHi9g");
	this.shape_77.setTransform(3923.325,4157.2);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-70.1,441.4,16.5,-134.3).s().p("EgMPAiuQiGhNhRhiQhPhegYhoQgLg1ADgzIAAgLQACgXAGgdMAAAg/8MAikAAAMAAABCnIgKAAQgYBnhNBdQhQBhiEBMQlEC9nNAAQnLAAlHi9g");
	this.shape_78.setTransform(3923.394,4395.375);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_78},{t:this.shape_77},{t:this.shape_76}]}).wait(40));

	// cynlq3
	this.instance_7 = new lib.cynlq3("synched",0);
	this.instance_7.setTransform(4186.35,4415.8,1,1.657,0,0,0,110.9,212.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({scaleY:1.2724,y:4415.85},9).to({scaleY:0.6385,y:4415.8},10).to({scaleY:1.2721,y:4415.75},10).to({scaleY:1.5891,y:4415.7},9).wait(2));

	// cyn3
	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-111,0,111.1,0).s().p("APnCmQhShiiGhMQlGi8nMAAQnMAAlFC8QiDBLhRBhQhNBdgXBoQghiSBOiLQBSiPC5hsQFFi9HMAAQHMAAFGC9QC8BsBTCRQBQCMghCTQgYhphOheg");
	this.shape_79.setTransform(4186.056,3977.225);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-111.1,0,111.2,0).s().p("AsPHHQighchVh5QhSh0gBh+QAAh9BQh0QBUh5CfhcQFFi9HMAAQHMAAFGC9QChBcBVB5QBSB0ABB9QAAB+hQB0QhUB5ifBcQlFC9nNAAQnLAAlHi9g");
	this.shape_80.setTransform(4186.075,4005.125);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-70,441.4,16.6,-134.3).s().p("EgMPAiuQiFhNhShiQhOhegYhoIAAgBQgMgzADg1IABgKQACgcAGgYMAAAg/8MAijAAAMAAABCmIgKAAQgXBohOBeQhQBgiDBMQlFC9nNAAQnLAAlHi9g");
	this.shape_81.setTransform(4186.095,4243.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_81},{t:this.shape_80},{t:this.shape_79}]}).wait(40));

	// cynlq4
	this.instance_8 = new lib.cynlq4("synched",0);
	this.instance_8.setTransform(4449.1,4263.5,1,0.3204,0,0,0,110.9,212.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).to({regY:212.2,scaleY:0.5469},9).to({scaleY:1.0223},10).to({scaleY:0.5921,y:4263.45},10).to({regY:212.3,scaleY:0.2527},9).wait(2));

	// cyn4
	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-111,0,111.1,0).s().p("APnCmQhShiiFhMQlHi9nMAAQnMAAlFC9QiDBMhQBgQhOBdgXBoQghiSBOiLQBSiPC5hsQFFi9HMAAQHMAAFHC9QC8BsBSCQQBQCNghCTQgXhphPheg");
	this.shape_82.setTransform(4448.7685,3825.15);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-111.1,0,111.2,0).s().p("AsPHHQighchVh4QhSh1gBh+QAAh9BRh0QBTh5CghcQFEi9HMAAQHMAAFHC8QCgBdBVB5QBSB0ABB9QAAB+hQB1QhUB4ifBcQlFC9nMAAQnMAAlHi9g");
	this.shape_83.setTransform(4448.775,3853.05);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-70.1,441.4,16.5,-134.3).s().p("EgMPAiuQiGhNhRhiQhPhegYhoQgLg1ADgzIAAgLQACgVAGgfMAAAg/8MAikAAAMAAABCnIgKAAQgYBnhNBdQhQBhiEBMQlEC9nNAAQnLAAlHi9g");
	this.shape_84.setTransform(4448.844,4091.225);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_84},{t:this.shape_83},{t:this.shape_82}]}).wait(40));

	// tower3
	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],43.7,849.2,-39.7,-767.8).s().p("AhJGFIAAtfICTCDIAAMyg");
	this.shape_85.setTransform(546.65,2151.25);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,928.7,0,-648.7).s().p("AhTmYICnCTIAAI+IinBgg");
	this.shape_86.setTransform(562.425,2157.8);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],40.1,778.6,-43.3,-838.5).s().p("AhJD6IAApJICTCDIAAIcg");
	this.shape_87.setTransform(637.1,2217.35);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],37.6,729.6,-45.8,-887.4).s().p("AhJCZIAAmHICTCDIAAFag");
	this.shape_88.setTransform(699.8,2263.225);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,862.6,0,-714.8).s().p("AhTkOICnCWIAAEmIinBgg");
	this.shape_89.setTransform(652.875,2223.9);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,821.6,0,-755.8).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_90.setTransform(715.575,2264.9);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_91.setTransform(604.375,2218.125);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,797.6,0,-779.8).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_92.setTransform(715.575,2288.825);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],39.7,768.6,-43.7,-848.5).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_93.setTransform(596,2229.55);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_94.setTransform(604.375,2135.975);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,845.5,0,-731.9).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_95.setTransform(715.575,2240.975);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],43.9,850.5,-39.5,-766.6).s().p("AxXuWIAAiDMAivAevIAACEg");
	this.shape_96.setTransform(596,2147.4);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.6,0,47.6,0).s().p("AnbCvIMQm/ICnBhIsLHAg");
	this.shape_97.setTransform(532,2005.45);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1069.6,0,-507.8).s().p("AmFCfIMLnAIAACEIsLG/g");
	this.shape_98.setTransform(540.6,2016.875);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZCXIMLnAICoCSIsLHBg");
	this.shape_99.setTransform(754.6,2199.825);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,855.2,0,-722.2).s().p("AhTARIAAiDICnBhIAACDg");
	this.shape_100.setTransform(715.575,2231.25);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,872.8,0,-704.6).s().p("AmFCeIMLm/IAACDIsLHAg");
	this.shape_101.setTransform(762.975,2213.675);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZCwIMLnAICoBhIsLHAg");
	this.shape_102.setTransform(754.6,2250.3);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,807.1,0,-770.3).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_103.setTransform(715.575,2279.325);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,824.8,0,-752.7).s().p("AmFCfIMLnAIAACDIsLHAg");
	this.shape_104.setTransform(762.975,2261.725);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],46.3,898.7,-37.1,-718.4).s().p("AhJGGIAAtgICTCDIAAMyg");
	this.shape_105.setTransform(641.4,2096.725);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,983.2,0,-594.2).s().p("AhTmZICnCVIAAI9IinBhg");
	this.shape_106.setTransform(657.175,2103.275);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],42.6,828.1,-40.8,-789).s().p("AhJD7IAApKICTCDIAAIcg");
	this.shape_107.setTransform(731.9,2162.825);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],40.1,779.1,-43.3,-837.9).s().p("AhJCaIAAmIICTCDIAAFag");
	this.shape_108.setTransform(794.6,2208.7);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,917,0,-660.3).s().p("AhTkNICnCVIAAElIinBhg");
	this.shape_109.setTransform(747.675,2169.375);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,876.1,0,-701.3).s().p("AhTh8ICnhhIAAFZIinBig");
	this.shape_110.setTransform(810.375,2210.4);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUBIioBig");
	this.shape_111.setTransform(699.175,2163.6);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,852.2,0,-725.2).s().p("AhTgQICnhiIAACEIinBhg");
	this.shape_112.setTransform(810.375,2234.3);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],42.2,818,-41.2,-799).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_113.setTransform(690.8,2175.025);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_114.setTransform(699.175,2081.475);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,900,0,-677.4).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_115.setTransform(810.375,2186.475);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],46.4,900,-37,-717.1).s().p("AxXuVIAAiEMAivAevIAACEg");
	this.shape_116.setTransform(690.8,2092.9);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],27.1,527.6,-56.3,-1089.5).s().p("AhJGFIAAtfICTCDIAAMyg");
	this.shape_117.setTransform(546.65,2473.75);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,606.2,0,-971.2).s().p("AhTmYICnCUIAAI8IinBhg");
	this.shape_118.setTransform(562.425,2480.3);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],23.5,457,-59.9,-1160.1).s().p("AhJD7IAApKICTCDIAAIcg");
	this.shape_119.setTransform(637.1,2539.85);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],21,408,-62.4,-1209.1).s().p("AhJCZIAAmHICTCDIAAFag");
	this.shape_120.setTransform(699.8,2585.725);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,540,0,-1037.4).s().p("AhTkNICnCUIAAEmIinBhg");
	this.shape_121.setTransform(652.875,2546.4);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,499,0,-1078.3).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_122.setTransform(715.575,2587.4);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_123.setTransform(604.375,2540.625);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,475.2,0,-1102.3).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_124.setTransform(715.575,2611.325);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],23.1,446.9,-60.3,-1170.2).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_125.setTransform(596,2552.05);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_126.setTransform(604.375,2458.475);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,522.9,0,-1054.5).s().p("AhTgRICnhhIAACDIinBhg");
	this.shape_127.setTransform(715.575,2563.5);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],27.3,528.8,-56.1,-1088.3).s().p("AxXuVIAAiEMAivAevIAACEg");
	this.shape_128.setTransform(596,2469.925);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncCzIMRnGICoBhIsNHGg");
	this.shape_129.setTransform(436.925,1951);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1127.4,0,-449.9).s().p("AmJDCIMTnEIAACDIqfGCg");
	this.shape_130.setTransform(445.275,1959);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-39.1,0,39.2,0).s().p("AmGBQIJlljICoBhIsNHGg");
	this.shape_131.setTransform(445.525,2273.575);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,804.9,0,-772.4).s().p("AmJDBIMTnDIAACEIqfGBg");
	this.shape_132.setTransform(445.275,2281.55);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCwIMLnAICoBhIsLHAg");
	this.shape_133.setTransform(532.225,2327.95);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,747.1,0,-830.3).s().p("AmFCfIMLnAIAACEIsLG/g");
	this.shape_134.setTransform(540.6,2339.375);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZCXIMLnAICoCSIsLHBg");
	this.shape_135.setTransform(754.6,2522.225);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,532.8,0,-1044.6).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_136.setTransform(715.575,2553.625);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,550.4,0,-1027).s().p("AmFCeIMLm/IAACDIsLHAg");
	this.shape_137.setTransform(762.975,2536.05);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZCwIMLnAICoBhIsLHAg");
	this.shape_138.setTransform(754.6,2572.675);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,484.8,0,-1092.7).s().p("AhTARIAAiDICnBhIAACDg");
	this.shape_139.setTransform(715.575,2601.7);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,502.4,0,-1075.1).s().p("AmFCeIMLm/IAACDIsLHAg");
	this.shape_140.setTransform(762.975,2584.125);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],29.7,577,-53.7,-1040).s().p("AhJGFIAAtfICTCDIAAMyg");
	this.shape_141.setTransform(641.4,2419.25);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,660.7,0,-916.6).s().p("AhTmZICnCVIAAI9IinBhg");
	this.shape_142.setTransform(657.175,2425.775);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],26,506.5,-57.4,-1110.6).s().p("AhJD6IAApJICTCDIAAIcg");
	this.shape_143.setTransform(731.9,2485.35);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],23.5,457.5,-59.9,-1159.5).s().p("AhJCaIAAmIICTCDIAAFag");
	this.shape_144.setTransform(794.6,2531.2);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,594.6,0,-982.8).s().p("AhTkOICnCWIAAElIinBhg");
	this.shape_145.setTransform(747.675,2491.9);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,553.5,0,-1023.8).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_146.setTransform(810.375,2532.9);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_147.setTransform(699.175,2486.1);

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,529.7,0,-1047.8).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_148.setTransform(810.375,2556.825);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],25.6,496.4,-57.8,-1120.6).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_149.setTransform(690.8,2497.525);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_150.setTransform(699.175,2403.975);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,577.5,0,-999.9).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_151.setTransform(810.375,2508.975);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],29.8,578.3,-53.6,-1038.8).s().p("AxXuWIAAiDMAivAevIAACEg");
	this.shape_152.setTransform(690.8,2415.4);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_153.setTransform(484.6,2032.7);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],22.5,434.9,-60.9,-1182.2).s().p("EgBVBSeMAAAimeICrBjMAAACmeg");
	this.shape_154.setTransform(476.225,2570.3);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,516.1,0,-1061.3).s().p("EgBThSeICnhhMAAACmeIinBhg");
	this.shape_155.setTransform(493.175,2570.4);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZivICohgIMLG/IioBgg");
	this.shape_156.setTransform(437,2444);

	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],27.5,531.9,-55.9,-1085.2).s().p("AhTgRICnhhIAACEIinBhg");
	this.shape_157.setTransform(476.025,2473.075);

	this.shape_158 = new cjs.Shape();
	this.shape_158.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],28.5,551.8,-54.9,-1065.3).s().p("AmFimIAAh8IMLG/IAACGg");
	this.shape_158.setTransform(428.625,2455.5);

	this.shape_159 = new cjs.Shape();
	this.shape_159.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZisICohgIMLG4IioBhg");
	this.shape_159.setTransform(437,2121.1);

	this.shape_160 = new cjs.Shape();
	this.shape_160.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],44,853.9,-39.4,-763.1).s().p("AhTgUICnhhIAACLIinBgg");
	this.shape_160.setTransform(476.025,2150.15);

	this.shape_161 = new cjs.Shape();
	this.shape_161.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],45.1,873.5,-38.3,-743.5).s().p("AmFieIAAiEIMLG5IAACMg");
	this.shape_161.setTransform(428.625,2132.925);

	this.shape_162 = new cjs.Shape();
	this.shape_162.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZitICohgIMLG6IioBhg");
	this.shape_162.setTransform(437,2005.6);

	this.shape_163 = new cjs.Shape();
	this.shape_163.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],50,969,-33.4,-648).s().p("AhTgVICnhgIAACKIinBhg");
	this.shape_163.setTransform(476.025,2034.75);

	this.shape_164 = new cjs.Shape();
	this.shape_164.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],51,988.7,-32.4,-628.3).s().p("AmFigIAAiDIMLG7IAACMg");
	this.shape_164.setTransform(428.625,2017.4);

	this.shape_165 = new cjs.Shape();
	this.shape_165.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZisICohgIMLG4IioBhg");
	this.shape_165.setTransform(437,2328.075);

	this.shape_166 = new cjs.Shape();
	this.shape_166.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],33.4,647.6,-50,-969.6).s().p("AhTgVICnhhIAACMIinBhg");
	this.shape_166.setTransform(476.025,2357.125);

	this.shape_167 = new cjs.Shape();
	this.shape_167.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],34.5,667.1,-48.9,-950).s().p("AmFieIAAiEIMLG4IAACNg");
	this.shape_167.setTransform(428.625,2339.9);

	this.shape_168 = new cjs.Shape();
	this.shape_168.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_168.setTransform(437.125,2574.575);

	this.shape_169 = new cjs.Shape();
	this.shape_169.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],20.6,398.3,-62.8,-1218.6).s().p("AhUgxICphiIAADFIipBig");
	this.shape_169.setTransform(476.15,2606.975);

	this.shape_170 = new cjs.Shape();
	this.shape_170.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],21.6,418.2,-61.8,-1198.8).s().p("AmFh+IAAjFIMLHBIAADGg");
	this.shape_170.setTransform(428.625,2589.4);

	this.shape_171 = new cjs.Shape();
	this.shape_171.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbCwIMMnBICqBiIsLHBg");
	this.shape_171.setTransform(532.05,2574.575);

	this.shape_172 = new cjs.Shape();
	this.shape_172.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],20.6,397.4,-62.8,-1219.5).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_172.setTransform(493.025,2606.975);

	this.shape_173 = new cjs.Shape();
	this.shape_173.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,497,0,-1080.3).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_173.setTransform(540.575,2589.4);

	this.shape_174 = new cjs.Shape();
	this.shape_174.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_174.setTransform(437.125,2677.275);

	this.shape_175 = new cjs.Shape();
	this.shape_175.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],15.3,295.9,-68.1,-1321.2).s().p("AhUgxICphiIAADFIipBig");
	this.shape_175.setTransform(476.15,2709.675);

	this.shape_176 = new cjs.Shape();
	this.shape_176.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],16.3,315.8,-67.1,-1301.3).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_176.setTransform(428.625,2692.1);

	this.shape_177 = new cjs.Shape();
	this.shape_177.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbCwIMMnBICqBiIsLHBg");
	this.shape_177.setTransform(532.05,2677.275);

	this.shape_178 = new cjs.Shape();
	this.shape_178.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],15.3,295.1,-68.1,-1322.1).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_178.setTransform(493.025,2709.675);

	this.shape_179 = new cjs.Shape();
	this.shape_179.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,394.3,0,-1183.1).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_179.setTransform(540.575,2692.1);

	this.shape_180 = new cjs.Shape();
	this.shape_180.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_180.setTransform(437.125,2776.5);

	this.shape_181 = new cjs.Shape();
	this.shape_181.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],10.2,196.9,-73.2,-1419.9).s().p("AhUgxICphiIAADEIipBjg");
	this.shape_181.setTransform(476.15,2808.9);

	this.shape_182 = new cjs.Shape();
	this.shape_182.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],11.2,216.9,-72.2,-1400.1).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_182.setTransform(428.625,2791.3);

	this.shape_183 = new cjs.Shape();
	this.shape_183.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbCwIMMnBICqBiIsLHBg");
	this.shape_183.setTransform(532.05,2776.5);

	this.shape_184 = new cjs.Shape();
	this.shape_184.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],10.2,196,-73.2,-1420.8).s().p("AhUAxIAAjEICpBiIAADFg");
	this.shape_184.setTransform(493.025,2808.9);

	this.shape_185 = new cjs.Shape();
	this.shape_185.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,295.1,0,-1282.2).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_185.setTransform(540.575,2791.3);

	this.shape_186 = new cjs.Shape();
	this.shape_186.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhjIMLHCIiqBig");
	this.shape_186.setTransform(437.125,2875.7);

	this.shape_187 = new cjs.Shape();
	this.shape_187.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],5.1,98,-78.3,-1518.9).s().p("AhUgxICphiIAADFIipBig");
	this.shape_187.setTransform(476.15,2908.125);

	this.shape_188 = new cjs.Shape();
	this.shape_188.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],6.1,118,-77.3,-1499).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_188.setTransform(428.625,2890.525);

	this.shape_189 = new cjs.Shape();
	this.shape_189.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbCwIMMnCICqBjIsLHBg");
	this.shape_189.setTransform(532.05,2875.7);

	this.shape_190 = new cjs.Shape();
	this.shape_190.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],5.1,97.1,-78.3,-1519.8).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_190.setTransform(493.025,2908.125);

	this.shape_191 = new cjs.Shape();
	this.shape_191.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,195.9,0,-1381.4).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_191.setTransform(540.575,2890.525);

	this.shape_192 = new cjs.Shape();
	this.shape_192.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_192.setTransform(437.125,2974.925);

	this.shape_193 = new cjs.Shape();
	this.shape_193.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,-1,-83.4,-1617.9).s().p("AhUgxICphiIAADFIipBig");
	this.shape_193.setTransform(476.15,3007.325);

	this.shape_194 = new cjs.Shape();
	this.shape_194.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],1,19,-82.4,-1598).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_194.setTransform(428.625,2989.75);

	this.shape_195 = new cjs.Shape();
	this.shape_195.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbCwIMMnBICqBiIsLHBg");
	this.shape_195.setTransform(532.05,2974.925);

	this.shape_196 = new cjs.Shape();
	this.shape_196.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,-1.8,-83.4,-1618.8).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_196.setTransform(493.025,3007.325);

	this.shape_197 = new cjs.Shape();
	this.shape_197.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,96.7,0,-1480.6).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_197.setTransform(540.575,2989.75);

	this.shape_198 = new cjs.Shape();
	this.shape_198.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_198.setTransform(389.425,1978.6);

	this.shape_199 = new cjs.Shape();
	this.shape_199.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],25.5,493.9,-57.9,-1123.2).s().p("EgBVBScMAAAimbICrBjMAAACmcg");
	this.shape_199.setTransform(381.025,2516.05);

	this.shape_200 = new cjs.Shape();
	this.shape_200.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,570.3,0,-1007.1).s().p("EgBThSdICnhhMAAACmbIinBig");
	this.shape_200.setTransform(398,2516.15);

	this.shape_201 = new cjs.Shape();
	this.shape_201.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_201.setTransform(579.375,1978.075);

	this.shape_202 = new cjs.Shape();
	this.shape_202.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],25,485.4,-58.4,-1131.6).s().p("EgBVBSVMAAAimMICrBjMAAACmMg");
	this.shape_202.setTransform(571,2514.775);

	this.shape_203 = new cjs.Shape();
	this.shape_203.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,571.6,0,-1005.8).s().p("EgBThSVICnhhMAAACmMIinBhg");
	this.shape_203.setTransform(587.975,2514.9);

	this.shape_204 = new cjs.Shape();
	this.shape_204.graphics.f("#ECF5FF").s().p("A5AgHIYluSIZcOhI4mOSg");
	this.shape_204.setTransform(483.2,3042.175);

	this.shape_205 = new cjs.Shape();
	this.shape_205.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],143.6,392.9,-261.6,-715.6).s().p("Asth7IAAqpIZbOgIAAKpg");
	this.shape_205.setTransform(404.525,3121.9);

	this.shape_206 = new cjs.Shape();
	this.shape_206.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],238,450.1,-9.3,-17.7).s().p("AsSB1IYluRIAAKpI4lOQg");
	this.shape_206.setTransform(564.625,3122.675);

	this.shape_207 = new cjs.Shape();
	this.shape_207.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_207.setTransform(532.525,2920.725);

	this.shape_208 = new cjs.Shape();
	this.shape_208.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],2.5,48.2,-80.9,-1568.7).s().p("AhUgxICphiIAADFIipBig");
	this.shape_208.setTransform(571.55,2953.125);

	this.shape_209 = new cjs.Shape();
	this.shape_209.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],3.5,68.1,-79.9,-1548.9).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_209.setTransform(524.025,2935.55);

	this.shape_210 = new cjs.Shape();
	this.shape_210.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_210.setTransform(437.475,2920.725);

	this.shape_211 = new cjs.Shape();
	this.shape_211.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],3,57.1,-80.4,-1560.2).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_211.setTransform(398.475,2953.125);

	this.shape_212 = new cjs.Shape();
	this.shape_212.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,150.9,0,-1426.5).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_212.setTransform(446,2935.55);

	this.shape_213 = new cjs.Shape();
	this.shape_213.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_213.setTransform(532.525,2821.525);

	this.shape_214 = new cjs.Shape();
	this.shape_214.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],7.6,147.1,-75.8,-1469.9).s().p("AhUgxICphiIAADFIipBig");
	this.shape_214.setTransform(571.55,2853.925);

	this.shape_215 = new cjs.Shape();
	this.shape_215.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],8.7,167.1,-74.7,-1450).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_215.setTransform(524.025,2836.35);

	this.shape_216 = new cjs.Shape();
	this.shape_216.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_216.setTransform(437.475,2821.525);

	this.shape_217 = new cjs.Shape();
	this.shape_217.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],8.1,156,-75.3,-1461.3).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_217.setTransform(398.475,2853.925);

	this.shape_218 = new cjs.Shape();
	this.shape_218.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,250.1,0,-1327.4).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_218.setTransform(446,2836.35);

	this.shape_219 = new cjs.Shape();
	this.shape_219.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhjIMLHCIiqBig");
	this.shape_219.setTransform(532.525,2721.25);

	this.shape_220 = new cjs.Shape();
	this.shape_220.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],12.8,247.1,-70.6,-1370).s().p("AhUgxICphiIAADEIipBjg");
	this.shape_220.setTransform(571.55,2753.65);

	this.shape_221 = new cjs.Shape();
	this.shape_221.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],13.8,267.1,-69.6,-1350).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_221.setTransform(524.025,2736.05);

	this.shape_222 = new cjs.Shape();
	this.shape_222.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCvIMLnBICqBjIsLHBg");
	this.shape_222.setTransform(437.475,2721.25);

	this.shape_223 = new cjs.Shape();
	this.shape_223.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],13.2,256.1,-70.2,-1361.1).s().p("AhUAyIAAjFICpBjIAADEg");
	this.shape_223.setTransform(398.475,2753.625);

	this.shape_224 = new cjs.Shape();
	this.shape_224.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,350.4,0,-1227).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_224.setTransform(446,2736.05);

	this.shape_225 = new cjs.Shape();
	this.shape_225.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_225.setTransform(532.525,2622.625);

	this.shape_226 = new cjs.Shape();
	this.shape_226.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],17.8,345.5,-65.6,-1271.6).s().p("AhUgxICphiIAADFIipBig");
	this.shape_226.setTransform(571.55,2655.025);

	this.shape_227 = new cjs.Shape();
	this.shape_227.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],18.9,365.4,-64.5,-1251.7).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_227.setTransform(524.025,2637.45);

	this.shape_228 = new cjs.Shape();
	this.shape_228.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_228.setTransform(437.475,2622.625);

	this.shape_229 = new cjs.Shape();
	this.shape_229.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],18.3,354.4,-65.1,-1262.6).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_229.setTransform(398.475,2655.025);

	this.shape_230 = new cjs.Shape();
	this.shape_230.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,449,0,-1128.3).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_230.setTransform(446,2637.45);

	this.shape_231 = new cjs.Shape();
	this.shape_231.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_231.setTransform(532.525,2519.775);

	this.shape_232 = new cjs.Shape();
	this.shape_232.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],23.1,448.1,-60.3,-1169).s().p("AhUgxICphiIAADFIipBig");
	this.shape_232.setTransform(571.55,2552.175);

	this.shape_233 = new cjs.Shape();
	this.shape_233.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],24.2,468,-59.2,-1149.1).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_233.setTransform(524.025,2534.6);

	this.shape_234 = new cjs.Shape();
	this.shape_234.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnCICqBjIsLHBg");
	this.shape_234.setTransform(437.475,2519.75);

	this.shape_235 = new cjs.Shape();
	this.shape_235.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],23.6,457,-59.8,-1160.1).s().p("AhUAxIAAjEICpBiIAADFg");
	this.shape_235.setTransform(398.475,2552.175);

	this.shape_236 = new cjs.Shape();
	this.shape_236.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,551.9,0,-1025.5).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_236.setTransform(446,2534.575);

	this.shape_237 = new cjs.Shape();
	this.shape_237.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohhIMFG+IioBgg");
	this.shape_237.setTransform(532.075,2273.3);

	this.shape_238 = new cjs.Shape();
	this.shape_238.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],36,697,-47.4,-920).s().p("AhTgVICnhgIAACKIinBhg");
	this.shape_238.setTransform(570.775,2302.6);

	this.shape_239 = new cjs.Shape();
	this.shape_239.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],37,716.8,-46.4,-900.3).s().p("AmCigIAAiEIMFG9IAACMg");
	this.shape_239.setTransform(523.7,2285.15);

	this.shape_240 = new cjs.Shape();
	this.shape_240.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohhIMFG9IioBig");
	this.shape_240.setTransform(532.075,2383.65);

	this.shape_241 = new cjs.Shape();
	this.shape_241.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],30.2,583.7,-53.2,-1033.5).s().p("AhTg1ICnhiIAADOIinBhg");
	this.shape_241.setTransform(570.775,2416.225);

	this.shape_242 = new cjs.Shape();
	this.shape_242.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],31.2,603.5,-52.2,-1013.6).s().p("AmCiAIAAjFIMFG9IAADOg");
	this.shape_242.setTransform(523.7,2398.8);

	this.shape_243 = new cjs.Shape();
	this.shape_243.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,749.5,0,-827.9).s().p("AhTmbICnAwIAAKlIinBig");
	this.shape_243.setTransform(315.4,2337);

	this.shape_244 = new cjs.Shape();
	this.shape_244.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],35.2,678.7,-48.2,-938.4).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_244.setTransform(299.625,2334.95);

	this.shape_245 = new cjs.Shape();
	this.shape_245.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,782.2,0,-795.2).s().p("AhTkpICnAvIAAHDIinBgg");
	this.shape_245.setTransform(238.85,2304.25);

	this.shape_246 = new cjs.Shape();
	this.shape_246.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],37,715.3,-46.4,-901.8).s().p("AhJDoIAAolICTApIAAJSg");
	this.shape_246.setTransform(223.075,2302.2);

	this.shape_247 = new cjs.Shape();
	this.shape_247.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,810.3,0,-767.1).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_247.setTransform(173.2,2276.15);

	this.shape_248 = new cjs.Shape();
	this.shape_248.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],38.7,746.7,-44.7,-870.4).s().p("AhJCHIAAliICTAoIAAGQg");
	this.shape_248.setTransform(157.425,2274.1);

	this.shape_249 = new cjs.Shape();
	this.shape_249.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_249.setTransform(269.625,2346.925);

	this.shape_250 = new cjs.Shape();
	this.shape_250.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,668.9,0,-908.5).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_250.setTransform(380.825,2417.625);

	this.shape_251 = new cjs.Shape();
	this.shape_251.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],33.9,657.3,-49.5,-959.8).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_251.setTransform(261.25,2358.35);

	this.shape_252 = new cjs.Shape();
	this.shape_252.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_252.setTransform(269.625,2265.075);

	this.shape_253 = new cjs.Shape();
	this.shape_253.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,783.8,0,-793.6).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_253.setTransform(380.825,2302.675);

	this.shape_254 = new cjs.Shape();
	this.shape_254.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],38.1,739,-45.3,-878.1).s().p("AxXjzIAAiEMAivAJrIAACEg");
	this.shape_254.setTransform(261.25,2276.5);

	this.shape_255 = new cjs.Shape();
	this.shape_255.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncDLIMRnEICoAvIsSHEg");
	this.shape_255.setTransform(214.5,2208.9);

	this.shape_256 = new cjs.Shape();
	this.shape_256.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,845.8,0,-731.6).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_256.setTransform(175.175,2240.625);

	this.shape_257 = new cjs.Shape();
	this.shape_257.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,868.7,0,-708.7).s().p("AmICgIMRnEIAACFIsRHEg");
	this.shape_257.setTransform(222.875,2217.725);

	this.shape_258 = new cjs.Shape();
	this.shape_258.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,804.5,0,-772.9).s().p("AhTmbICnAwIAAKlIinBig");
	this.shape_258.setTransform(410.825,2282);

	this.shape_259 = new cjs.Shape();
	this.shape_259.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],37.7,728.6,-45.7,-888.4).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_259.setTransform(395.05,2279.95);

	this.shape_260 = new cjs.Shape();
	this.shape_260.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,837.2,0,-740.1).s().p("AhTkpICnAvIAAHCIinBhg");
	this.shape_260.setTransform(334.275,2249.25);

	this.shape_261 = new cjs.Shape();
	this.shape_261.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],39.6,765.2,-43.8,-851.8).s().p("AhJDoIAAolICTApIAAJSg");
	this.shape_261.setTransform(318.5,2247.2);

	this.shape_262 = new cjs.Shape();
	this.shape_262.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,865.3,0,-712.1).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_262.setTransform(268.625,2221.15);

	this.shape_263 = new cjs.Shape();
	this.shape_263.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],41.2,796.6,-42.2,-820.5).s().p("AhJCHIAAliICTAoIAAGPg");
	this.shape_263.setTransform(252.85,2219.1);

	this.shape_264 = new cjs.Shape();
	this.shape_264.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_264.setTransform(365.025,2291.9);

	this.shape_265 = new cjs.Shape();
	this.shape_265.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,723.9,0,-853.5).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_265.setTransform(476.225,2362.625);

	this.shape_266 = new cjs.Shape();
	this.shape_266.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],36.5,707.3,-46.9,-909.8).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_266.setTransform(356.65,2303.35);

	this.shape_267 = new cjs.Shape();
	this.shape_267.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_267.setTransform(365.025,2210.075);

	this.shape_268 = new cjs.Shape();
	this.shape_268.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,838.8,0,-738.6).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_268.setTransform(476.225,2247.675);

	this.shape_269 = new cjs.Shape();
	this.shape_269.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],40.7,788.9,-42.7,-828.2).s().p("AxXjzIAAiEMAivAJrIAACEg");
	this.shape_269.setTransform(356.65,2221.5);

	this.shape_270 = new cjs.Shape();
	this.shape_270.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohhIMFG+IioBhg");
	this.shape_270.setTransform(532.075,1950.75);

	this.shape_271 = new cjs.Shape();
	this.shape_271.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],52.6,1018.6,-30.8,-598.4).s().p("AhTgVICnhhIAACMIinBhg");
	this.shape_271.setTransform(570.775,1980.1);

	this.shape_272 = new cjs.Shape();
	this.shape_272.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],53.6,1038.5,-29.8,-578.5).s().p("AmCihIAAiDIMFG9IAACNg");
	this.shape_272.setTransform(523.7,1962.6);

	this.shape_273 = new cjs.Shape();
	this.shape_273.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBjIioBgg");
	this.shape_273.setTransform(484.825,1923.5);

	this.shape_274 = new cjs.Shape();
	this.shape_274.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],28.1,544.7,-55.3,-1072.4).s().p("EgBVBSVMAAAimMICrBjMAAACmMg");
	this.shape_274.setTransform(476.425,2460.175);

	this.shape_275 = new cjs.Shape();
	this.shape_275.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,626.2,0,-951.2).s().p("EgBThSVICnhgMAAACmLIinBgg");
	this.shape_275.setTransform(493.4,2460.3);

	this.shape_276 = new cjs.Shape();
	this.shape_276.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1071.8,0,-505.6).s().p("AhTmaICnAuIAAKmIinBhg");
	this.shape_276.setTransform(315.4,2014.65);

	this.shape_277 = new cjs.Shape();
	this.shape_277.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],51.7,1000.2,-31.7,-616.9).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_277.setTransform(299.625,2012.575);

	this.shape_278 = new cjs.Shape();
	this.shape_278.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1104.6,0,-472.8).s().p("AhTkoICnAuIAAHDIinBhg");
	this.shape_278.setTransform(238.85,1981.9);

	this.shape_279 = new cjs.Shape();
	this.shape_279.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],53.6,1036.8,-29.8,-580.3).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_279.setTransform(223.075,1979.825);

	this.shape_280 = new cjs.Shape();
	this.shape_280.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1132.7,0,-444.7).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_280.setTransform(173.2,1953.775);

	this.shape_281 = new cjs.Shape();
	this.shape_281.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],55.2,1068.2,-28.2,-548.9).s().p("AhJCHIAAljICTApIAAGPg");
	this.shape_281.setTransform(157.425,1951.75);

	this.shape_282 = new cjs.Shape();
	this.shape_282.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_282.setTransform(269.625,2024.525);

	this.shape_283 = new cjs.Shape();
	this.shape_283.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,991.2,0,-586.2).s().p("AhTgRICnhhIAACEIinBhg");
	this.shape_283.setTransform(380.825,2095.25);

	this.shape_284 = new cjs.Shape();
	this.shape_284.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],50.5,978.8,-32.9,-638.3).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_284.setTransform(261.25,2035.975);

	this.shape_285 = new cjs.Shape();
	this.shape_285.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_285.setTransform(269.625,1942.725);

	this.shape_286 = new cjs.Shape();
	this.shape_286.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1106.1,0,-471.3).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_286.setTransform(380.825,1980.325);

	this.shape_287 = new cjs.Shape();
	this.shape_287.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],54.7,1060.5,-28.7,-556.6).s().p("AxXj0IAAiDMAivAJrIAACEg");
	this.shape_287.setTransform(261.25,1954.15);

	this.shape_288 = new cjs.Shape();
	this.shape_288.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncDLIMRnEICoAvIsSHEg");
	this.shape_288.setTransform(214.5,1886.525);

	this.shape_289 = new cjs.Shape();
	this.shape_289.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1168.2,0,-409.2).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_289.setTransform(175.175,1918.275);

	this.shape_290 = new cjs.Shape();
	this.shape_290.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1191.1,0,-386.3).s().p("AmICgIMRnEIAACFIsRHEg");
	this.shape_290.setTransform(222.875,1895.375);

	this.shape_291 = new cjs.Shape();
	this.shape_291.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1127,0,-450.4).s().p("AhTmbICnAvIAAKnIinBgg");
	this.shape_291.setTransform(410.825,1959.5);

	this.shape_292 = new cjs.Shape();
	this.shape_292.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],54.3,1050.2,-29.1,-566.9).s().p("AhJFbIAAsLICTApIAAM4g");
	this.shape_292.setTransform(395.05,1957.525);

	this.shape_293 = new cjs.Shape();
	this.shape_293.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1159.6,0,-417.8).s().p("AhTkpICnAvIAAHDIinBhg");
	this.shape_293.setTransform(334.275,1926.875);

	this.shape_294 = new cjs.Shape();
	this.shape_294.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],56.2,1086.8,-27.2,-530.3).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_294.setTransform(318.5,1924.775);

	this.shape_295 = new cjs.Shape();
	this.shape_295.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1187.8,0,-389.8).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_295.setTransform(268.625,1898.775);

	this.shape_296 = new cjs.Shape();
	this.shape_296.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],57.8,1118.2,-25.6,-499).s().p("AhJCHIAAljICTApIAAGPg");
	this.shape_296.setTransform(252.85,1896.75);

	this.shape_297 = new cjs.Shape();
	this.shape_297.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_297.setTransform(365.025,1969.525);

	this.shape_298 = new cjs.Shape();
	this.shape_298.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1046.2,0,-531.2).s().p("AhTgRICnhhIAACEIinBhg");
	this.shape_298.setTransform(476.225,2040.25);

	this.shape_299 = new cjs.Shape();
	this.shape_299.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],53.1,1028.8,-30.3,-588.3).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_299.setTransform(356.65,1980.975);

	this.shape_300 = new cjs.Shape();
	this.shape_300.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkEICohhMAivAJqIioBhg");
	this.shape_300.setTransform(365.025,1887.625);

	this.shape_301 = new cjs.Shape();
	this.shape_301.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1161.3,0,-416.1).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_301.setTransform(476.225,1925.125);

	this.shape_302 = new cjs.Shape();
	this.shape_302.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],57.3,1110.5,-26.1,-506.6).s().p("AxXjzIAAiDMAivAJpIAACEg");
	this.shape_302.setTransform(356.65,1899.05);

	this.shape_303 = new cjs.Shape();
	this.shape_303.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-39.1,0,39.2,0).s().p("AmGBQIJlljICoBhIsNHGg");
	this.shape_303.setTransform(445.525,2066.625);

	this.shape_304 = new cjs.Shape();
	this.shape_304.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1011.9,0,-565.5).s().p("AmJDBIMTnDIAACEIqfGBg");
	this.shape_304.setTransform(445.275,2074.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_304},{t:this.shape_303},{t:this.shape_302},{t:this.shape_301},{t:this.shape_300},{t:this.shape_299},{t:this.shape_298},{t:this.shape_297},{t:this.shape_296},{t:this.shape_295},{t:this.shape_294},{t:this.shape_293},{t:this.shape_292},{t:this.shape_291},{t:this.shape_290},{t:this.shape_289},{t:this.shape_288},{t:this.shape_287},{t:this.shape_286},{t:this.shape_285},{t:this.shape_284},{t:this.shape_283},{t:this.shape_282},{t:this.shape_281},{t:this.shape_280},{t:this.shape_279},{t:this.shape_278},{t:this.shape_277},{t:this.shape_276},{t:this.shape_275},{t:this.shape_274},{t:this.shape_273},{t:this.shape_272},{t:this.shape_271},{t:this.shape_270},{t:this.shape_269},{t:this.shape_268},{t:this.shape_267},{t:this.shape_266},{t:this.shape_265},{t:this.shape_264},{t:this.shape_263},{t:this.shape_262},{t:this.shape_261},{t:this.shape_260},{t:this.shape_259},{t:this.shape_258},{t:this.shape_257},{t:this.shape_256},{t:this.shape_255},{t:this.shape_254},{t:this.shape_253},{t:this.shape_252},{t:this.shape_251},{t:this.shape_250},{t:this.shape_249},{t:this.shape_248},{t:this.shape_247},{t:this.shape_246},{t:this.shape_245},{t:this.shape_244},{t:this.shape_243},{t:this.shape_242},{t:this.shape_241},{t:this.shape_240},{t:this.shape_239},{t:this.shape_238},{t:this.shape_237},{t:this.shape_236},{t:this.shape_235},{t:this.shape_234},{t:this.shape_233},{t:this.shape_232},{t:this.shape_231},{t:this.shape_230},{t:this.shape_229},{t:this.shape_228},{t:this.shape_227},{t:this.shape_226},{t:this.shape_225},{t:this.shape_224},{t:this.shape_223},{t:this.shape_222},{t:this.shape_221},{t:this.shape_220},{t:this.shape_219},{t:this.shape_218},{t:this.shape_217},{t:this.shape_216},{t:this.shape_215},{t:this.shape_214},{t:this.shape_213},{t:this.shape_212},{t:this.shape_211},{t:this.shape_210},{t:this.shape_209},{t:this.shape_208},{t:this.shape_207},{t:this.shape_206},{t:this.shape_205},{t:this.shape_204},{t:this.shape_203},{t:this.shape_202},{t:this.shape_201},{t:this.shape_200},{t:this.shape_199},{t:this.shape_198},{t:this.shape_197},{t:this.shape_196},{t:this.shape_195},{t:this.shape_194},{t:this.shape_193},{t:this.shape_192},{t:this.shape_191},{t:this.shape_190},{t:this.shape_189},{t:this.shape_188},{t:this.shape_187},{t:this.shape_186},{t:this.shape_185},{t:this.shape_184},{t:this.shape_183},{t:this.shape_182},{t:this.shape_181},{t:this.shape_180},{t:this.shape_179},{t:this.shape_178},{t:this.shape_177},{t:this.shape_176},{t:this.shape_175},{t:this.shape_174},{t:this.shape_173},{t:this.shape_172},{t:this.shape_171},{t:this.shape_170},{t:this.shape_169},{t:this.shape_168},{t:this.shape_167},{t:this.shape_166},{t:this.shape_165},{t:this.shape_164},{t:this.shape_163},{t:this.shape_162},{t:this.shape_161},{t:this.shape_160},{t:this.shape_159},{t:this.shape_158},{t:this.shape_157},{t:this.shape_156},{t:this.shape_155},{t:this.shape_154},{t:this.shape_153},{t:this.shape_152},{t:this.shape_151},{t:this.shape_150},{t:this.shape_149},{t:this.shape_148},{t:this.shape_147},{t:this.shape_146},{t:this.shape_145},{t:this.shape_144},{t:this.shape_143},{t:this.shape_142},{t:this.shape_141},{t:this.shape_140},{t:this.shape_139},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85}]}).wait(40));

	// electric_lines3
	this.shape_305 = new cjs.Shape();
	this.shape_305.graphics.f("#9C5984").s().p("Eg9kAhvQXymoW5rIQS3pJRpr2QNbpCL0p+QHbmSFcldIB4BFQkfEkmJFWQp4InrNICQx5MwzzKLQ6FNX7HHlg");
	this.shape_305.setTransform(984.925,1980.45);

	this.shape_306 = new cjs.Shape();
	this.shape_306.graphics.f("#9C5984").s().p("Eg8CAgPUAodgLTAlAgXtQNVoiMDppQIcmwG6mjIB5BGQlDE2mDFFQoWHCpMGkQx4MxzzKKQ6FNY7IHlg");
	this.shape_306.setTransform(1119.4,2042.625);

	this.shape_307 = new cjs.Shape();
	this.shape_307.graphics.f("#9C5984").s().p("Eg8OAgbUAoxgLZAlSgX/QNVomMDpsQIXmuGxmeIB6BGQlCE3mFFIQohHMpaGuQx4MxzzKKQ6FNY7HHlg");
	this.shape_307.setTransform(1120.65,2367.775);

	this.shape_308 = new cjs.Shape();
	this.shape_308.graphics.f("#9C5984").s().p("Eg9wAh7QYImvXNrVQTDpURxsCQNbpGLvqBQHOmJFIlMIB4BFQkSEZmFFWQqII5rmISQx4Mxz0KLQ6FNY7HHkg");
	this.shape_308.setTransform(986.125,2305.575);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_308},{t:this.shape_307},{t:this.shape_306},{t:this.shape_305}]}).wait(40));

	// tower2
	this.shape_309 = new cjs.Shape();
	this.shape_309.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],65.5,1272.4,-17.9,-344.7).s().p("AhJGGIAAtgICTCCIAAMzg");
	this.shape_309.setTransform(1350.05,1685.45);

	this.shape_310 = new cjs.Shape();
	this.shape_310.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1394.5,0,-182.9).s().p("AhTmZICnCVIAAI9IinBhg");
	this.shape_310.setTransform(1365.825,1691.975);

	this.shape_311 = new cjs.Shape();
	this.shape_311.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],61.9,1201.8,-21.5,-415.2).s().p("AhJD7IAApKICTCDIAAIcg");
	this.shape_311.setTransform(1440.525,1751.525);

	this.shape_312 = new cjs.Shape();
	this.shape_312.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],59.4,1152.9,-24,-464.2).s().p("AhJCaIAAmIICTCDIAAFag");
	this.shape_312.setTransform(1503.225,1797.4);

	this.shape_313 = new cjs.Shape();
	this.shape_313.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1328.3,0,-249).s().p("AhTkNICnCVIAAElIinBhg");
	this.shape_313.setTransform(1456.3,1758.075);

	this.shape_314 = new cjs.Shape();
	this.shape_314.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1287.4,0,-290.1).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_314.setTransform(1519,1799.1);

	this.shape_315 = new cjs.Shape();
	this.shape_315.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_315.setTransform(1407.8,1752.3);

	this.shape_316 = new cjs.Shape();
	this.shape_316.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1263.5,0,-314).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_316.setTransform(1519,1823.025);

	this.shape_317 = new cjs.Shape();
	this.shape_317.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],61.5,1191.8,-21.9,-425.3).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_317.setTransform(1399.4,1763.725);

	this.shape_318 = new cjs.Shape();
	this.shape_318.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_318.setTransform(1407.8,1670.175);

	this.shape_319 = new cjs.Shape();
	this.shape_319.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1311.3,0,-266.1).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_319.setTransform(1519,1775.175);

	this.shape_320 = new cjs.Shape();
	this.shape_320.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],65.7,1273.7,-17.7,-343.3).s().p("AxXuVIAAiEMAivAevIAACEg");
	this.shape_320.setTransform(1399.4,1681.6);

	this.shape_321 = new cjs.Shape();
	this.shape_321.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.6,0,47.6,0).s().p("AnbCuIMPm+ICoBhIsLHAg");
	this.shape_321.setTransform(1335.425,1539.625);

	this.shape_322 = new cjs.Shape();
	this.shape_322.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1535.4,0,-42.1).s().p("AmFCeIMLm/IAACDIsLHAg");
	this.shape_322.setTransform(1344.025,1551.075);

	this.shape_323 = new cjs.Shape();
	this.shape_323.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCWIMMm/ICnCSIsLHBg");
	this.shape_323.setTransform(1558,1734.025);

	this.shape_324 = new cjs.Shape();
	this.shape_324.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1321.1,0,-256.4).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_324.setTransform(1519,1765.425);

	this.shape_325 = new cjs.Shape();
	this.shape_325.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1338.7,0,-238.8).s().p("AmFCfIMLnAIAACDIsLHAg");
	this.shape_325.setTransform(1566.4,1747.85);

	this.shape_326 = new cjs.Shape();
	this.shape_326.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCwIMMnAICnBhIsLHAg");
	this.shape_326.setTransform(1558,1784.475);

	this.shape_327 = new cjs.Shape();
	this.shape_327.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1273,0,-304.4).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_327.setTransform(1519,1813.5);

	this.shape_328 = new cjs.Shape();
	this.shape_328.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1290.5,0,-286.9).s().p("AmFCeIMLm/IAACDIsLHAg");
	this.shape_328.setTransform(1566.4,1795.925);

	this.shape_329 = new cjs.Shape();
	this.shape_329.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],68.1,1322,-15.3,-295.1).s().p("AhJGGIAAtgICTCDIAAMyg");
	this.shape_329.setTransform(1444.8,1630.9);

	this.shape_330 = new cjs.Shape();
	this.shape_330.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1449,0,-128.4).s().p("AhTmYICnCUIAAI8IinBig");
	this.shape_330.setTransform(1460.575,1637.45);

	this.shape_331 = new cjs.Shape();
	this.shape_331.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],64.5,1251.4,-18.9,-365.7).s().p("AhJD7IAApKICTCDIAAIcg");
	this.shape_331.setTransform(1535.3,1697);

	this.shape_332 = new cjs.Shape();
	this.shape_332.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],61.9,1202.4,-21.5,-414.7).s().p("AhJCZIAAmHICTCDIAAFag");
	this.shape_332.setTransform(1598,1742.875);

	this.shape_333 = new cjs.Shape();
	this.shape_333.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1382.9,0,-194.5).s().p("AhTkNICnCUIAAEmIinBig");
	this.shape_333.setTransform(1551.075,1703.55);

	this.shape_334 = new cjs.Shape();
	this.shape_334.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1341.8,0,-235.6).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_334.setTransform(1613.775,1744.575);

	this.shape_335 = new cjs.Shape();
	this.shape_335.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_335.setTransform(1502.575,1697.775);

	this.shape_336 = new cjs.Shape();
	this.shape_336.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1318,0,-259.4).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_336.setTransform(1613.775,1768.5);

	this.shape_337 = new cjs.Shape();
	this.shape_337.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],64,1241.3,-19.4,-375.8).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_337.setTransform(1494.2,1709.225);

	this.shape_338 = new cjs.Shape();
	this.shape_338.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_338.setTransform(1502.575,1615.625);

	this.shape_339 = new cjs.Shape();
	this.shape_339.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1365.6,0,-211.6).s().p("AhTgQICnhiIAACEIinBgg");
	this.shape_339.setTransform(1613.775,1720.65);

	this.shape_340 = new cjs.Shape();
	this.shape_340.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],68.3,1323.2,-15.1,-293.9).s().p("AxXuVIAAiEMAivAevIAACEg");
	this.shape_340.setTransform(1494.2,1627.075);

	this.shape_341 = new cjs.Shape();
	this.shape_341.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],48.9,950.8,-34.5,-666.3).s().p("AhJGFIAAtfICTCDIAAMyg");
	this.shape_341.setTransform(1350.05,2007.95);

	this.shape_342 = new cjs.Shape();
	this.shape_342.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1072,0,-505.4).s().p("AhTmZICnCVIAAI9IinBhg");
	this.shape_342.setTransform(1365.825,2014.475);

	this.shape_343 = new cjs.Shape();
	this.shape_343.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],45.3,880.2,-38.1,-736.9).s().p("AhJD6IAApJICTCDIAAIcg");
	this.shape_343.setTransform(1440.525,2074.05);

	this.shape_344 = new cjs.Shape();
	this.shape_344.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],42.8,831.2,-40.6,-785.8).s().p("AhJCZIAAmHICTCDIAAFag");
	this.shape_344.setTransform(1503.225,2119.9);

	this.shape_345 = new cjs.Shape();
	this.shape_345.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1005.8,0,-571.5).s().p("AhTkOICnCWIAAElIinBhg");
	this.shape_345.setTransform(1456.3,2080.6);

	this.shape_346 = new cjs.Shape();
	this.shape_346.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,964.8,0,-612.6).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_346.setTransform(1519,2121.6);

	this.shape_347 = new cjs.Shape();
	this.shape_347.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_347.setTransform(1407.8,2074.8);

	this.shape_348 = new cjs.Shape();
	this.shape_348.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,940.9,0,-636.5).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_348.setTransform(1519,2145.525);

	this.shape_349 = new cjs.Shape();
	this.shape_349.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],44.9,870.1,-38.5,-747).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_349.setTransform(1399.4,2086.225);

	this.shape_350 = new cjs.Shape();
	this.shape_350.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_350.setTransform(1407.8,1992.675);

	this.shape_351 = new cjs.Shape();
	this.shape_351.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,988.8,0,-588.6).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_351.setTransform(1519,2097.675);

	this.shape_352 = new cjs.Shape();
	this.shape_352.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],49.1,952.1,-34.3,-665).s().p("AxXuWIAAiDMAivAevIAACEg");
	this.shape_352.setTransform(1399.4,2004.1);

	this.shape_353 = new cjs.Shape();
	this.shape_353.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncCzIMSnGICnBhIsNHGg");
	this.shape_353.setTransform(1240.325,1485.2);

	this.shape_354 = new cjs.Shape();
	this.shape_354.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1593.3,0,15.9).s().p("AmJDBIMTnDIAACDIqfGCg");
	this.shape_354.setTransform(1248.675,1493.2);

	this.shape_355 = new cjs.Shape();
	this.shape_355.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-39.1,0,39.2,0).s().p("AmGBQIJmljICnBhIsNHGg");
	this.shape_355.setTransform(1248.925,1807.75);

	this.shape_356 = new cjs.Shape();
	this.shape_356.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1270.8,0,-306.7).s().p("AmJDBIMTnDIAACDIqfGCg");
	this.shape_356.setTransform(1248.675,1815.75);

	this.shape_357 = new cjs.Shape();
	this.shape_357.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.3,0,47.4,0).s().p("AnZCwIMLnAICoBhIsMHAg");
	this.shape_357.setTransform(1335.65,1862.15);

	this.shape_358 = new cjs.Shape();
	this.shape_358.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1212.9,0,-364.5).s().p("AmFCfIMLnAIAACDIsLHAg");
	this.shape_358.setTransform(1344.025,1873.575);

	this.shape_359 = new cjs.Shape();
	this.shape_359.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCWIMMm/ICnCSIsLHBg");
	this.shape_359.setTransform(1558,2056.425);

	this.shape_360 = new cjs.Shape();
	this.shape_360.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,998.5,0,-578.7).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_360.setTransform(1519,2087.825);

	this.shape_361 = new cjs.Shape();
	this.shape_361.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1016.2,0,-561.2).s().p("AmFCfIMLnAIAACEIsLG/g");
	this.shape_361.setTransform(1566.4,2070.225);

	this.shape_362 = new cjs.Shape();
	this.shape_362.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCwIMMnAICnBhIsLHAg");
	this.shape_362.setTransform(1558,2106.85);

	this.shape_363 = new cjs.Shape();
	this.shape_363.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,950.6,0,-626.9).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_363.setTransform(1519,2135.875);

	this.shape_364 = new cjs.Shape();
	this.shape_364.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,968.2,0,-609.2).s().p("AmFCfIMLnAIAACEIsLG/g");
	this.shape_364.setTransform(1566.4,2118.275);

	this.shape_365 = new cjs.Shape();
	this.shape_365.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],51.5,1000.3,-31.9,-616.8).s().p("AhJGGIAAtgICTCDIAAMyg");
	this.shape_365.setTransform(1444.8,1953.4);

	this.shape_366 = new cjs.Shape();
	this.shape_366.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1126.5,0,-450.9).s().p("AhTmZICnCVIAAI8IinBhg");
	this.shape_366.setTransform(1460.575,1959.95);

	this.shape_367 = new cjs.Shape();
	this.shape_367.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],47.9,929.7,-35.5,-687.4).s().p("AhJD6IAApJICTCDIAAIcg");
	this.shape_367.setTransform(1535.3,2019.525);

	this.shape_368 = new cjs.Shape();
	this.shape_368.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],45.3,880.7,-38.1,-736.4).s().p("AhJCaIAAmIICTCDIAAFag");
	this.shape_368.setTransform(1598,2065.375);

	this.shape_369 = new cjs.Shape();
	this.shape_369.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1060.4,0,-517).s().p("AhTkOICnCWIAAElIinBhg");
	this.shape_369.setTransform(1551.075,2026.05);

	this.shape_370 = new cjs.Shape();
	this.shape_370.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1019.4,0,-558).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_370.setTransform(1613.775,2067.075);

	this.shape_371 = new cjs.Shape();
	this.shape_371.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_371.setTransform(1502.575,2020.275);

	this.shape_372 = new cjs.Shape();
	this.shape_372.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,995.5,0,-581.9).s().p("AhTgRICnhhIAACEIinBgg");
	this.shape_372.setTransform(1613.775,2091);

	this.shape_373 = new cjs.Shape();
	this.shape_373.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],47.5,919.6,-35.9,-697.5).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_373.setTransform(1494.2,2031.725);

	this.shape_374 = new cjs.Shape();
	this.shape_374.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_374.setTransform(1502.575,1938.125);

	this.shape_375 = new cjs.Shape();
	this.shape_375.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1043.4,0,-534.1).s().p("AhTgRICnhhIAACDIinBig");
	this.shape_375.setTransform(1613.775,2043.15);

	this.shape_376 = new cjs.Shape();
	this.shape_376.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],51.7,1001.5,-31.7,-615.5).s().p("AxXuVIAAiEMAivAevIAACEg");
	this.shape_376.setTransform(1494.2,1949.575);

	this.shape_377 = new cjs.Shape();
	this.shape_377.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_377.setTransform(1288.025,1566.875);

	this.shape_378 = new cjs.Shape();
	this.shape_378.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],44.3,858.1,-39.1,-758.9).s().p("EgBVBSeMAAAimeICrBjMAAACmeg");
	this.shape_378.setTransform(1279.625,2104.475);

	this.shape_379 = new cjs.Shape();
	this.shape_379.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,981.9,0,-595.5).s().p("EgBThSeICnhhMAAACmeIinBhg");
	this.shape_379.setTransform(1296.6,2104.6);

	this.shape_380 = new cjs.Shape();
	this.shape_380.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZivICohhIMLG/IinBig");
	this.shape_380.setTransform(1240.4,1978.2);

	this.shape_381 = new cjs.Shape();
	this.shape_381.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],49.3,955.1,-34.1,-662.1).s().p("AhTgRICnhhIAACEIinBhg");
	this.shape_381.setTransform(1279.425,2007.275);

	this.shape_382 = new cjs.Shape();
	this.shape_382.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],50.3,975,-33.1,-642.1).s().p("AmFilIAAh9IMLHAIAACFg");
	this.shape_382.setTransform(1232.025,1989.675);

	this.shape_383 = new cjs.Shape();
	this.shape_383.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZisICohgIMLG4IinBhg");
	this.shape_383.setTransform(1240.4,1655.3);

	this.shape_384 = new cjs.Shape();
	this.shape_384.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],65.9,1277.2,-17.5,-340).s().p("AhTgVICnhhIAACMIinBhg");
	this.shape_384.setTransform(1279.425,1684.35);

	this.shape_385 = new cjs.Shape();
	this.shape_385.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],66.9,1296.8,-16.5,-320.3).s().p("AmFieIAAiEIMLG5IAACMg");
	this.shape_385.setTransform(1232.025,1667.1);

	this.shape_386 = new cjs.Shape();
	this.shape_386.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZisICohhIMLG6IinBhg");
	this.shape_386.setTransform(1240.4,1539.75);

	this.shape_387 = new cjs.Shape();
	this.shape_387.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],71.8,1392.1,-11.6,-224.9).s().p("AhTgVICnhhIAACMIinBhg");
	this.shape_387.setTransform(1279.425,1568.925);

	this.shape_388 = new cjs.Shape();
	this.shape_388.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],72.9,1412,-10.5,-205.1).s().p("AmFifIAAiEIMLG6IAACNg");
	this.shape_388.setTransform(1232.025,1551.6);

	this.shape_389 = new cjs.Shape();
	this.shape_389.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZisICohgIMLG4IinBhg");
	this.shape_389.setTransform(1240.4,1862.25);

	this.shape_390 = new cjs.Shape();
	this.shape_390.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],55.2,1070.7,-28.2,-546.3).s().p("AhTgUICnhhIAACKIinBhg");
	this.shape_390.setTransform(1279.425,1891.3);

	this.shape_391 = new cjs.Shape();
	this.shape_391.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],56.3,1090.3,-27.1,-526.7).s().p("AmFieIAAiEIMLG5IAACMg");
	this.shape_391.setTransform(1232.025,1874.075);

	this.shape_392 = new cjs.Shape();
	this.shape_392.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_392.setTransform(1240.55,2108.75);

	this.shape_393 = new cjs.Shape();
	this.shape_393.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],42.4,821.5,-41,-795.6).s().p("AhUgxICphiIAADEIipBjg");
	this.shape_393.setTransform(1279.575,2141.175);

	this.shape_394 = new cjs.Shape();
	this.shape_394.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],43.4,841.5,-40,-775.6).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_394.setTransform(1232.025,2123.575);

	this.shape_395 = new cjs.Shape();
	this.shape_395.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_395.setTransform(1335.475,2108.75);

	this.shape_396 = new cjs.Shape();
	this.shape_396.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],42.3,820.6,-41.1,-796.4).s().p("AhUAxIAAjEICpBiIAADFg");
	this.shape_396.setTransform(1296.475,2141.175);

	this.shape_397 = new cjs.Shape();
	this.shape_397.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,962.9,0,-614.5).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_397.setTransform(1344,2123.575);

	this.shape_398 = new cjs.Shape();
	this.shape_398.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_398.setTransform(1240.55,2211.45);

	this.shape_399 = new cjs.Shape();
	this.shape_399.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],37.1,719.2,-46.3,-898).s().p("AhUgxICphiIAADFIipBig");
	this.shape_399.setTransform(1279.575,2243.875);

	this.shape_400 = new cjs.Shape();
	this.shape_400.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],38.2,739.1,-45.2,-878).s().p("AmFh+IAAjFIMLHBIAADGg");
	this.shape_400.setTransform(1232.025,2226.3);

	this.shape_401 = new cjs.Shape();
	this.shape_401.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_401.setTransform(1335.475,2211.45);

	this.shape_402 = new cjs.Shape();
	this.shape_402.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],37.1,718.3,-46.3,-898.8).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_402.setTransform(1296.475,2243.875);

	this.shape_403 = new cjs.Shape();
	this.shape_403.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,860.2,0,-717.2).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_403.setTransform(1344,2226.3);

	this.shape_404 = new cjs.Shape();
	this.shape_404.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_404.setTransform(1240.55,2310.675);

	this.shape_405 = new cjs.Shape();
	this.shape_405.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],32,620.2,-51.4,-996.9).s().p("AhUgxICphiIAADFIipBig");
	this.shape_405.setTransform(1279.575,2343.075);

	this.shape_406 = new cjs.Shape();
	this.shape_406.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],33.1,640.1,-50.3,-977).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_406.setTransform(1232.025,2325.5);

	this.shape_407 = new cjs.Shape();
	this.shape_407.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_407.setTransform(1335.475,2310.675);

	this.shape_408 = new cjs.Shape();
	this.shape_408.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],32,619.3,-51.4,-997.8).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_408.setTransform(1296.475,2343.075);

	this.shape_409 = new cjs.Shape();
	this.shape_409.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,761,0,-816.4).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_409.setTransform(1344,2325.5);

	this.shape_410 = new cjs.Shape();
	this.shape_410.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBjg");
	this.shape_410.setTransform(1240.55,2409.9);

	this.shape_411 = new cjs.Shape();
	this.shape_411.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],26.9,521.2,-56.5,-1095.9).s().p("AhUgwICphjIAADFIipBig");
	this.shape_411.setTransform(1279.575,2442.275);

	this.shape_412 = new cjs.Shape();
	this.shape_412.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],28,541.2,-55.4,-1075.9).s().p("AmFh9IAAjGIMLHCIAADFg");
	this.shape_412.setTransform(1232.025,2424.7);

	this.shape_413 = new cjs.Shape();
	this.shape_413.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHCg");
	this.shape_413.setTransform(1335.475,2409.9);

	this.shape_414 = new cjs.Shape();
	this.shape_414.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],26.9,520.4,-56.5,-1096.7).s().p("AhUAyIAAjFICpBjIAADEg");
	this.shape_414.setTransform(1296.475,2442.275);

	this.shape_415 = new cjs.Shape();
	this.shape_415.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,661.8,0,-915.6).s().p("AmFB/IMLnCIAADGIsLHBg");
	this.shape_415.setTransform(1344,2424.7);

	this.shape_416 = new cjs.Shape();
	this.shape_416.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBjg");
	this.shape_416.setTransform(1240.55,2509.1);

	this.shape_417 = new cjs.Shape();
	this.shape_417.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],21.8,422.3,-61.6,-1194.8).s().p("AhUgxICphiIAADEIipBjg");
	this.shape_417.setTransform(1279.575,2541.525);

	this.shape_418 = new cjs.Shape();
	this.shape_418.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],22.9,442.3,-60.5,-1174.8).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_418.setTransform(1232.025,2523.925);

	this.shape_419 = new cjs.Shape();
	this.shape_419.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHCg");
	this.shape_419.setTransform(1335.475,2509.1);

	this.shape_420 = new cjs.Shape();
	this.shape_420.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],21.8,421.4,-61.6,-1195.7).s().p("AhUAxIAAjEICpBiIAADFg");
	this.shape_420.setTransform(1296.475,2541.525);

	this.shape_421 = new cjs.Shape();
	this.shape_421.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,562.6,0,-1014.8).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_421.setTransform(1344,2523.925);

	this.shape_422 = new cjs.Shape();
	this.shape_422.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_422.setTransform(1192.825,1512.775);

	this.shape_423 = new cjs.Shape();
	this.shape_423.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],47.3,917.2,-36.1,-699.9).s().p("EgBVBSdMAAAimcICrBkMAAACmbg");
	this.shape_423.setTransform(1184.425,2050.2);

	this.shape_424 = new cjs.Shape();
	this.shape_424.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1036.1,0,-541.3).s().p("EgBThScICnhhMAAACmaIinBhg");
	this.shape_424.setTransform(1201.4,2050.325);

	this.shape_425 = new cjs.Shape();
	this.shape_425.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_425.setTransform(1382.775,1512.25);

	this.shape_426 = new cjs.Shape();
	this.shape_426.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],46.9,908.6,-36.5,-708.5).s().p("EgBVBSVMAAAimMICrBjMAAACmMg");
	this.shape_426.setTransform(1374.4,2048.975);

	this.shape_427 = new cjs.Shape();
	this.shape_427.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1037.4,0,-540).s().p("EgBThSVICnhhMAAACmMIinBhg");
	this.shape_427.setTransform(1391.375,2049.075);

	this.shape_428 = new cjs.Shape();
	this.shape_428.graphics.f("#ECF5FF").s().p("A5AgGIYluTIZcOhI4lOSg");
	this.shape_428.setTransform(1286.6,2576.35);

	this.shape_429 = new cjs.Shape();
	this.shape_429.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],199.1,544.7,-206.1,-563.8).s().p("Asth7IAAqpIZcOgIAAKpg");
	this.shape_429.setTransform(1207.95,2656.1);

	this.shape_430 = new cjs.Shape();
	this.shape_430.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],254.9,482.2,7.6,14.4).s().p("AsRB0IYjuQIAAKoI4jORg");
	this.shape_430.setTransform(1368.05,2656.875);

	this.shape_431 = new cjs.Shape();
	this.shape_431.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_431.setTransform(1335.95,2454.925);

	this.shape_432 = new cjs.Shape();
	this.shape_432.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],24.3,471.4,-59.1,-1145.8).s().p("AhUgxICphiIAADFIipBig");
	this.shape_432.setTransform(1374.975,2487.325);

	this.shape_433 = new cjs.Shape();
	this.shape_433.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],25.4,491.4,-58,-1125.7).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_433.setTransform(1327.425,2469.75);

	this.shape_434 = new cjs.Shape();
	this.shape_434.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBjIsLHBg");
	this.shape_434.setTransform(1240.875,2454.9);

	this.shape_435 = new cjs.Shape();
	this.shape_435.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],24.8,480.3,-58.6,-1136.9).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_435.setTransform(1201.875,2487.325);

	this.shape_436 = new cjs.Shape();
	this.shape_436.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,616.7,0,-960.7).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_436.setTransform(1249.4,2469.75);

	this.shape_437 = new cjs.Shape();
	this.shape_437.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhjIMLHCIiqBig");
	this.shape_437.setTransform(1335.95,2355.7);

	this.shape_438 = new cjs.Shape();
	this.shape_438.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],29.4,570.4,-54,-1046.8).s().p("AhUgxICphiIAADFIipBig");
	this.shape_438.setTransform(1374.975,2388.125);

	this.shape_439 = new cjs.Shape();
	this.shape_439.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],30.5,590.3,-52.9,-1026.8).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_439.setTransform(1327.425,2370.525);

	this.shape_440 = new cjs.Shape();
	this.shape_440.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnCICqBjIsLHBg");
	this.shape_440.setTransform(1240.875,2355.7);

	this.shape_441 = new cjs.Shape();
	this.shape_441.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],29.9,579.3,-53.5,-1037.8).s().p("AhUAxIAAjEICpBiIAADFg");
	this.shape_441.setTransform(1201.875,2388.1);

	this.shape_442 = new cjs.Shape();
	this.shape_442.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,716,0,-861.4).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_442.setTransform(1249.4,2370.5);

	this.shape_443 = new cjs.Shape();
	this.shape_443.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_443.setTransform(1335.95,2255.425);

	this.shape_444 = new cjs.Shape();
	this.shape_444.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],34.6,670.3,-48.8,-946.6).s().p("AhUgxICphiIAADFIipBig");
	this.shape_444.setTransform(1374.975,2287.825);

	this.shape_445 = new cjs.Shape();
	this.shape_445.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],35.7,690.3,-47.7,-926.8).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_445.setTransform(1327.425,2270.25);

	this.shape_446 = new cjs.Shape();
	this.shape_446.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_446.setTransform(1240.875,2255.425);

	this.shape_447 = new cjs.Shape();
	this.shape_447.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],35.1,679.3,-48.3,-937.8).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_447.setTransform(1201.875,2287.825);

	this.shape_448 = new cjs.Shape();
	this.shape_448.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,816.2,0,-761.2).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_448.setTransform(1249.4,2270.25);

	this.shape_449 = new cjs.Shape();
	this.shape_449.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_449.setTransform(1335.95,2156.825);

	this.shape_450 = new cjs.Shape();
	this.shape_450.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],39.7,768.7,-43.7,-848.4).s().p("AhUgxICphiIAADFIipBig");
	this.shape_450.setTransform(1374.975,2189.225);

	this.shape_451 = new cjs.Shape();
	this.shape_451.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],40.7,788.7,-42.7,-828.4).s().p("AmFh+IAAjFIMLHBIAADGg");
	this.shape_451.setTransform(1327.425,2171.65);

	this.shape_452 = new cjs.Shape();
	this.shape_452.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnCICqBjIsLHBg");
	this.shape_452.setTransform(1240.875,2156.8);

	this.shape_453 = new cjs.Shape();
	this.shape_453.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],40.1,777.6,-43.3,-839.5).s().p("AhUAxIAAjEICpBiIAADFg");
	this.shape_453.setTransform(1201.875,2189.225);

	this.shape_454 = new cjs.Shape();
	this.shape_454.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,914.8,0,-662.6).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_454.setTransform(1249.4,2171.625);

	this.shape_455 = new cjs.Shape();
	this.shape_455.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBjg");
	this.shape_455.setTransform(1335.95,2053.95);

	this.shape_456 = new cjs.Shape();
	this.shape_456.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],44.9,871.2,-38.5,-745.7).s().p("AhUgwICphjIAADFIipBig");
	this.shape_456.setTransform(1374.975,2086.35);

	this.shape_457 = new cjs.Shape();
	this.shape_457.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],46,891.3,-37.4,-725.8).s().p("AmFh9IAAjGIMLHCIAADFg");
	this.shape_457.setTransform(1327.425,2068.75);

	this.shape_458 = new cjs.Shape();
	this.shape_458.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHCg");
	this.shape_458.setTransform(1240.875,2053.95);

	this.shape_459 = new cjs.Shape();
	this.shape_459.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],45.4,880.1,-38,-736.8).s().p("AhUAyIAAjFICpBjIAADEg");
	this.shape_459.setTransform(1201.875,2086.325);

	this.shape_460 = new cjs.Shape();
	this.shape_460.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1017.7,0,-559.7).s().p("AmFB/IMLnCIAADGIsLHBg");
	this.shape_460.setTransform(1249.4,2068.75);

	this.shape_461 = new cjs.Shape();
	this.shape_461.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohgIMFG8IioBig");
	this.shape_461.setTransform(1335.5,1807.5);

	this.shape_462 = new cjs.Shape();
	this.shape_462.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],57.8,1120.2,-25.6,-496.8).s().p("AhTgUICnhiIAACMIinBhg");
	this.shape_462.setTransform(1374.175,1836.8);

	this.shape_463 = new cjs.Shape();
	this.shape_463.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],58.8,1140,-24.6,-477).s().p("AmCihIAAiDIMFG9IAACMg");
	this.shape_463.setTransform(1327.125,1819.35);

	this.shape_464 = new cjs.Shape();
	this.shape_464.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohhIMFG+IioBgg");
	this.shape_464.setTransform(1335.5,1917.8);

	this.shape_465 = new cjs.Shape();
	this.shape_465.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],52,1006.8,-31.4,-610.2).s().p("AhTg2ICnhhIAADOIinBhg");
	this.shape_465.setTransform(1374.175,1950.425);

	this.shape_466 = new cjs.Shape();
	this.shape_466.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],53,1026.7,-30.4,-590.4).s().p("AmCh/IAAjGIMFG9IAADOg");
	this.shape_466.setTransform(1327.125,1932.975);

	this.shape_467 = new cjs.Shape();
	this.shape_467.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1215.3,0,-362.1).s().p("AhTmaICnAuIAAKnIinBgg");
	this.shape_467.setTransform(1118.825,1871.2);

	this.shape_468 = new cjs.Shape();
	this.shape_468.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],57,1101.9,-26.4,-515.1).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_468.setTransform(1103.05,1869.125);

	this.shape_469 = new cjs.Shape();
	this.shape_469.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1247.9,0,-329.4).s().p("AhTkoICnAuIAAHCIinBig");
	this.shape_469.setTransform(1042.25,1838.45);

	this.shape_470 = new cjs.Shape();
	this.shape_470.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],58.8,1138.5,-24.6,-478.5).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_470.setTransform(1026.475,1836.375);

	this.shape_471 = new cjs.Shape();
	this.shape_471.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1276.2,0,-301.3).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_471.setTransform(976.625,1810.325);

	this.shape_472 = new cjs.Shape();
	this.shape_472.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],60.5,1169.9,-22.9,-447.2).s().p("AhJCHIAAljICTApIAAGPg");
	this.shape_472.setTransform(960.85,1808.3);

	this.shape_473 = new cjs.Shape();
	this.shape_473.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_473.setTransform(1073.025,1881.075);

	this.shape_474 = new cjs.Shape();
	this.shape_474.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1134.7,0,-442.7).s().p("AhTgRICnhhIAACDIinBig");
	this.shape_474.setTransform(1184.225,1951.8);

	this.shape_475 = new cjs.Shape();
	this.shape_475.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],55.8,1080.6,-27.6,-536.5).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_475.setTransform(1064.65,1892.525);

	this.shape_476 = new cjs.Shape();
	this.shape_476.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_476.setTransform(1073.025,1799.275);

	this.shape_477 = new cjs.Shape();
	this.shape_477.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1249.4,0,-327.8).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_477.setTransform(1184.225,1836.875);

	this.shape_478 = new cjs.Shape();
	this.shape_478.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],60,1162.2,-23.4,-454.9).s().p("AxXj0IAAiDMAivAJsIAACDg");
	this.shape_478.setTransform(1064.65,1810.7);

	this.shape_479 = new cjs.Shape();
	this.shape_479.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncDLIMRnEICoAvIsSHEg");
	this.shape_479.setTransform(1017.925,1743.075);

	this.shape_480 = new cjs.Shape();
	this.shape_480.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1311.7,0,-265.8).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_480.setTransform(978.575,1774.825);

	this.shape_481 = new cjs.Shape();
	this.shape_481.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1334.5,0,-242.9).s().p("AmJCgIMTnEIAACFIsTHEg");
	this.shape_481.setTransform(1026.3,1751.925);

	this.shape_482 = new cjs.Shape();
	this.shape_482.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1270.2,0,-307.2).s().p("AhTmaICnAuIAAKmIinBhg");
	this.shape_482.setTransform(1214.225,1816.2);

	this.shape_483 = new cjs.Shape();
	this.shape_483.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],59.6,1151.8,-23.8,-465.3).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_483.setTransform(1198.45,1814.125);

	this.shape_484 = new cjs.Shape();
	this.shape_484.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1303,0,-274.4).s().p("AhTkpICnAvIAAHDIinBhg");
	this.shape_484.setTransform(1137.675,1783.45);

	this.shape_485 = new cjs.Shape();
	this.shape_485.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],61.4,1188.4,-22,-428.6).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_485.setTransform(1121.9,1781.375);

	this.shape_486 = new cjs.Shape();
	this.shape_486.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1331.1,0,-246.3).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_486.setTransform(1072.025,1755.325);

	this.shape_487 = new cjs.Shape();
	this.shape_487.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],63.1,1219.9,-20.3,-397.2).s().p("AhJCHIAAljICTApIAAGPg");
	this.shape_487.setTransform(1056.25,1753.3);

	this.shape_488 = new cjs.Shape();
	this.shape_488.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_488.setTransform(1168.45,1826.075);

	this.shape_489 = new cjs.Shape();
	this.shape_489.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1189.7,0,-387.7).s().p("AhTgRICnhhIAACDIinBig");
	this.shape_489.setTransform(1279.65,1896.8);

	this.shape_490 = new cjs.Shape();
	this.shape_490.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],58.4,1130.5,-25,-486.6).s().p("AxXo+IAAiEMAivAUBIAACEg");
	this.shape_490.setTransform(1160.05,1837.525);

	this.shape_491 = new cjs.Shape();
	this.shape_491.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_491.setTransform(1168.45,1744.275);

	this.shape_492 = new cjs.Shape();
	this.shape_492.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1304.6,0,-272.8).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_492.setTransform(1279.65,1781.875);

	this.shape_493 = new cjs.Shape();
	this.shape_493.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],62.6,1212.1,-20.8,-404.9).s().p("AxXj0IAAiDMAivAJrIAACEg");
	this.shape_493.setTransform(1160.05,1755.7);

	this.shape_494 = new cjs.Shape();
	this.shape_494.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohhIMFG+IioBhg");
	this.shape_494.setTransform(1335.5,1484.95);

	this.shape_495 = new cjs.Shape();
	this.shape_495.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],74.4,1442,-9,-175.2).s().p("AhTgUICnhhIAACKIinBhg");
	this.shape_495.setTransform(1374.175,1514.3);

	this.shape_496 = new cjs.Shape();
	this.shape_496.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],75.4,1461.8,-8,-155.3).s().p("AmCihIAAiEIMFG/IAACLg");
	this.shape_496.setTransform(1327.125,1496.8);

	this.shape_497 = new cjs.Shape();
	this.shape_497.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_497.setTransform(1288.225,1457.7);

	this.shape_498 = new cjs.Shape();
	this.shape_498.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],49.9,967.9,-33.5,-649.2).s().p("EgBVBSUMAAAimLICrBjMAAACmMg");
	this.shape_498.setTransform(1279.825,1994.375);

	this.shape_499 = new cjs.Shape();
	this.shape_499.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1092,0,-485.4).s().p("EgBThSVICnhhMAAACmMIinBhg");
	this.shape_499.setTransform(1296.8,1994.475);

	this.shape_500 = new cjs.Shape();
	this.shape_500.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1537.6,0,-39.8).s().p("AhTmbICnAvIAAKnIinBhg");
	this.shape_500.setTransform(1118.825,1548.85);

	this.shape_501 = new cjs.Shape();
	this.shape_501.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],73.6,1423.4,-9.8,-193.6).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_501.setTransform(1103.05,1546.775);

	this.shape_502 = new cjs.Shape();
	this.shape_502.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1570.3,0,-7).s().p("AhTkpICnAvIAAHCIinBig");
	this.shape_502.setTransform(1042.25,1516.075);

	this.shape_503 = new cjs.Shape();
	this.shape_503.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],75.4,1460,-8,-157.1).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_503.setTransform(1026.475,1514.025);

	this.shape_504 = new cjs.Shape();
	this.shape_504.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1598.6,0,21.1).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_504.setTransform(976.625,1487.975);

	this.shape_505 = new cjs.Shape();
	this.shape_505.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],77.1,1491.5,-6.3,-125.7).s().p("AhJCHIAAliICTAoIAAGQg");
	this.shape_505.setTransform(960.85,1485.95);

	this.shape_506 = new cjs.Shape();
	this.shape_506.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_506.setTransform(1073.025,1558.725);

	this.shape_507 = new cjs.Shape();
	this.shape_507.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1457,0,-120.4).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_507.setTransform(1184.225,1629.425);

	this.shape_508 = new cjs.Shape();
	this.shape_508.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],72.3,1402.1,-11.1,-215).s().p("AxXo+IAAiEMAivAUBIAACEg");
	this.shape_508.setTransform(1064.65,1570.15);

	this.shape_509 = new cjs.Shape();
	this.shape_509.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_509.setTransform(1073.025,1476.875);

	this.shape_510 = new cjs.Shape();
	this.shape_510.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1572,0,-5.4).s().p("AhTgRICnhgIAACCIinBhg");
	this.shape_510.setTransform(1184.225,1514.5);

	this.shape_511 = new cjs.Shape();
	this.shape_511.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],76.6,1483.7,-6.8,-133.4).s().p("AxXjzIAAiEMAivAJrIAACEg");
	this.shape_511.setTransform(1064.65,1488.325);

	this.shape_512 = new cjs.Shape();
	this.shape_512.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncDLIMRnEICoAvIsSHEg");
	this.shape_512.setTransform(1017.925,1420.7);

	this.shape_513 = new cjs.Shape();
	this.shape_513.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1634,0,56.6).s().p("AhTASIAAiEICnBiIAACDg");
	this.shape_513.setTransform(978.575,1452.45);

	this.shape_514 = new cjs.Shape();
	this.shape_514.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1656.9,0,79.5).s().p("AmJCgIMTnEIAACFIsTHEg");
	this.shape_514.setTransform(1026.3,1429.525);

	this.shape_515 = new cjs.Shape();
	this.shape_515.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1592.8,0,15.4).s().p("AhTmbICnAvIAAKmIinBig");
	this.shape_515.setTransform(1214.225,1493.7);

	this.shape_516 = new cjs.Shape();
	this.shape_516.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],76.2,1473.4,-7.2,-143.7).s().p("AhJFbIAAsLICTApIAAM4g");
	this.shape_516.setTransform(1198.45,1491.725);

	this.shape_517 = new cjs.Shape();
	this.shape_517.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1625.4,0,48).s().p("AhTkpICnAuIAAHEIinBhg");
	this.shape_517.setTransform(1137.675,1461.05);

	this.shape_518 = new cjs.Shape();
	this.shape_518.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],78,1510.1,-5.4,-107.1).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_518.setTransform(1121.9,1458.95);

	this.shape_519 = new cjs.Shape();
	this.shape_519.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1653.4,0,76.1).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_519.setTransform(1072.025,1432.975);

	this.shape_520 = new cjs.Shape();
	this.shape_520.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],79.7,1541.4,-3.7,-75.7).s().p("AhJCHIAAljICTApIAAGPg");
	this.shape_520.setTransform(1056.25,1430.95);

	this.shape_521 = new cjs.Shape();
	this.shape_521.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_521.setTransform(1168.45,1503.725);

	this.shape_522 = new cjs.Shape();
	this.shape_522.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1512,0,-65.4).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_522.setTransform(1279.65,1574.425);

	this.shape_523 = new cjs.Shape();
	this.shape_523.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],74.9,1452,-8.5,-165.1).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_523.setTransform(1160.05,1515.15);

	this.shape_524 = new cjs.Shape();
	this.shape_524.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkEICohhMAivAJqIioBhg");
	this.shape_524.setTransform(1168.425,1421.8);

	this.shape_525 = new cjs.Shape();
	this.shape_525.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1627.1,0,49.7).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_525.setTransform(1279.625,1459.325);

	this.shape_526 = new cjs.Shape();
	this.shape_526.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],79.1,1533.7,-4.3,-83.3).s().p("AxXjyIAAiEMAivAJqIAACDg");
	this.shape_526.setTransform(1160.05,1433.225);

	this.shape_527 = new cjs.Shape();
	this.shape_527.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-39.1,0,39.2,0).s().p("AmGBQIJmljICnBhIsNHGg");
	this.shape_527.setTransform(1248.925,1600.8);

	this.shape_528 = new cjs.Shape();
	this.shape_528.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1477.6,0,-99.7).s().p("AmJDCIMTnEIAACEIqfGBg");
	this.shape_528.setTransform(1248.675,1608.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_528},{t:this.shape_527},{t:this.shape_526},{t:this.shape_525},{t:this.shape_524},{t:this.shape_523},{t:this.shape_522},{t:this.shape_521},{t:this.shape_520},{t:this.shape_519},{t:this.shape_518},{t:this.shape_517},{t:this.shape_516},{t:this.shape_515},{t:this.shape_514},{t:this.shape_513},{t:this.shape_512},{t:this.shape_511},{t:this.shape_510},{t:this.shape_509},{t:this.shape_508},{t:this.shape_507},{t:this.shape_506},{t:this.shape_505},{t:this.shape_504},{t:this.shape_503},{t:this.shape_502},{t:this.shape_501},{t:this.shape_500},{t:this.shape_499},{t:this.shape_498},{t:this.shape_497},{t:this.shape_496},{t:this.shape_495},{t:this.shape_494},{t:this.shape_493},{t:this.shape_492},{t:this.shape_491},{t:this.shape_490},{t:this.shape_489},{t:this.shape_488},{t:this.shape_487},{t:this.shape_486},{t:this.shape_485},{t:this.shape_484},{t:this.shape_483},{t:this.shape_482},{t:this.shape_481},{t:this.shape_480},{t:this.shape_479},{t:this.shape_478},{t:this.shape_477},{t:this.shape_476},{t:this.shape_475},{t:this.shape_474},{t:this.shape_473},{t:this.shape_472},{t:this.shape_471},{t:this.shape_470},{t:this.shape_469},{t:this.shape_468},{t:this.shape_467},{t:this.shape_466},{t:this.shape_465},{t:this.shape_464},{t:this.shape_463},{t:this.shape_462},{t:this.shape_461},{t:this.shape_460},{t:this.shape_459},{t:this.shape_458},{t:this.shape_457},{t:this.shape_456},{t:this.shape_455},{t:this.shape_454},{t:this.shape_453},{t:this.shape_452},{t:this.shape_451},{t:this.shape_450},{t:this.shape_449},{t:this.shape_448},{t:this.shape_447},{t:this.shape_446},{t:this.shape_445},{t:this.shape_444},{t:this.shape_443},{t:this.shape_442},{t:this.shape_441},{t:this.shape_440},{t:this.shape_439},{t:this.shape_438},{t:this.shape_437},{t:this.shape_436},{t:this.shape_435},{t:this.shape_434},{t:this.shape_433},{t:this.shape_432},{t:this.shape_431},{t:this.shape_430},{t:this.shape_429},{t:this.shape_428},{t:this.shape_427},{t:this.shape_426},{t:this.shape_425},{t:this.shape_424},{t:this.shape_423},{t:this.shape_422},{t:this.shape_421},{t:this.shape_420},{t:this.shape_419},{t:this.shape_418},{t:this.shape_417},{t:this.shape_416},{t:this.shape_415},{t:this.shape_414},{t:this.shape_413},{t:this.shape_412},{t:this.shape_411},{t:this.shape_410},{t:this.shape_409},{t:this.shape_408},{t:this.shape_407},{t:this.shape_406},{t:this.shape_405},{t:this.shape_404},{t:this.shape_403},{t:this.shape_402},{t:this.shape_401},{t:this.shape_400},{t:this.shape_399},{t:this.shape_398},{t:this.shape_397},{t:this.shape_396},{t:this.shape_395},{t:this.shape_394},{t:this.shape_393},{t:this.shape_392},{t:this.shape_391},{t:this.shape_390},{t:this.shape_389},{t:this.shape_388},{t:this.shape_387},{t:this.shape_386},{t:this.shape_385},{t:this.shape_384},{t:this.shape_383},{t:this.shape_382},{t:this.shape_381},{t:this.shape_380},{t:this.shape_379},{t:this.shape_378},{t:this.shape_377},{t:this.shape_376},{t:this.shape_375},{t:this.shape_374},{t:this.shape_373},{t:this.shape_372},{t:this.shape_371},{t:this.shape_370},{t:this.shape_369},{t:this.shape_368},{t:this.shape_367},{t:this.shape_366},{t:this.shape_365},{t:this.shape_364},{t:this.shape_363},{t:this.shape_362},{t:this.shape_361},{t:this.shape_360},{t:this.shape_359},{t:this.shape_358},{t:this.shape_357},{t:this.shape_356},{t:this.shape_355},{t:this.shape_354},{t:this.shape_353},{t:this.shape_352},{t:this.shape_351},{t:this.shape_350},{t:this.shape_349},{t:this.shape_348},{t:this.shape_347},{t:this.shape_346},{t:this.shape_345},{t:this.shape_344},{t:this.shape_343},{t:this.shape_342},{t:this.shape_341},{t:this.shape_340},{t:this.shape_339},{t:this.shape_338},{t:this.shape_337},{t:this.shape_336},{t:this.shape_335},{t:this.shape_334},{t:this.shape_333},{t:this.shape_332},{t:this.shape_331},{t:this.shape_330},{t:this.shape_329},{t:this.shape_328},{t:this.shape_327},{t:this.shape_326},{t:this.shape_325},{t:this.shape_324},{t:this.shape_323},{t:this.shape_322},{t:this.shape_321},{t:this.shape_320},{t:this.shape_319},{t:this.shape_318},{t:this.shape_317},{t:this.shape_316},{t:this.shape_315},{t:this.shape_314},{t:this.shape_313},{t:this.shape_312},{t:this.shape_311},{t:this.shape_310},{t:this.shape_309}]}).wait(40));

	// electric_lines2
	this.shape_529 = new cjs.Shape();
	this.shape_529.graphics.f("#9C5984").s().p("Eg+IAifQaJnTZCsrQUDqKSetIQNPpaLIqAQDhjKC4i2ICTiUIBiBbIiPCRQi4C2jeDKQrHKCtJJZQx4Myz0KKQ6ENY7IHkg");
	this.shape_529.setTransform(692.325,1792.425);

	this.shape_530 = new cjs.Shape();
	this.shape_530.graphics.f("#9C5984").s().p("Eg+IAifQaKnTZCssQUDqKSetHQNOpbLIp/QDhjKC4i2ICTiUIBiBbIiPCRQi4C2jfDKQrGKCtJJZQx4Mxz0KLQ6ENY7IHkg");
	this.shape_530.setTransform(579.425,1746.325);

	this.shape_531 = new cjs.Shape();
	this.shape_531.graphics.f("#9C5984").s().p("Eg+IAifQaJnTZCssQUDqKSetHQNPpbLIp/QDhjKC4i1ICTiVIBiBaIiPCSQi3C2jgDJQrGKEtJJYQx4Myz0KKQ6ENX7IHlg");
	this.shape_531.setTransform(579.425,2072.65);

	this.shape_532 = new cjs.Shape();
	this.shape_532.graphics.f("#9C5984").s().p("Eg+IAifQaKnTZCssQUDqKSetHQNOpbLIp/QDhjKC4i2ICTiUIBiBbIiPCRQi4C2jeDKQrHKCtJJZQx4Myz0KKQ6ENY7IHkg");
	this.shape_532.setTransform(692.325,2118.775);

	this.shape_533 = new cjs.Shape();
	this.shape_533.graphics.f("#9C5984").s().p("Eg9kAhvQXympW5rGQS3pLRpr1QNbpCL0p/QHbmRFcldIB4BFQkdEimLFZQp3IlrOICQx4Mxz0KKQ6FNZ7HHkg");
	this.shape_533.setTransform(1788.325,1514.65);

	this.shape_534 = new cjs.Shape();
	this.shape_534.graphics.f("#9C5984").s().p("Eg8CAgPUAodgLTAlBgXtQNUoiMDppQIcmwG6mjIB6BGQlDE2mDFFQoXHCpMGkQx4Mxz0KKQ6ENY7HHlg");
	this.shape_534.setTransform(1922.8,1576.825);

	this.shape_535 = new cjs.Shape();
	this.shape_535.graphics.f("#9C5984").s().p("Eg8OAgbUAoxgLZAlRgX/QNWomMDpsQIXmvGxmdIB6BGQlEE4mDFHQoiHNpYGtQx4Mxz0KKQ6ENY7IHkg");
	this.shape_535.setTransform(1924.05,1901.95);

	this.shape_536 = new cjs.Shape();
	this.shape_536.graphics.f("#9C5984").s().p("Eg9wAh7QYImvXNrVQTDpURxsCQNbpGLwqBQHMmIFJlNIB4BFQkSEZmFFWQqII5rmITQx4Mwz0KLQ6ENY7IHkg");
	this.shape_536.setTransform(1789.525,1839.75);

	this.shape_537 = new cjs.Shape();
	this.shape_537.graphics.f("#9C5984").s().p("Eg+IAifQaJnTZCsrQUDqKSetIQNPpaLIqAQFmlBDGjTIBiBbQjBDPlkFCQrHKCtJJZQx4Mxz0KLQ6FNY7HHkg");
	this.shape_537.setTransform(1382.825,1606.825);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_537},{t:this.shape_536},{t:this.shape_535},{t:this.shape_534},{t:this.shape_533},{t:this.shape_532},{t:this.shape_531},{t:this.shape_530},{t:this.shape_529}]}).wait(40));

	// tower1
	this.shape_538 = new cjs.Shape();
	this.shape_538.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],87.3,1694.4,3.9,77.3).s().p("AhJGFIAAtfICTCDIAAMyg");
	this.shape_538.setTransform(2155.45,1220.8);

	this.shape_539 = new cjs.Shape();
	this.shape_539.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1859.1,0,281.7).s().p("AhTmZICnCVIAAI9IinBhg");
	this.shape_539.setTransform(2171.225,1227.325);

	this.shape_540 = new cjs.Shape();
	this.shape_540.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],83.6,1623.8,0.2,6.7).s().p("AhJD6IAApJICTCDIAAIcg");
	this.shape_540.setTransform(2245.925,1286.9);

	this.shape_541 = new cjs.Shape();
	this.shape_541.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],81.1,1574.9,-2.3,-42.2).s().p("AhJCaIAAmIICTCDIAAFag");
	this.shape_541.setTransform(2308.625,1332.75);

	this.shape_542 = new cjs.Shape();
	this.shape_542.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1793,0,215.6).s().p("AhTkOICnCWIAAElIinBhg");
	this.shape_542.setTransform(2261.7,1293.45);

	this.shape_543 = new cjs.Shape();
	this.shape_543.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1752,0,174.6).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_543.setTransform(2324.4,1334.45);

	this.shape_544 = new cjs.Shape();
	this.shape_544.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICnhhMAiwAUCIioBhg");
	this.shape_544.setTransform(2213.2,1287.65);

	this.shape_545 = new cjs.Shape();
	this.shape_545.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1728.1,0,150.7).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_545.setTransform(2324.4,1358.375);

	this.shape_546 = new cjs.Shape();
	this.shape_546.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],83.3,1613.7,-0.1,-3.3).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_546.setTransform(2204.8,1299.075);

	this.shape_547 = new cjs.Shape();
	this.shape_547.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICnhhMAiwAewIioBhg");
	this.shape_547.setTransform(2213.2,1205.525);

	this.shape_548 = new cjs.Shape();
	this.shape_548.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1775.9,0,198.5).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_548.setTransform(2324.4,1310.525);

	this.shape_549 = new cjs.Shape();
	this.shape_549.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],87.5,1695.7,4.1,78.6).s().p("AxXuWIAAiDMAivAevIAACEg");
	this.shape_549.setTransform(2204.8,1216.95);

	this.shape_550 = new cjs.Shape();
	this.shape_550.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.6,0,47.6,0).s().p("AnbCuIMPm+ICoBhIsLHAg");
	this.shape_550.setTransform(2140.825,1075);

	this.shape_551 = new cjs.Shape();
	this.shape_551.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2000,0,422.6).s().p("AmFCfIMLnAIAACDIsLHAg");
	this.shape_551.setTransform(2149.425,1086.425);

	this.shape_552 = new cjs.Shape();
	this.shape_552.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCXIMMnAICnCSIsLHBg");
	this.shape_552.setTransform(2363.4,1269.375);

	this.shape_553 = new cjs.Shape();
	this.shape_553.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1785.7,0,208.3).s().p("AhTARIAAiDICnBiIAACDg");
	this.shape_553.setTransform(2324.4,1300.8);

	this.shape_554 = new cjs.Shape();
	this.shape_554.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1803.2,0,225.8).s().p("AmFCeIMLm/IAACDIsLHAg");
	this.shape_554.setTransform(2371.8,1283.225);

	this.shape_555 = new cjs.Shape();
	this.shape_555.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCwIMMnAICnBhIsLHAg");
	this.shape_555.setTransform(2363.4,1319.825);

	this.shape_556 = new cjs.Shape();
	this.shape_556.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1737.4,0,160.2).s().p("AhTASIAAiDICnBhIAACCg");
	this.shape_556.setTransform(2324.4,1348.85);

	this.shape_557 = new cjs.Shape();
	this.shape_557.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1755.1,0,177.7).s().p("AmFCeIMLm/IAACDIsLHAg");
	this.shape_557.setTransform(2371.8,1331.275);

	this.shape_558 = new cjs.Shape();
	this.shape_558.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],89.9,1743.8,6.5,126.8).s().p("AhJGGIAAtgICTCDIAAMyg");
	this.shape_558.setTransform(2250.2,1166.25);

	this.shape_559 = new cjs.Shape();
	this.shape_559.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1913.6,0,336.3).s().p("AhTmZICnCVIAAI8IinBhg");
	this.shape_559.setTransform(2265.975,1172.8);

	this.shape_560 = new cjs.Shape();
	this.shape_560.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],86.2,1673.3,2.8,56.2).s().p("AhJD6IAApJICTCDIAAIcg");
	this.shape_560.setTransform(2340.7,1232.35);

	this.shape_561 = new cjs.Shape();
	this.shape_561.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],83.7,1624.3,0.3,7.3).s().p("AhJCZIAAmHICTCDIAAFag");
	this.shape_561.setTransform(2403.4,1278.225);

	this.shape_562 = new cjs.Shape();
	this.shape_562.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1847.6,0,270.2).s().p("AhTkOICnCWIAAElIinBhg");
	this.shape_562.setTransform(2356.475,1238.9);

	this.shape_563 = new cjs.Shape();
	this.shape_563.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1806.5,0,229.1).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_563.setTransform(2419.175,1279.925);

	this.shape_564 = new cjs.Shape();
	this.shape_564.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_564.setTransform(2307.975,1233.125);

	this.shape_565 = new cjs.Shape();
	this.shape_565.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1782.4,0,205.2).s().p("AhTgQICnhhIAACDIinBgg");
	this.shape_565.setTransform(2419.175,1303.85);

	this.shape_566 = new cjs.Shape();
	this.shape_566.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],85.8,1663.2,2.4,46.2).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_566.setTransform(2299.6,1244.575);

	this.shape_567 = new cjs.Shape();
	this.shape_567.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICohhMAivAewIioBhg");
	this.shape_567.setTransform(2307.975,1150.975);

	this.shape_568 = new cjs.Shape();
	this.shape_568.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1830.5,0,253.1).s().p("AhTgRICnhhIAACEIinBhg");
	this.shape_568.setTransform(2419.175,1256);

	this.shape_569 = new cjs.Shape();
	this.shape_569.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],90,1745.2,6.6,128.1).s().p("AxXuVIAAiEMAivAevIAACEg");
	this.shape_569.setTransform(2299.6,1162.425);

	this.shape_570 = new cjs.Shape();
	this.shape_570.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],70.7,1372.8,-12.7,-244.3).s().p("AhJGGIAAtgICTCDIAAMyg");
	this.shape_570.setTransform(2155.45,1543.3);

	this.shape_571 = new cjs.Shape();
	this.shape_571.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1536.6,0,-40.8).s().p("AhTmYICnCTIAAI+IinBhg");
	this.shape_571.setTransform(2171.225,1549.85);

	this.shape_572 = new cjs.Shape();
	this.shape_572.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],67.1,1302.2,-16.3,-314.9).s().p("AhJD6IAApJICTCDIAAIcg");
	this.shape_572.setTransform(2245.925,1609.4);

	this.shape_573 = new cjs.Shape();
	this.shape_573.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],64.5,1253.2,-18.9,-363.9).s().p("AhJCZIAAmHICTCDIAAFag");
	this.shape_573.setTransform(2308.625,1655.25);

	this.shape_574 = new cjs.Shape();
	this.shape_574.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1470.5,0,-106.9).s().p("AhTkOICnCVIAAEnIinBhg");
	this.shape_574.setTransform(2261.7,1615.95);

	this.shape_575 = new cjs.Shape();
	this.shape_575.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1429.5,0,-147.9).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_575.setTransform(2324.4,1656.95);

	this.shape_576 = new cjs.Shape();
	this.shape_576.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICnhhMAiwAUCIioBhg");
	this.shape_576.setTransform(2213.2,1610.15);

	this.shape_577 = new cjs.Shape();
	this.shape_577.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1405.6,0,-171.8).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_577.setTransform(2324.4,1680.875);

	this.shape_578 = new cjs.Shape();
	this.shape_578.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],66.7,1292.1,-16.7,-325).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_578.setTransform(2204.8,1621.6);

	this.shape_579 = new cjs.Shape();
	this.shape_579.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrunICnhhMAiwAewIioBhg");
	this.shape_579.setTransform(2213.2,1528.025);

	this.shape_580 = new cjs.Shape();
	this.shape_580.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1453.2,0,-124).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_580.setTransform(2324.4,1633.025);

	this.shape_581 = new cjs.Shape();
	this.shape_581.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],70.9,1374,-12.5,-243).s().p("AxXuWIAAiDMAivAewIAACDg");
	this.shape_581.setTransform(2204.8,1539.45);

	this.shape_582 = new cjs.Shape();
	this.shape_582.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncCzIMRnGICoBhIsNHGg");
	this.shape_582.setTransform(2045.725,1020.55);

	this.shape_583 = new cjs.Shape();
	this.shape_583.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2057.9,0,480.5).s().p("AmJDBIMTnDIAACEIqfGBg");
	this.shape_583.setTransform(2054.075,1028.55);

	this.shape_584 = new cjs.Shape();
	this.shape_584.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-39.1,0,39.2,0).s().p("AmGBQIJlljICoBhIsNHGg");
	this.shape_584.setTransform(2054.325,1343.1);

	this.shape_585 = new cjs.Shape();
	this.shape_585.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1735.3,0,158).s().p("AmJDBIMTnDIAACDIqfGCg");
	this.shape_585.setTransform(2054.075,1351.1);

	this.shape_586 = new cjs.Shape();
	this.shape_586.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCwIMLnAICoBhIsLHAg");
	this.shape_586.setTransform(2141.05,1397.5);

	this.shape_587 = new cjs.Shape();
	this.shape_587.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1677.5,0,100.1).s().p("AmFCfIMLnAIAACDIsLHAg");
	this.shape_587.setTransform(2149.425,1408.925);

	this.shape_588 = new cjs.Shape();
	this.shape_588.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCWIMMm/ICnCSIsLHBg");
	this.shape_588.setTransform(2363.4,1591.775);

	this.shape_589 = new cjs.Shape();
	this.shape_589.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1463.3,0,-114.1).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_589.setTransform(2324.4,1623.175);

	this.shape_590 = new cjs.Shape();
	this.shape_590.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1480.8,0,-96.6).s().p("AmFCfIMLnAIAACEIsLG/g");
	this.shape_590.setTransform(2371.8,1605.575);

	this.shape_591 = new cjs.Shape();
	this.shape_591.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZCwIMMnAICnBhIsLHAg");
	this.shape_591.setTransform(2363.4,1642.2);

	this.shape_592 = new cjs.Shape();
	this.shape_592.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1415.2,0,-162.2).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_592.setTransform(2324.4,1671.225);

	this.shape_593 = new cjs.Shape();
	this.shape_593.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1432.9,0,-144.6).s().p("AmFCfIMLnAIAACEIsLG/g");
	this.shape_593.setTransform(2371.8,1653.625);

	this.shape_594 = new cjs.Shape();
	this.shape_594.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],73.3,1422.2,-10.1,-194.9).s().p("AhJGGIAAtgICTCDIAAMyg");
	this.shape_594.setTransform(2250.2,1488.775);

	this.shape_595 = new cjs.Shape();
	this.shape_595.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1591.1,0,13.7).s().p("AhTmZICnCVIAAI8IinBig");
	this.shape_595.setTransform(2265.975,1495.325);

	this.shape_596 = new cjs.Shape();
	this.shape_596.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],69.6,1351.7,-13.8,-265.4).s().p("AhJD7IAApKICTCDIAAIcg");
	this.shape_596.setTransform(2340.7,1554.875);

	this.shape_597 = new cjs.Shape();
	this.shape_597.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],67.1,1302.7,-16.3,-314.4).s().p("AhJCaIAAmIICTCDIAAFag");
	this.shape_597.setTransform(2403.4,1600.725);

	this.shape_598 = new cjs.Shape();
	this.shape_598.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1525.1,0,-52.3).s().p("AhTkOICnCWIAAEmIinBgg");
	this.shape_598.setTransform(2356.475,1561.4);

	this.shape_599 = new cjs.Shape();
	this.shape_599.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1484,0,-93.4).s().p("AhTh8ICnhhIAAFaIinBhg");
	this.shape_599.setTransform(2419.175,1602.425);

	this.shape_600 = new cjs.Shape();
	this.shape_600.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_600.setTransform(2307.975,1555.625);

	this.shape_601 = new cjs.Shape();
	this.shape_601.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1460.1,0,-117.3).s().p("AhTgRICnhhIAACDIinBig");
	this.shape_601.setTransform(2419.175,1626.35);

	this.shape_602 = new cjs.Shape();
	this.shape_602.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],69.2,1341.6,-14.2,-275.5).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_602.setTransform(2299.6,1567.075);

	this.shape_603 = new cjs.Shape();
	this.shape_603.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrumICohiMAivAewIioBhg");
	this.shape_603.setTransform(2307.975,1473.5);

	this.shape_604 = new cjs.Shape();
	this.shape_604.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1508,0,-69.4).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_604.setTransform(2419.175,1578.5);

	this.shape_605 = new cjs.Shape();
	this.shape_605.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],73.4,1423.5,-10,-193.6).s().p("AxXuVIAAiEMAivAevIAACEg");
	this.shape_605.setTransform(2299.6,1484.95);

	this.shape_606 = new cjs.Shape();
	this.shape_606.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AioAAICnhhICqBiIinBhg");
	this.shape_606.setTransform(2093.4,1102.225);

	this.shape_607 = new cjs.Shape();
	this.shape_607.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],66,1280.1,-17.4,-337).s().p("EgBVBSeMAAAimeICrBjMAAACmeg");
	this.shape_607.setTransform(2085.025,1639.825);

	this.shape_608 = new cjs.Shape();
	this.shape_608.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1446.5,0,-130.9).s().p("EgBThSeICnhhMAAACmeIinBhg");
	this.shape_608.setTransform(2101.975,1639.95);

	this.shape_609 = new cjs.Shape();
	this.shape_609.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZiwICohgIMLG/IinBhg");
	this.shape_609.setTransform(2045.8,1513.55);

	this.shape_610 = new cjs.Shape();
	this.shape_610.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],71,1377,-12.4,-240.1).s().p("AhTgRICnhhIAACEIinBhg");
	this.shape_610.setTransform(2084.825,1542.625);

	this.shape_611 = new cjs.Shape();
	this.shape_611.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],72.1,1397,-11.3,-220.1).s().p("AmFilIAAh9IMLHAIAACFg");
	this.shape_611.setTransform(2037.425,1525.025);

	this.shape_612 = new cjs.Shape();
	this.shape_612.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZirICohhIMLG4IinBhg");
	this.shape_612.setTransform(2045.8,1190.65);

	this.shape_613 = new cjs.Shape();
	this.shape_613.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],87.6,1699,4.2,82).s().p("AhTgVICnhhIAACLIinBig");
	this.shape_613.setTransform(2084.825,1219.7);

	this.shape_614 = new cjs.Shape();
	this.shape_614.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],88.7,1718.7,5.3,101.6).s().p("AmFieIAAiEIMLG5IAACMg");
	this.shape_614.setTransform(2037.425,1202.475);

	this.shape_615 = new cjs.Shape();
	this.shape_615.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZisICohhIMLG6IinBhg");
	this.shape_615.setTransform(2045.8,1075.1);

	this.shape_616 = new cjs.Shape();
	this.shape_616.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],93.6,1814.1,10.2,197.1).s().p("AhTgVICnhhIAACMIinBhg");
	this.shape_616.setTransform(2084.825,1104.275);

	this.shape_617 = new cjs.Shape();
	this.shape_617.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],94.6,1833.8,11.2,216.8).s().p("AmFifIAAiEIMLG6IAACNg");
	this.shape_617.setTransform(2037.425,1086.95);

	this.shape_618 = new cjs.Shape();
	this.shape_618.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.4,0,47.4,0).s().p("AnZisICohgIMLG4IinBhg");
	this.shape_618.setTransform(2045.8,1397.6);

	this.shape_619 = new cjs.Shape();
	this.shape_619.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],77,1492.8,-6.4,-124.4).s().p("AhTgVICnhhIAACLIinBig");
	this.shape_619.setTransform(2084.825,1426.675);

	this.shape_620 = new cjs.Shape();
	this.shape_620.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],78,1512.3,-5.4,-104.8).s().p("AmFifIAAiDIMLG5IAACMg");
	this.shape_620.setTransform(2037.425,1409.45);

	this.shape_621 = new cjs.Shape();
	this.shape_621.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbiuICrhjIMLHBIiqBjg");
	this.shape_621.setTransform(2045.95,1644.1);

	this.shape_622 = new cjs.Shape();
	this.shape_622.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],64.1,1243.3,-19.3,-373.5).s().p("AhUgxICphiIAADFIipBig");
	this.shape_622.setTransform(2084.975,1676.525);

	this.shape_623 = new cjs.Shape();
	this.shape_623.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],65.2,1263.4,-18.2,-353.6).s().p("AmFh+IAAjFIMLHBIAADGg");
	this.shape_623.setTransform(2037.425,1658.95);

	this.shape_624 = new cjs.Shape();
	this.shape_624.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBjIsLHBg");
	this.shape_624.setTransform(2140.875,1644.1);

	this.shape_625 = new cjs.Shape();
	this.shape_625.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],64.1,1242.4,-19.3,-374.4).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_625.setTransform(2101.85,1676.525);

	this.shape_626 = new cjs.Shape();
	this.shape_626.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1427.4,0,-149.9).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_626.setTransform(2149.375,1658.95);

	this.shape_627 = new cjs.Shape();
	this.shape_627.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbivICrhiIMLHBIiqBig");
	this.shape_627.setTransform(2045.95,1746.825);

	this.shape_628 = new cjs.Shape();
	this.shape_628.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],58.8,1141,-24.6,-476.1).s().p("AhUgxICphiIAADFIipBig");
	this.shape_628.setTransform(2084.975,1779.225);

	this.shape_629 = new cjs.Shape();
	this.shape_629.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],59.9,1161,-23.5,-456.1).s().p("AmFh+IAAjFIMLHBIAADGg");
	this.shape_629.setTransform(2037.425,1761.65);

	this.shape_630 = new cjs.Shape();
	this.shape_630.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_630.setTransform(2140.875,1746.825);

	this.shape_631 = new cjs.Shape();
	this.shape_631.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],58.8,1140.2,-24.6,-476.9).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_631.setTransform(2101.85,1779.225);

	this.shape_632 = new cjs.Shape();
	this.shape_632.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1324.8,0,-252.6).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_632.setTransform(2149.375,1761.65);

	this.shape_633 = new cjs.Shape();
	this.shape_633.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbivICrhiIMLHBIiqBig");
	this.shape_633.setTransform(2045.95,1846.025);

	this.shape_634 = new cjs.Shape();
	this.shape_634.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],53.7,1042.2,-29.7,-575).s().p("AhUgxICphiIAADFIipBig");
	this.shape_634.setTransform(2084.975,1878.425);

	this.shape_635 = new cjs.Shape();
	this.shape_635.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],54.8,1062.1,-28.6,-555).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_635.setTransform(2037.425,1860.85);

	this.shape_636 = new cjs.Shape();
	this.shape_636.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_636.setTransform(2140.875,1846.025);

	this.shape_637 = new cjs.Shape();
	this.shape_637.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],53.7,1041.3,-29.7,-575.9).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_637.setTransform(2101.85,1878.425);

	this.shape_638 = new cjs.Shape();
	this.shape_638.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1225.6,0,-351.8).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_638.setTransform(2149.375,1860.85);

	this.shape_639 = new cjs.Shape();
	this.shape_639.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbivICrhiIMLHBIiqBjg");
	this.shape_639.setTransform(2045.95,1945.25);

	this.shape_640 = new cjs.Shape();
	this.shape_640.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],48.6,943.2,-34.8,-673.9).s().p("AhUgwICphjIAADFIipBig");
	this.shape_640.setTransform(2084.975,1977.65);

	this.shape_641 = new cjs.Shape();
	this.shape_641.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],49.7,963.2,-33.7,-653.9).s().p("AmFh9IAAjGIMLHCIAADFg");
	this.shape_641.setTransform(2037.425,1960.05);

	this.shape_642 = new cjs.Shape();
	this.shape_642.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHCg");
	this.shape_642.setTransform(2140.875,1945.25);

	this.shape_643 = new cjs.Shape();
	this.shape_643.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],48.6,942.3,-34.8,-674.8).s().p("AhUAyIAAjFICpBjIAADEg");
	this.shape_643.setTransform(2101.85,1977.65);

	this.shape_644 = new cjs.Shape();
	this.shape_644.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1126.4,0,-451).s().p("AmFB/IMLnCIAADGIsLHBg");
	this.shape_644.setTransform(2149.375,1960.05);

	this.shape_645 = new cjs.Shape();
	this.shape_645.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnbivICrhjIMLHCIiqBig");
	this.shape_645.setTransform(2045.95,2044.45);

	this.shape_646 = new cjs.Shape();
	this.shape_646.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],43.5,844.2,-39.9,-772.9).s().p("AhUgxICphiIAADFIipBig");
	this.shape_646.setTransform(2084.975,2076.875);

	this.shape_647 = new cjs.Shape();
	this.shape_647.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],44.6,864.2,-38.8,-752.9).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_647.setTransform(2037.425,2059.3);

	this.shape_648 = new cjs.Shape();
	this.shape_648.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnCICqBjIsLHBg");
	this.shape_648.setTransform(2140.875,2044.45);

	this.shape_649 = new cjs.Shape();
	this.shape_649.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],43.5,843.3,-39.9,-773.8).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_649.setTransform(2101.85,2076.875);

	this.shape_650 = new cjs.Shape();
	this.shape_650.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1027.2,0,-550.2).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_650.setTransform(2149.375,2059.3);

	this.shape_651 = new cjs.Shape();
	this.shape_651.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipgBICohgICrBiIioBhg");
	this.shape_651.setTransform(1998.225,1048.15);

	this.shape_652 = new cjs.Shape();
	this.shape_652.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],69.1,1339.1,-14.3,-277.9).s().p("EgBVBScMAAAimbICrBkMAAACmag");
	this.shape_652.setTransform(1989.825,1585.55);

	this.shape_653 = new cjs.Shape();
	this.shape_653.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1500.8,0,-76.6).s().p("EgBThScICnhhMAAACmaIinBhg");
	this.shape_653.setTransform(2006.8,1585.675);

	this.shape_654 = new cjs.Shape();
	this.shape_654.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_654.setTransform(2188.175,1047.6);

	this.shape_655 = new cjs.Shape();
	this.shape_655.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],68.7,1330.5,-14.7,-286.5).s().p("EgBVBSVMAAAimMICrBjMAAACmMg");
	this.shape_655.setTransform(2179.8,1584.325);

	this.shape_656 = new cjs.Shape();
	this.shape_656.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1502,0,-75.4).s().p("EgBThSVICnhhMAAACmMIinBhg");
	this.shape_656.setTransform(2196.775,1584.425);

	this.shape_657 = new cjs.Shape();
	this.shape_657.graphics.f("#ECF5FF").s().p("A5AgHIYluSIZcOhI4lORg");
	this.shape_657.setTransform(2092,2111.7);

	this.shape_658 = new cjs.Shape();
	this.shape_658.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],254,694.8,-151.2,-413.7).s().p("Asth8IAAqoIZbOgIAAKpg");
	this.shape_658.setTransform(2013.325,2191.45);

	this.shape_659 = new cjs.Shape();
	this.shape_659.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],271,512.6,23.7,44.8).s().p("AsSB0IYluQIAAKoI4lORg");
	this.shape_659.setTransform(2173.425,2192.225);

	this.shape_660 = new cjs.Shape();
	this.shape_660.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_660.setTransform(2141.325,1990.275);

	this.shape_661 = new cjs.Shape();
	this.shape_661.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],46.1,893.3,-37.3,-723.8).s().p("AhUgxICphiIAADFIipBig");
	this.shape_661.setTransform(2180.35,2022.675);

	this.shape_662 = new cjs.Shape();
	this.shape_662.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],47.1,913.3,-36.3,-703.8).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_662.setTransform(2132.825,2005.1);

	this.shape_663 = new cjs.Shape();
	this.shape_663.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_663.setTransform(2046.275,1990.275);

	this.shape_664 = new cjs.Shape();
	this.shape_664.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],46.5,902.2,-36.9,-714.8).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_664.setTransform(2007.275,2022.675);

	this.shape_665 = new cjs.Shape();
	this.shape_665.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1081.4,0,-496).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_665.setTransform(2054.8,2005.1);

	this.shape_666 = new cjs.Shape();
	this.shape_666.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_666.setTransform(2141.325,1891.075);

	this.shape_667 = new cjs.Shape();
	this.shape_667.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],51.2,992.3,-32.2,-624.8).s().p("AhUgxICphiIAADFIipBig");
	this.shape_667.setTransform(2180.35,1923.475);

	this.shape_668 = new cjs.Shape();
	this.shape_668.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],52.2,1012.3,-31.2,-604.8).s().p("AmFh+IAAjFIMLHBIAADGg");
	this.shape_668.setTransform(2132.825,1905.9);

	this.shape_669 = new cjs.Shape();
	this.shape_669.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHCg");
	this.shape_669.setTransform(2046.275,1891.05);

	this.shape_670 = new cjs.Shape();
	this.shape_670.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],51.6,1001.2,-31.8,-615.8).s().p("AhUAyIAAjFICpBjIAADEg");
	this.shape_670.setTransform(2007.275,1923.45);

	this.shape_671 = new cjs.Shape();
	this.shape_671.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1180.6,0,-396.8).s().p("AmFB/IMLnCIAADGIsLHBg");
	this.shape_671.setTransform(2054.8,1905.85);

	this.shape_672 = new cjs.Shape();
	this.shape_672.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBjg");
	this.shape_672.setTransform(2141.325,1790.8);

	this.shape_673 = new cjs.Shape();
	this.shape_673.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],56.4,1092.3,-27,-524.8).s().p("AhUgwICphjIAADFIipBig");
	this.shape_673.setTransform(2180.35,1823.175);

	this.shape_674 = new cjs.Shape();
	this.shape_674.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],57.4,1112.3,-26,-504.8).s().p("AmFh9IAAjGIMLHCIAADFg");
	this.shape_674.setTransform(2132.825,1805.6);

	this.shape_675 = new cjs.Shape();
	this.shape_675.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHBg");
	this.shape_675.setTransform(2046.275,1790.775);

	this.shape_676 = new cjs.Shape();
	this.shape_676.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],56.8,1101.2,-26.6,-515.9).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_676.setTransform(2007.275,1823.175);

	this.shape_677 = new cjs.Shape();
	this.shape_677.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1280.9,0,-296.5).s().p("AmFB+IMLnBIAADGIsLHBg");
	this.shape_677.setTransform(2054.8,1805.6);

	this.shape_678 = new cjs.Shape();
	this.shape_678.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBig");
	this.shape_678.setTransform(2141.325,1692.175);

	this.shape_679 = new cjs.Shape();
	this.shape_679.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],61.4,1190.5,-22,-426.4).s().p("AhUgxICphiIAADFIipBig");
	this.shape_679.setTransform(2180.35,1724.575);

	this.shape_680 = new cjs.Shape();
	this.shape_680.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],62.4,1210.6,-21,-406.4).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_680.setTransform(2132.825,1707);

	this.shape_681 = new cjs.Shape();
	this.shape_681.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBjIsLHBg");
	this.shape_681.setTransform(2046.275,1692.15);

	this.shape_682 = new cjs.Shape();
	this.shape_682.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],61.9,1199.4,-21.5,-417.5).s().p("AhUAyIAAjFICpBiIAADFg");
	this.shape_682.setTransform(2007.275,1724.575);

	this.shape_683 = new cjs.Shape();
	this.shape_683.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1379.4,0,-197.9).s().p("AmFB+IMLnBIAADFIsLHCg");
	this.shape_683.setTransform(2054.8,1707);

	this.shape_684 = new cjs.Shape();
	this.shape_684.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaivICqhiIMLHBIiqBjg");
	this.shape_684.setTransform(2141.325,1589.3);

	this.shape_685 = new cjs.Shape();
	this.shape_685.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],66.7,1293.3,-16.7,-323.9).s().p("AhUgxICphiIAADEIipBjg");
	this.shape_685.setTransform(2180.35,1621.725);

	this.shape_686 = new cjs.Shape();
	this.shape_686.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],67.7,1313.2,-15.7,-303.9).s().p("AmFh9IAAjGIMLHBIAADGg");
	this.shape_686.setTransform(2132.825,1604.125);

	this.shape_687 = new cjs.Shape();
	this.shape_687.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.5,0,47.6,0).s().p("AnaCwIMLnBICqBiIsLHCg");
	this.shape_687.setTransform(2046.275,1589.3);

	this.shape_688 = new cjs.Shape();
	this.shape_688.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],67.2,1302.2,-16.2,-314.9).s().p("AhUAyIAAjFICpBjIAADEg");
	this.shape_688.setTransform(2007.275,1621.7);

	this.shape_689 = new cjs.Shape();
	this.shape_689.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1482.4,0,-95).s().p("AmFB/IMLnCIAADGIsLHBg");
	this.shape_689.setTransform(2054.8,1604.1);

	this.shape_690 = new cjs.Shape();
	this.shape_690.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWitICohhIMEG8IinBhg");
	this.shape_690.setTransform(2140.9,1342.85);

	this.shape_691 = new cjs.Shape();
	this.shape_691.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],79.6,1542.1,-3.8,-74.9).s().p("AhTgVICnhhIAACLIinBig");
	this.shape_691.setTransform(2179.575,1372.15);

	this.shape_692 = new cjs.Shape();
	this.shape_692.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],80.6,1562,-2.8,-55.1).s().p("AmCigIAAiEIMFG9IAACMg");
	this.shape_692.setTransform(2132.525,1354.7);

	this.shape_693 = new cjs.Shape();
	this.shape_693.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohhIMEG9IinBig");
	this.shape_693.setTransform(2140.9,1453.15);

	this.shape_694 = new cjs.Shape();
	this.shape_694.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],73.7,1428.9,-9.7,-188.3).s().p("AhTg2ICnhhIAADOIinBhg");
	this.shape_694.setTransform(2179.575,1485.775);

	this.shape_695 = new cjs.Shape();
	this.shape_695.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],74.7,1448.7,-8.7,-168.4).s().p("AmCh/IAAjGIMFG9IAADOg");
	this.shape_695.setTransform(2132.525,1468.325);

	this.shape_696 = new cjs.Shape();
	this.shape_696.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1679.9,0,102.5).s().p("AhTmbICnAvIAAKnIinBgg");
	this.shape_696.setTransform(1924.2,1406.55);

	this.shape_697 = new cjs.Shape();
	this.shape_697.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],78.7,1523.9,-4.7,-93.2).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_697.setTransform(1908.425,1404.5);

	this.shape_698 = new cjs.Shape();
	this.shape_698.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1712.7,0,135.3).s().p("AhTkoICnAuIAAHCIinBhg");
	this.shape_698.setTransform(1847.65,1373.8);

	this.shape_699 = new cjs.Shape();
	this.shape_699.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],80.6,1560.4,-2.8,-56.6).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_699.setTransform(1831.875,1371.725);

	this.shape_700 = new cjs.Shape();
	this.shape_700.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1740.7,0,163.3).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_700.setTransform(1782,1345.675);

	this.shape_701 = new cjs.Shape();
	this.shape_701.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],82.2,1591.9,-1.2,-25.2).s().p("AhJCHIAAljICTApIAAGPg");
	this.shape_701.setTransform(1766.225,1343.65);

	this.shape_702 = new cjs.Shape();
	this.shape_702.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_702.setTransform(1878.425,1416.45);

	this.shape_703 = new cjs.Shape();
	this.shape_703.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1599.3,0,21.9).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_703.setTransform(1989.625,1487.175);

	this.shape_704 = new cjs.Shape();
	this.shape_704.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],77.5,1502.5,-5.9,-114.6).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_704.setTransform(1870.05,1427.875);

	this.shape_705 = new cjs.Shape();
	this.shape_705.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_705.setTransform(1878.425,1334.625);

	this.shape_706 = new cjs.Shape();
	this.shape_706.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1714.3,0,136.8).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_706.setTransform(1989.625,1372.225);

	this.shape_707 = new cjs.Shape();
	this.shape_707.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],81.7,1584.2,-1.7,-32.9).s().p("AxXj0IAAiDMAivAJsIAACDg");
	this.shape_707.setTransform(1870.05,1346.05);

	this.shape_708 = new cjs.Shape();
	this.shape_708.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncDLIMSnEICnAvIsSHEg");
	this.shape_708.setTransform(1823.3,1278.425);

	this.shape_709 = new cjs.Shape();
	this.shape_709.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1776,0,198.8).s().p("AhTARIAAiCICnBhIAACCg");
	this.shape_709.setTransform(1783.975,1310.175);

	this.shape_710 = new cjs.Shape();
	this.shape_710.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1799.1,0,221.8).s().p("AmICgIMRnEIAACFIsRHEg");
	this.shape_710.setTransform(1831.675,1287.275);

	this.shape_711 = new cjs.Shape();
	this.shape_711.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1734.9,0,157.5).s().p("AhTmaICnAuIAAKnIinBgg");
	this.shape_711.setTransform(2019.625,1351.55);

	this.shape_712 = new cjs.Shape();
	this.shape_712.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],81.3,1573.8,-2.1,-43.2).s().p("AhJFaIAAsJICTApIAAM2g");
	this.shape_712.setTransform(2003.85,1349.5);

	this.shape_713 = new cjs.Shape();
	this.shape_713.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1767.6,0,190.3).s().p("AhTkoICnAuIAAHCIinBig");
	this.shape_713.setTransform(1943.075,1318.8);

	this.shape_714 = new cjs.Shape();
	this.shape_714.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],83.2,1610.4,-0.2,-6.6).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_714.setTransform(1927.3,1316.725);

	this.shape_715 = new cjs.Shape();
	this.shape_715.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1795.7,0,218.3).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_715.setTransform(1877.425,1290.675);

	this.shape_716 = new cjs.Shape();
	this.shape_716.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],84.8,1641.7,1.4,24.7).s().p("AhJCHIAAljICTApIAAGPg");
	this.shape_716.setTransform(1861.65,1288.65);

	this.shape_717 = new cjs.Shape();
	this.shape_717.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_717.setTransform(1973.825,1361.45);

	this.shape_718 = new cjs.Shape();
	this.shape_718.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1654,0,76.9).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_718.setTransform(2085.025,1432.175);

	this.shape_719 = new cjs.Shape();
	this.shape_719.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],80.1,1552.5,-3.3,-64.6).s().p("AxXo+IAAiEMAivAUCIAACDg");
	this.shape_719.setTransform(1965.45,1372.875);

	this.shape_720 = new cjs.Shape();
	this.shape_720.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_720.setTransform(1973.825,1279.625);

	this.shape_721 = new cjs.Shape();
	this.shape_721.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1769.2,0,191.8).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_721.setTransform(2085.025,1317.225);

	this.shape_722 = new cjs.Shape();
	this.shape_722.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],84.3,1634.1,0.9,17).s().p("AxXj0IAAiDMAivAJsIAACDg");
	this.shape_722.setTransform(1965.45,1291.05);

	this.shape_723 = new cjs.Shape();
	this.shape_723.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47,0,47.1,0).s().p("AnWiuICohhIMEG+IinBhg");
	this.shape_723.setTransform(2140.9,1020.3);

	this.shape_724 = new cjs.Shape();
	this.shape_724.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],96.2,1863.7,12.8,246.7).s().p("AhTgUICnhiIAACMIinBgg");
	this.shape_724.setTransform(2179.575,1049.65);

	this.shape_725 = new cjs.Shape();
	this.shape_725.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],97.2,1883.6,13.8,266.6).s().p("AmCihIAAiEIMFG/IAACLg");
	this.shape_725.setTransform(2132.525,1032.15);

	this.shape_726 = new cjs.Shape();
	this.shape_726.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-16.9,0,17,0).s().p("AipAAICohhICrBiIioBhg");
	this.shape_726.setTransform(2093.625,993.05);

	this.shape_727 = new cjs.Shape();
	this.shape_727.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],71.7,1389.9,-11.7,-227.2).s().p("EgBVBSUMAAAimLICrBjMAAACmMg");
	this.shape_727.setTransform(2085.225,1529.725);

	this.shape_728 = new cjs.Shape();
	this.shape_728.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1556.6,0,-20.8).s().p("EgBThSVICnhhMAAACmMIinBhg");
	this.shape_728.setTransform(2102.2,1529.825);

	this.shape_729 = new cjs.Shape();
	this.shape_729.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2002.2,0,424.9).s().p("AhTmbICnAvIAAKmIinBig");
	this.shape_729.setTransform(1924.2,1084.2);

	this.shape_730 = new cjs.Shape();
	this.shape_730.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],95.3,1845.4,11.9,228.3).s().p("AhJFbIAAsKICTApIAAM2g");
	this.shape_730.setTransform(1908.425,1082.125);

	this.shape_731 = new cjs.Shape();
	this.shape_731.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2035,0,457.6).s().p("AhTkpICnAvIAAHDIinBhg");
	this.shape_731.setTransform(1847.65,1051.425);

	this.shape_732 = new cjs.Shape();
	this.shape_732.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],97.2,1882,13.8,264.9).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_732.setTransform(1831.875,1049.375);

	this.shape_733 = new cjs.Shape();
	this.shape_733.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2063.1,0,485.7).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_733.setTransform(1782,1023.325);

	this.shape_734 = new cjs.Shape();
	this.shape_734.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],98.8,1913.4,15.4,296.3).s().p("AhJCHIAAliICTAoIAAGQg");
	this.shape_734.setTransform(1766.225,1021.3);

	this.shape_735 = new cjs.Shape();
	this.shape_735.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_735.setTransform(1878.425,1094.075);

	this.shape_736 = new cjs.Shape();
	this.shape_736.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1921.7,0,344.3).s().p("AhTgQICnhiIAACDIinBhg");
	this.shape_736.setTransform(1989.625,1164.8);

	this.shape_737 = new cjs.Shape();
	this.shape_737.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],94.1,1824,10.7,206.9).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_737.setTransform(1870.05,1105.525);

	this.shape_738 = new cjs.Shape();
	this.shape_738.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkFICohhMAivAJsIioBhg");
	this.shape_738.setTransform(1878.425,1012.225);

	this.shape_739 = new cjs.Shape();
	this.shape_739.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2036.7,0,459.3).s().p("AhTgRICnhgIAACCIinBhg");
	this.shape_739.setTransform(1989.625,1049.85);

	this.shape_740 = new cjs.Shape();
	this.shape_740.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],98.3,1905.6,14.9,288.6).s().p("AxXjzIAAiEMAivAJrIAACEg");
	this.shape_740.setTransform(1870.05,1023.675);

	this.shape_741 = new cjs.Shape();
	this.shape_741.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-47.7,0,47.7,0).s().p("AncDLIMSnEICnAvIsSHEg");
	this.shape_741.setTransform(1823.3,956.05);

	this.shape_742 = new cjs.Shape();
	this.shape_742.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2098.7,0,521.3).s().p("AhTARIAAiDICnBhIAACEg");
	this.shape_742.setTransform(1783.975,987.8);

	this.shape_743 = new cjs.Shape();
	this.shape_743.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2121.6,0,544.2).s().p("AmICgIMRnEIAACFIsRHDg");
	this.shape_743.setTransform(1831.675,964.9);

	this.shape_744 = new cjs.Shape();
	this.shape_744.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2057.4,0,480).s().p("AhTmaICnAuIAAKmIinBhg");
	this.shape_744.setTransform(2019.625,1029.05);

	this.shape_745 = new cjs.Shape();
	this.shape_745.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],97.9,1895.4,14.5,278.3).s().p("AhJFbIAAsLICTApIAAM4g");
	this.shape_745.setTransform(2003.85,1027.075);

	this.shape_746 = new cjs.Shape();
	this.shape_746.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2090.1,0,512.7).s().p("AhTkpICnAvIAAHDIinBhg");
	this.shape_746.setTransform(1943.075,996.4);

	this.shape_747 = new cjs.Shape();
	this.shape_747.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],99.8,1932,16.4,314.9).s().p("AhJDpIAAomICTApIAAJSg");
	this.shape_747.setTransform(1927.3,994.325);

	this.shape_748 = new cjs.Shape();
	this.shape_748.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2118.2,0,540.7).s().p("AhTjHICnAvIAAD/IinBhg");
	this.shape_748.setTransform(1877.425,968.325);

	this.shape_749 = new cjs.Shape();
	this.shape_749.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],101.4,1963.3,18,346.2).s().p("AhJCHIAAliICTAoIAAGQg");
	this.shape_749.setTransform(1861.65,966.3);

	this.shape_750 = new cjs.Shape();
	this.shape_750.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrpQICohhMAivAUCIioBhg");
	this.shape_750.setTransform(1973.825,1039.075);

	this.shape_751 = new cjs.Shape();
	this.shape_751.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1976.4,0,399.2).s().p("AhTgQICnhhIAACDIinBgg");
	this.shape_751.setTransform(2085.025,1109.8);

	this.shape_752 = new cjs.Shape();
	this.shape_752.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],96.7,1873.9,13.3,256.9).s().p("AxXo/IAAiDMAivAUBIAACEg");
	this.shape_752.setTransform(1965.45,1050.525);

	this.shape_753 = new cjs.Shape();
	this.shape_753.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-119.5,0,119.6,0).s().p("AyrkEICohhMAivAJqIioBhg");
	this.shape_753.setTransform(1973.825,957.15);

	this.shape_754 = new cjs.Shape();
	this.shape_754.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,2091.8,0,514.4).s().p("AhTgQICnhhIAACCIinBhg");
	this.shape_754.setTransform(2085.025,994.675);

	this.shape_755 = new cjs.Shape();
	this.shape_755.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],100.9,1955.7,17.5,338.6).s().p("AxXjyIAAiEMAivAJqIAACDg");
	this.shape_755.setTransform(1965.45,968.575);

	this.shape_756 = new cjs.Shape();
	this.shape_756.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-39.1,0,39.2,0).s().p("AmGBQIJlljICoBhIsNHGg");
	this.shape_756.setTransform(2054.325,1136.175);

	this.shape_757 = new cjs.Shape();
	this.shape_757.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],0,1942.4,0,365).s().p("AmJDCIMTnEIAACDIqfGCg");
	this.shape_757.setTransform(2054.075,1144.15);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_757},{t:this.shape_756},{t:this.shape_755},{t:this.shape_754},{t:this.shape_753},{t:this.shape_752},{t:this.shape_751},{t:this.shape_750},{t:this.shape_749},{t:this.shape_748},{t:this.shape_747},{t:this.shape_746},{t:this.shape_745},{t:this.shape_744},{t:this.shape_743},{t:this.shape_742},{t:this.shape_741},{t:this.shape_740},{t:this.shape_739},{t:this.shape_738},{t:this.shape_737},{t:this.shape_736},{t:this.shape_735},{t:this.shape_734},{t:this.shape_733},{t:this.shape_732},{t:this.shape_731},{t:this.shape_730},{t:this.shape_729},{t:this.shape_728},{t:this.shape_727},{t:this.shape_726},{t:this.shape_725},{t:this.shape_724},{t:this.shape_723},{t:this.shape_722},{t:this.shape_721},{t:this.shape_720},{t:this.shape_719},{t:this.shape_718},{t:this.shape_717},{t:this.shape_716},{t:this.shape_715},{t:this.shape_714},{t:this.shape_713},{t:this.shape_712},{t:this.shape_711},{t:this.shape_710},{t:this.shape_709},{t:this.shape_708},{t:this.shape_707},{t:this.shape_706},{t:this.shape_705},{t:this.shape_704},{t:this.shape_703},{t:this.shape_702},{t:this.shape_701},{t:this.shape_700},{t:this.shape_699},{t:this.shape_698},{t:this.shape_697},{t:this.shape_696},{t:this.shape_695},{t:this.shape_694},{t:this.shape_693},{t:this.shape_692},{t:this.shape_691},{t:this.shape_690},{t:this.shape_689},{t:this.shape_688},{t:this.shape_687},{t:this.shape_686},{t:this.shape_685},{t:this.shape_684},{t:this.shape_683},{t:this.shape_682},{t:this.shape_681},{t:this.shape_680},{t:this.shape_679},{t:this.shape_678},{t:this.shape_677},{t:this.shape_676},{t:this.shape_675},{t:this.shape_674},{t:this.shape_673},{t:this.shape_672},{t:this.shape_671},{t:this.shape_670},{t:this.shape_669},{t:this.shape_668},{t:this.shape_667},{t:this.shape_666},{t:this.shape_665},{t:this.shape_664},{t:this.shape_663},{t:this.shape_662},{t:this.shape_661},{t:this.shape_660},{t:this.shape_659},{t:this.shape_658},{t:this.shape_657},{t:this.shape_656},{t:this.shape_655},{t:this.shape_654},{t:this.shape_653},{t:this.shape_652},{t:this.shape_651},{t:this.shape_650},{t:this.shape_649},{t:this.shape_648},{t:this.shape_647},{t:this.shape_646},{t:this.shape_645},{t:this.shape_644},{t:this.shape_643},{t:this.shape_642},{t:this.shape_641},{t:this.shape_640},{t:this.shape_639},{t:this.shape_638},{t:this.shape_637},{t:this.shape_636},{t:this.shape_635},{t:this.shape_634},{t:this.shape_633},{t:this.shape_632},{t:this.shape_631},{t:this.shape_630},{t:this.shape_629},{t:this.shape_628},{t:this.shape_627},{t:this.shape_626},{t:this.shape_625},{t:this.shape_624},{t:this.shape_623},{t:this.shape_622},{t:this.shape_621},{t:this.shape_620},{t:this.shape_619},{t:this.shape_618},{t:this.shape_617},{t:this.shape_616},{t:this.shape_615},{t:this.shape_614},{t:this.shape_613},{t:this.shape_612},{t:this.shape_611},{t:this.shape_610},{t:this.shape_609},{t:this.shape_608},{t:this.shape_607},{t:this.shape_606},{t:this.shape_605},{t:this.shape_604},{t:this.shape_603},{t:this.shape_602},{t:this.shape_601},{t:this.shape_600},{t:this.shape_599},{t:this.shape_598},{t:this.shape_597},{t:this.shape_596},{t:this.shape_595},{t:this.shape_594},{t:this.shape_593},{t:this.shape_592},{t:this.shape_591},{t:this.shape_590},{t:this.shape_589},{t:this.shape_588},{t:this.shape_587},{t:this.shape_586},{t:this.shape_585},{t:this.shape_584},{t:this.shape_583},{t:this.shape_582},{t:this.shape_581},{t:this.shape_580},{t:this.shape_579},{t:this.shape_578},{t:this.shape_577},{t:this.shape_576},{t:this.shape_575},{t:this.shape_574},{t:this.shape_573},{t:this.shape_572},{t:this.shape_571},{t:this.shape_570},{t:this.shape_569},{t:this.shape_568},{t:this.shape_567},{t:this.shape_566},{t:this.shape_565},{t:this.shape_564},{t:this.shape_563},{t:this.shape_562},{t:this.shape_561},{t:this.shape_560},{t:this.shape_559},{t:this.shape_558},{t:this.shape_557},{t:this.shape_556},{t:this.shape_555},{t:this.shape_554},{t:this.shape_553},{t:this.shape_552},{t:this.shape_551},{t:this.shape_550},{t:this.shape_549},{t:this.shape_548},{t:this.shape_547},{t:this.shape_546},{t:this.shape_545},{t:this.shape_544},{t:this.shape_543},{t:this.shape_542},{t:this.shape_541},{t:this.shape_540},{t:this.shape_539},{t:this.shape_538}]}).wait(40));

	// electric_lines1
	this.shape_758 = new cjs.Shape();
	this.shape_758.graphics.f("#9C5984").s().p("Eg+IAigQaJnUZDsrQUDqKSdtIQNPpbLIp/QFllBDHjTIBiBaQjBDPlkFDQrHKCtJJZQx5MyzzKJQ6FNZ7HHkg");
	this.shape_758.setTransform(1495.75,1652.95);

	this.shape_759 = new cjs.Shape();
	this.shape_759.graphics.f("#9C5984").s().p("Eg+IAifQaJnTZCssQUDqKSetHQNOpbLIp/QFnlBDGjTIBiBbQjBDPlkFCQrHKCtJJZQx5MyzzKKQ6ENY7IHkg");
	this.shape_759.setTransform(1495.75,1326.625);

	this.shape_760 = new cjs.Shape();
	this.shape_760.graphics.f("#9C5984").s().p("Eg+IAigQaJnUZDssQUDqJSetIQNOpaLIqAQFmlBDGjTIBiBbQjBDPlkFBQrHKDtJJaQx4Mwz0KLQ6ENX7IHlg");
	this.shape_760.setTransform(1382.825,1280.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_760},{t:this.shape_759},{t:this.shape_758}]}).wait(40));

	// current_icon
	this.instance_9 = new lib.currenticon("synched",0);
	this.instance_9.setTransform(3797.7,1958.85,1,1,0,0,0,130.7,207.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).to({scaleX:0.6688,scaleY:0.6688,y:1958.9},9).to({regX:130.8,rotation:14.9991,x:3797.8},9).to({regY:207.9,rotation:0,y:1958.95},4).to({regY:208,rotation:-14.9982},4).to({regY:208.1,rotation:0,y:1959.1},4).to({regX:130.9,scaleX:0.8634,scaleY:0.8634,x:3797.9},8).wait(2));

	// others
	this.instance_10 = new lib.Path_9();
	this.instance_10.setTransform(2701.8,4633.25,1,1,0,0,0,163.1,66);
	this.instance_10.alpha = 0.0781;
	this.instance_10.compositeOperation = "multiply";

	this.instance_11 = new lib.Path_1_3();
	this.instance_11.setTransform(275.8,3946.4,1,1,0,0,0,164.4,66.6);
	this.instance_11.alpha = 0.0703;
	this.instance_11.compositeOperation = "multiply";

	this.shape_761 = new cjs.Shape();
	this.shape_761.graphics.f("#F4F6F7").s().p("ArYk4IAAjZIWxNKIAADZg");
	this.shape_761.setTransform(4414.25,1430.125);

	this.shape_762 = new cjs.Shape();
	this.shape_762.graphics.f("#F4F6F7").s().p("A40sqIAAjYMAxpActIAADYg");
	this.shape_762.setTransform(4500.3,1433.5);

	this.shape_763 = new cjs.Shape();
	this.shape_763.graphics.f("#F4F6F7").s().p("A40sqIAAjZMAxpAcuIAADZg");
	this.shape_763.setTransform(4500.3,1387.05);

	this.shape_764 = new cjs.Shape();
	this.shape_764.graphics.f("#BBDA52").s().p("EAcLAobMgu+gbMIsYEpID2pkIlCi7Qh4hFhFh4QhFh4AAiJMAAAgjpQAAhGAjg7QAig4A5ghQA4ghBBgBQBFgBA9AjMA+TAkEQCJBPBPCJQBPCJAACeMAAAAgQQAABigxBTQgvBNhQAuQhPAuhbACIgHAAQhcAAhSgwg");
	this.shape_764.setTransform(4504.325,1427.8758);

	this.shape_765 = new cjs.Shape();
	this.shape_765.graphics.f("#F4F6F7").s().p("ArYk4IAAjZIWxNKIAADZg");
	this.shape_765.setTransform(4414.25,1888.825);

	this.shape_766 = new cjs.Shape();
	this.shape_766.graphics.f("#F4F6F7").s().p("A40sqIAAjZMAxpAcuIAADYg");
	this.shape_766.setTransform(4500.3,1892.15);

	this.shape_767 = new cjs.Shape();
	this.shape_767.graphics.f("#F4F6F7").s().p("A40sqIAAjZMAxpAcuIAADZg");
	this.shape_767.setTransform(4500.3,1845.75);

	this.shape_768 = new cjs.Shape();
	this.shape_768.graphics.f("#BBDA52").s().p("EAcLAobMgu+gbMIsYEpID2pkIlCi7Qh4hFhFh4QhFh4AAiJMAAAgjpQAAhGAjg7QAig4A5ghQA4ghBBgBQBFgBA9AjMA+TAkDQCJBQBPCJQBPCJAACeMAAAAgPQAABjgxBSQgvBOhQAuQhPAuhbACIgFAAQhdAAhTgwg");
	this.shape_768.setTransform(4504.325,1886.5742);

	this.instance_12 = new lib.Path_10();
	this.instance_12.setTransform(4461.25,2992.7,1,1,0,0,0,164.4,66.6);
	this.instance_12.alpha = 0.0781;
	this.instance_12.compositeOperation = "multiply";

	this.instance_13 = new lib.Path_11();
	this.instance_13.setTransform(2961.9,3647.95,1,1,0,0,0,180.4,73.1);
	this.instance_13.alpha = 0.0781;
	this.instance_13.compositeOperation = "multiply";

	this.shape_769 = new cjs.Shape();
	this.shape_769.graphics.f("#BBDA52").s().p("AluV5MAAAgyYILdGnMAAAAyYg");
	this.shape_769.setTransform(1686.725,4427.125);

	this.shape_770 = new cjs.Shape();
	this.shape_770.graphics.f("#DCEB2A").s().p("AragBILZmjILcGmIrZGjg");
	this.shape_770.setTransform(1723.175,4244.925);

	this.shape_771 = new cjs.Shape();
	this.shape_771.graphics.f("#9ACA7A").s().p("Als16ILZmjMAAAAyXIrZGkg");
	this.shape_771.setTransform(1759.85,4427.35);

	this.shape_772 = new cjs.Shape();
	this.shape_772.graphics.f("#F7BD67").s().p("AiGF8IAAuTIEMCcIAAOTg");
	this.shape_772.setTransform(1709.8,4604.25);

	this.shape_773 = new cjs.Shape();
	this.shape_773.graphics.f("#F7AA67").s().p("AiFl8IELiaIAAOTIkLCag");
	this.shape_773.setTransform(1736.65,4604.325);

	this.instance_14 = new lib.Path_8();
	this.instance_14.setTransform(1723.15,4648,1,1,0,0,0,73.1,42.1);
	this.instance_14.alpha = 0.0781;
	this.instance_14.compositeOperation = "multiply";

	this.shape_774 = new cjs.Shape();
	this.shape_774.graphics.f("#BBDA52").s().p("AltV5MAAAgyYILbGnMAAAAyYg");
	this.shape_774.setTransform(1478.35,4306.725);

	this.shape_775 = new cjs.Shape();
	this.shape_775.graphics.f("#DCEB2A").s().p("AragBILZmkILcGmIrZGkg");
	this.shape_775.setTransform(1514.825,4124.5);

	this.shape_776 = new cjs.Shape();
	this.shape_776.graphics.f("#9ACA7A").s().p("Als16ILZmkMAAAAyZIrZGjg");
	this.shape_776.setTransform(1551.475,4306.9);

	this.shape_777 = new cjs.Shape();
	this.shape_777.graphics.f("#F7BD67").s().p("AiGF8IAAuTIENCcIAAOTg");
	this.shape_777.setTransform(1501.425,4483.8);

	this.shape_778 = new cjs.Shape();
	this.shape_778.graphics.f("#F7AA67").s().p("AiFl9IELiZIAAOTIkLCag");
	this.shape_778.setTransform(1528.3,4483.9);

	this.instance_15 = new lib.Path_1_2();
	this.instance_15.setTransform(1514.8,4527.55,1,1,0,0,0,73.1,42.1);
	this.instance_15.alpha = 0.0781;
	this.instance_15.compositeOperation = "multiply";

	this.shape_779 = new cjs.Shape();
	this.shape_779.graphics.f("#BBDA52").s().p("AltV5MAAAgyYILcGnMAAAAyYg");
	this.shape_779.setTransform(1254.75,4178.325);

	this.shape_780 = new cjs.Shape();
	this.shape_780.graphics.f("#DCEB2A").s().p("AraAAILZmlILcGnIrZGkg");
	this.shape_780.setTransform(1291.225,3996.1);

	this.shape_781 = new cjs.Shape();
	this.shape_781.graphics.f("#9ACA7A").s().p("Als16ILZmkMAAAAyZIrZGkg");
	this.shape_781.setTransform(1327.875,4178.5);

	this.shape_782 = new cjs.Shape();
	this.shape_782.graphics.f("#F7BD67").s().p("AiGF9IAAuUIENCbIAAOUg");
	this.shape_782.setTransform(1277.825,4355.4);

	this.shape_783 = new cjs.Shape();
	this.shape_783.graphics.f("#F7AA67").s().p("AiFl8IELibIAAOUIkLCbg");
	this.shape_783.setTransform(1304.7,4355.5);

	this.instance_16 = new lib.Path_7();
	this.instance_16.setTransform(1291.2,4399.15,1,1,0,0,0,73.1,42.1);
	this.instance_16.alpha = 0.0781;
	this.instance_16.compositeOperation = "multiply";

	this.shape_784 = new cjs.Shape();
	this.shape_784.graphics.f("#BBDA52").s().p("AluV5MAAAgyYILdGnMAAAAyYg");
	this.shape_784.setTransform(1046.375,4057.875);

	this.shape_785 = new cjs.Shape();
	this.shape_785.graphics.f("#DCEB2A").s().p("AragBILZmjILdGmIraGjg");
	this.shape_785.setTransform(1082.85,3875.675);

	this.shape_786 = new cjs.Shape();
	this.shape_786.graphics.f("#9ACA7A").s().p("Als16ILZmjMAAAAyYIrZGjg");
	this.shape_786.setTransform(1119.525,4058.1);

	this.shape_787 = new cjs.Shape();
	this.shape_787.graphics.f("#F7BD67").s().p("AiFF8IAAuTIEMCcIAAOTg");
	this.shape_787.setTransform(1069.45,4235);

	this.shape_788 = new cjs.Shape();
	this.shape_788.graphics.f("#F7AA67").s().p("AiFl8IELibIAAOUIkLCbg");
	this.shape_788.setTransform(1096.3,4235.05);

	this.instance_17 = new lib.Path_1_1();
	this.instance_17.setTransform(1082.9,4278.7,1,1,0,0,0,73.2,42.1);
	this.instance_17.alpha = 0.0781;
	this.instance_17.compositeOperation = "multiply";

	this.shape_789 = new cjs.Shape();
	this.shape_789.graphics.f("#BBDA52").s().p("AluV5MAAAgyYILdGnMAAAAyYg");
	this.shape_789.setTransform(822.8,3929.475);

	this.shape_790 = new cjs.Shape();
	this.shape_790.graphics.f("#DCEB2A").s().p("AragBILZmjILcGmIrZGjg");
	this.shape_790.setTransform(859.275,3747.275);

	this.shape_791 = new cjs.Shape();
	this.shape_791.graphics.f("#9ACA7A").s().p("Als16ILZmkMAAAAyYIrZGlg");
	this.shape_791.setTransform(895.925,3929.7);

	this.shape_792 = new cjs.Shape();
	this.shape_792.graphics.f("#F7BD67").s().p("AiGF8IAAuTIENCbIAAOUg");
	this.shape_792.setTransform(845.875,4106.6);

	this.shape_793 = new cjs.Shape();
	this.shape_793.graphics.f("#F7AA67").s().p("AiFl8IELiaIAAOTIkLCag");
	this.shape_793.setTransform(872.75,4106.675);

	this.instance_18 = new lib.Path_6();
	this.instance_18.setTransform(859.25,4150.35,1,1,0,0,0,73.1,42.1);
	this.instance_18.alpha = 0.0781;
	this.instance_18.compositeOperation = "multiply";

	this.shape_794 = new cjs.Shape();
	this.shape_794.graphics.f("#BBDA52").s().p("AluV5MAAAgyYILdGnMAAAAyYg");
	this.shape_794.setTransform(614.425,3809.05);

	this.shape_795 = new cjs.Shape();
	this.shape_795.graphics.f("#DCEB2A").s().p("AragBILZmjILcGlIrZGlg");
	this.shape_795.setTransform(650.875,3626.85);

	this.shape_796 = new cjs.Shape();
	this.shape_796.graphics.f("#9ACA7A").s().p("Als16ILYmkMAAAAyZIrYGkg");
	this.shape_796.setTransform(687.55,3809.25);

	this.shape_797 = new cjs.Shape();
	this.shape_797.graphics.f("#F7BD67").s().p("AiGF8IAAuTIENCbIAAOUg");
	this.shape_797.setTransform(637.475,3986.15);

	this.shape_798 = new cjs.Shape();
	this.shape_798.graphics.f("#F7AA67").s().p("AiFl8IELiaIAAOTIkLCag");
	this.shape_798.setTransform(664.35,3986.225);

	this.instance_19 = new lib.Path_1_0();
	this.instance_19.setTransform(650.85,4029.9,1,1,0,0,0,73.1,42.1);
	this.instance_19.alpha = 0.0781;
	this.instance_19.compositeOperation = "multiply";

	this.shape_799 = new cjs.Shape();
	this.shape_799.graphics.f("#586BC1").s().p("AoKj2IAAhuIQWJbIAABtg");
	this.shape_799.setTransform(1926.5,4090.75);

	this.shape_800 = new cjs.Shape();
	this.shape_800.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-75.6,0,75.6,0).s().p("Ar0inIHTkMIQVJbInREMg");
	this.shape_800.setTransform(1949.8,4071.9);

	this.shape_801 = new cjs.Shape();
	this.shape_801.graphics.f("#586BC1").s().p("AjoBPIHRkLIAABuInRELg");
	this.shape_801.setTransform(2002.15,4107.575);

	this.shape_802 = new cjs.Shape();
	this.shape_802.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,339.1,0,184).s().p("AganYIA1AfIAANzIg1Afg");
	this.shape_802.setTransform(1917.425,4090.7);

	this.shape_803 = new cjs.Shape();
	this.shape_803.graphics.f("#ECF5FF").s().p("An1kRIA1gfIO2IjIAAA+g");
	this.shape_803.setTransform(1964.975,4165.425);

	this.shape_804 = new cjs.Shape();
	this.shape_804.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-98.6,0,271.4).s().p("An1C3IAAuxIPrJEIAAOxg");
	this.shape_804.setTransform(1964.975,4119.675);

	this.shape_805 = new cjs.Shape();
	this.shape_805.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,253.5,0,98.4).s().p("AgaqRIA1AfIAATkIg1Agg");
	this.shape_805.setTransform(2035,4176.35);

	this.shape_806 = new cjs.Shape();
	this.shape_806.graphics.f("#ECF5FF").s().p("AkiiYIA2gfIIPEwIAAA/g");
	this.shape_806.setTransform(2061.425,4257.35);

	this.shape_807 = new cjs.Shape();
	this.shape_807.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-172.1,0,197.9).s().p("AkiHpIAA0hIJFFQIAAUig");
	this.shape_807.setTransform(2061.425,4193.15);

	this.shape_808 = new cjs.Shape();
	this.shape_808.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,408.9,0,56.2).s().p("AuwnMIAAhxIdhRCIhiA4g");
	this.shape_808.setTransform(2202.3,3911.5);

	this.shape_809 = new cjs.Shape();
	this.shape_809.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,409.4,0,56.7).s().p("AurIAIdXw4IAABxI70QAg");
	this.shape_809.setTransform(2013.85,3911.025);

	this.shape_810 = new cjs.Shape();
	this.shape_810.graphics.f("#ECF5FF").s().p("EghYgAEMAhUgTKMAhdATTMghUATKgA9bgEIdgRCIdYw5I9hxCg");
	this.shape_810.setTransform(2108.35,3962.725);

	this.shape_811 = new cjs.Shape();
	this.shape_811.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,194.3,0,-378.1).s().p("AwuGAIAA/UMAhdATUIAAfVg");
	this.shape_811.setTransform(2001.775,4124.225);

	this.shape_812 = new cjs.Shape();
	this.shape_812.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],141.2,-251.1,-216.9,385.9).s().p("EghYgAEMAhUgTKMAhdATTMghUATKg");
	this.shape_812.setTransform(2108.35,3962.725);

	this.shape_813 = new cjs.Shape();
	this.shape_813.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,259.3,0,-35.2).s().p("AwpmFMAhTgTKIAAfVMghTATKg");
	this.shape_813.setTransform(2215.475,4124.825);

	this.shape_814 = new cjs.Shape();
	this.shape_814.graphics.f("#586BC1").s().p("AoKj2IAAhuIQVJbIAABug");
	this.shape_814.setTransform(1613.275,3910.325);

	this.shape_815 = new cjs.Shape();
	this.shape_815.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-75.6,0,75.6,0).s().p("ArzinIHRkMIQWJbInSEMg");
	this.shape_815.setTransform(1636.575,3891.475);

	this.shape_816 = new cjs.Shape();
	this.shape_816.graphics.f("#586BC1").s().p("AjoBPIHRkKIAABsInRELg");
	this.shape_816.setTransform(1688.9,3927.15);

	this.shape_817 = new cjs.Shape();
	this.shape_817.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,339.2,0,184).s().p("AganYIA1AfIAANzIg1Afg");
	this.shape_817.setTransform(1604.2,3910.3);

	this.shape_818 = new cjs.Shape();
	this.shape_818.graphics.f("#ECF5FF").s().p("An1kRIA2gfIO1IjIAAA+g");
	this.shape_818.setTransform(1651.725,3985.025);

	this.shape_819 = new cjs.Shape();
	this.shape_819.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-98.6,0,271.4).s().p("An1C3IAAuxIPrJEIAAOxg");
	this.shape_819.setTransform(1651.725,3939.275);

	this.shape_820 = new cjs.Shape();
	this.shape_820.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,253.6,0,98.4).s().p("AgaqRIA1AgIAATjIg1Afg");
	this.shape_820.setTransform(1721.75,3995.9);

	this.shape_821 = new cjs.Shape();
	this.shape_821.graphics.f("#ECF5FF").s().p("AkiiYIA2gfIIPEwIAAA/g");
	this.shape_821.setTransform(1748.175,4076.9);

	this.shape_822 = new cjs.Shape();
	this.shape_822.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-172,0,198).s().p("AkiHpIAA0iIJFFRIAAUig");
	this.shape_822.setTransform(1748.175,4012.7);

	this.shape_823 = new cjs.Shape();
	this.shape_823.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,408.9,0,56.2).s().p("AuwnMIAAhxIdhRCIhiA5g");
	this.shape_823.setTransform(1889.05,3731.075);

	this.shape_824 = new cjs.Shape();
	this.shape_824.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,409.5,0,56.7).s().p("AurIAIdXw4IAABxI70QAg");
	this.shape_824.setTransform(1700.6,3730.6);

	this.shape_825 = new cjs.Shape();
	this.shape_825.graphics.f("#ECF5FF").s().p("EghYgAEMAhUgTLMAhdATUMghTATKgA9cgEIdiRCIdWw5I9gxCg");
	this.shape_825.setTransform(1795.1,3782.3);

	this.shape_826 = new cjs.Shape();
	this.shape_826.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,194.3,0,-378.1).s().p("AwuGBIAA/VMAhdATUIAAfVg");
	this.shape_826.setTransform(1688.525,3943.775);

	this.shape_827 = new cjs.Shape();
	this.shape_827.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],141.2,-251,-216.9,386).s().p("EghYgAEMAhUgTLMAhdATUMghTATKg");
	this.shape_827.setTransform(1795.1,3782.3);

	this.shape_828 = new cjs.Shape();
	this.shape_828.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,259.3,0,-35.2).s().p("AwpmEMAhTgTLIAAfUMghTATLg");
	this.shape_828.setTransform(1902.225,3944.4);

	this.shape_829 = new cjs.Shape();
	this.shape_829.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,35.8,0,-195.7).s().p("AgVExIAAphIArgZIAAKTg");
	this.shape_829.setTransform(1507.05,3718.25);

	this.shape_830 = new cjs.Shape();
	this.shape_830.graphics.f("#ECF5FF").s().p("AiUAwID+iSIArAZIkpCsg");
	this.shape_830.setTransform(1494.3,3758.6);

	this.shape_831 = new cjs.Shape();
	this.shape_831.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,69.4,0,-121.9).s().p("AiUjzIEpisIAAKTIkpCsg");
	this.shape_831.setTransform(1494.3,3726.875);

	this.shape_832 = new cjs.Shape();
	this.shape_832.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,65.3,0,-166.2).s().p("AgVExIAAphIArgZIAAKTg");
	this.shape_832.setTransform(1558.1,3688.75);

	this.shape_833 = new cjs.Shape();
	this.shape_833.graphics.f("#ECF5FF").s().p("AiUAwID+iSIAsAZIkqCsg");
	this.shape_833.setTransform(1545.35,3729.125);

	this.shape_834 = new cjs.Shape();
	this.shape_834.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,98.8,0,-92.4).s().p("AiUjzIEqisIAAKTIkqCsg");
	this.shape_834.setTransform(1545.35,3697.375);

	this.shape_835 = new cjs.Shape();
	this.shape_835.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,94.7,0,-136.8).s().p("AgVExIAAphIArgZIAAKTg");
	this.shape_835.setTransform(1609.1,3659.375);

	this.shape_836 = new cjs.Shape();
	this.shape_836.graphics.f("#ECF5FF").s().p("AiUAwID9iSIAsAZIkpCsg");
	this.shape_836.setTransform(1596.375,3699.725);

	this.shape_837 = new cjs.Shape();
	this.shape_837.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,128.2,0,-63).s().p("AiUjzIEpisIAAKTIkpCsg");
	this.shape_837.setTransform(1596.375,3667.975);

	this.shape_838 = new cjs.Shape();
	this.shape_838.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18,0,-29.8).s().p("AhLAoIAAimICXBXIAACng");
	this.shape_838.setTransform(1348.075,3715.65);

	this.shape_839 = new cjs.Shape();
	this.shape_839.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlSHyg");
	this.shape_839.setTransform(1365,3682.325);

	this.shape_840 = new cjs.Shape();
	this.shape_840.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AioCmIFRnyIAAHVIlRDEg");
	this.shape_840.setTransform(1372.575,3695.075);

	this.shape_841 = new cjs.Shape();
	this.shape_841.graphics.lf(["#D0D6EA","#FCF2F4"],[0,1],0,18,0,-29.8).s().p("AhLAoIAAinICXBYIAACmg");
	this.shape_841.setTransform(1332.925,3706.9);

	this.shape_842 = new cjs.Shape();
	this.shape_842.graphics.lf(["#DFE6ED","#FFFFFF"],[0,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlSHyg");
	this.shape_842.setTransform(1349.875,3673.575);

	this.shape_843 = new cjs.Shape();
	this.shape_843.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AipCmIFTnyIAAHVIlTDEg");
	this.shape_843.setTransform(1357.45,3686.325);

	this.shape_844 = new cjs.Shape();
	this.shape_844.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18,0,-29.8).s().p("AhLAoIAAimICXBXIAACmg");
	this.shape_844.setTransform(1317.775,3698.15);

	this.shape_845 = new cjs.Shape();
	this.shape_845.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DOIFRnyICYBXIlSHyg");
	this.shape_845.setTransform(1334.725,3664.825);

	this.shape_846 = new cjs.Shape();
	this.shape_846.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AioCmIFSnyIAAHVIlSDEg");
	this.shape_846.setTransform(1342.3,3677.575);

	this.shape_847 = new cjs.Shape();
	this.shape_847.graphics.lf(["#D0D6EA","#FCF2F4"],[0,1],0,18,0,-29.8).s().p("AhLAoIAAimICXBXIAACmg");
	this.shape_847.setTransform(1302.625,3689.4);

	this.shape_848 = new cjs.Shape();
	this.shape_848.graphics.lf(["#DFE6ED","#FFFFFF"],[0,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlSHyg");
	this.shape_848.setTransform(1319.575,3656.075);

	this.shape_849 = new cjs.Shape();
	this.shape_849.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AipCmIFSnyIAAHVIlSDEg");
	this.shape_849.setTransform(1327.15,3668.825);

	this.shape_850 = new cjs.Shape();
	this.shape_850.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18,0,-29.8).s().p("AhLAoIAAinICXBYIAACmg");
	this.shape_850.setTransform(1287.475,3680.65);

	this.shape_851 = new cjs.Shape();
	this.shape_851.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlSHyg");
	this.shape_851.setTransform(1304.425,3647.325);

	this.shape_852 = new cjs.Shape();
	this.shape_852.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AioCmIFRnyIAAHVIlRDEg");
	this.shape_852.setTransform(1312,3660.075);

	this.shape_853 = new cjs.Shape();
	this.shape_853.graphics.lf(["#D0D6EA","#FCF2F4"],[0,1],0,18.1,0,-29.7).s().p("AhLAoIAAimICXBXIAACmg");
	this.shape_853.setTransform(1272.325,3671.875);

	this.shape_854 = new cjs.Shape();
	this.shape_854.graphics.lf(["#DFE6ED","#FFFFFF"],[0,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlSHyg");
	this.shape_854.setTransform(1289.275,3638.575);

	this.shape_855 = new cjs.Shape();
	this.shape_855.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.7,-1.1,-4.5).s().p("AipCmIFSnyIAAHUIlSDFg");
	this.shape_855.setTransform(1296.85,3651.3);

	this.shape_856 = new cjs.Shape();
	this.shape_856.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18.1,0,-29.7).s().p("AhLAoIAAimICXBXIAACmg");
	this.shape_856.setTransform(1257.175,3663.125);

	this.shape_857 = new cjs.Shape();
	this.shape_857.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlSHyg");
	this.shape_857.setTransform(1274.125,3629.8);

	this.shape_858 = new cjs.Shape();
	this.shape_858.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.7,-1.1,-4.5).s().p("AipCmIFTnyIAAHUIlTDFg");
	this.shape_858.setTransform(1281.7,3642.55);

	this.shape_859 = new cjs.Shape();
	this.shape_859.graphics.lf(["#D0D6EA","#FCF2F4"],[0,1],0,18.1,0,-29.7).s().p("AhLAoIAAimICXBXIAACmg");
	this.shape_859.setTransform(1242.025,3654.375);

	this.shape_860 = new cjs.Shape();
	this.shape_860.graphics.lf(["#DFE6ED","#FFFFFF"],[0,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlSHzg");
	this.shape_860.setTransform(1258.975,3621.05);

	this.shape_861 = new cjs.Shape();
	this.shape_861.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.7,-1.1,-4.5).s().p("AioCmIFSnyIAAHVIlSDEg");
	this.shape_861.setTransform(1266.55,3633.775);

	this.shape_862 = new cjs.Shape();
	this.shape_862.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18.1,0,-29.7).s().p("AhLAoIAAimICWBXIAACng");
	this.shape_862.setTransform(1226.9,3645.6);

	this.shape_863 = new cjs.Shape();
	this.shape_863.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DOIFRnyICYBXIlSHyg");
	this.shape_863.setTransform(1243.85,3612.3);

	this.shape_864 = new cjs.Shape();
	this.shape_864.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AipCmIFTnyIAAHVIlTDEg");
	this.shape_864.setTransform(1251.4,3625.025);

	this.shape_865 = new cjs.Shape();
	this.shape_865.graphics.lf(["#D0D6EA","#FCF2F4"],[0,1],0,18,0,-29.8).s().p("AhLAoIAAinICXBZIAACmg");
	this.shape_865.setTransform(1211.75,3636.85);

	this.shape_866 = new cjs.Shape();
	this.shape_866.graphics.lf(["#DFE6ED","#FFFFFF"],[0,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnzICXBYIlRHyg");
	this.shape_866.setTransform(1228.675,3603.55);

	this.shape_867 = new cjs.Shape();
	this.shape_867.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.3,28.6,-1.2,-4.6).s().p("AioCmIFRnyIAAHVIlRDEg");
	this.shape_867.setTransform(1236.275,3616.275);

	this.shape_868 = new cjs.Shape();
	this.shape_868.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18,0,-29.8).s().p("AhKAoIAAimICVBXIAACmg");
	this.shape_868.setTransform(1196.6,3628.1);

	this.shape_869 = new cjs.Shape();
	this.shape_869.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DNIFSnyICXBYIlSHyg");
	this.shape_869.setTransform(1213.55,3594.8);

	this.shape_870 = new cjs.Shape();
	this.shape_870.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AipCmIFTnyIAAHVIlTDEg");
	this.shape_870.setTransform(1221.1,3607.525);

	this.shape_871 = new cjs.Shape();
	this.shape_871.graphics.lf(["#D0D6EA","#FCF2F4"],[0,1],0,18,0,-29.8).s().p("AhLAoIAAimICWBXIAACng");
	this.shape_871.setTransform(1181.45,3619.35);

	this.shape_872 = new cjs.Shape();
	this.shape_872.graphics.lf(["#DFE6ED","#FFFFFF"],[0,1],-24.5,0,24.5,0).s().p("Aj0DOIFRnyICYBXIlSHyg");
	this.shape_872.setTransform(1198.4,3586.025);

	this.shape_873 = new cjs.Shape();
	this.shape_873.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.6,-1.1,-4.6).s().p("AipCmIFTnyIAAHVIlTDEg");
	this.shape_873.setTransform(1205.95,3598.775);

	this.shape_874 = new cjs.Shape();
	this.shape_874.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18,0,-29.8).s().p("AhLAoIAAinICXBYIAACmg");
	this.shape_874.setTransform(1166.325,3610.6);

	this.shape_875 = new cjs.Shape();
	this.shape_875.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DOIFSnyICXBXIlRHyg");
	this.shape_875.setTransform(1183.25,3577.275);

	this.shape_876 = new cjs.Shape();
	this.shape_876.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.3,28.6,-1.2,-4.6).s().p("AioCmIFRnyIAAHVIlRDEg");
	this.shape_876.setTransform(1190.825,3590.025);

	this.shape_877 = new cjs.Shape();
	this.shape_877.graphics.lf(["#D0D6EA","#FCF2F4"],[0,1],0,18,0,-29.8).s().p("AhLAoIAAinICXBYIAACmg");
	this.shape_877.setTransform(1151.175,3601.85);

	this.shape_878 = new cjs.Shape();
	this.shape_878.graphics.lf(["#DFE6ED","#FFFFFF"],[0,1],-24.5,0,24.5,0).s().p("Aj0DOIFRnyICYBXIlSHyg");
	this.shape_878.setTransform(1168.1,3568.525);

	this.shape_879 = new cjs.Shape();
	this.shape_879.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.3,28.6,-1.2,-4.6).s().p("AioCmIFRnyIAAHVIlRDEg");
	this.shape_879.setTransform(1175.675,3581.275);

	this.shape_880 = new cjs.Shape();
	this.shape_880.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],0,18.1,0,-29.7).s().p("AhLAoIAAimICWBXIAACmg");
	this.shape_880.setTransform(1136,3593.075);

	this.shape_881 = new cjs.Shape();
	this.shape_881.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-24.5,0,24.5,0).s().p("Aj0DOIFRnyICYBXIlSHyg");
	this.shape_881.setTransform(1152.95,3559.775);

	this.shape_882 = new cjs.Shape();
	this.shape_882.graphics.lf(["#6AA6ED","#69A1ED","#6694ED","#627DED","#5D66ED"],[0,0.235,0.502,0.776,1],7.4,28.7,-1.1,-4.5).s().p("AipCmIFTnyIAAHVIlTDEg");
	this.shape_882.setTransform(1160.5,3572.5);

	this.shape_883 = new cjs.Shape();
	this.shape_883.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,100.2,0,15.3).s().p("AgdoGIA7AiIAAPIIg7Aig");
	this.shape_883.setTransform(1158.75,3616.75);

	this.shape_884 = new cjs.Shape();
	this.shape_884.graphics.f("#ECF5FF").s().p("Axrp8IA7giMAicAT4IAABEg");
	this.shape_884.setTransform(1269,3732.25);

	this.shape_885 = new cjs.Shape();
	this.shape_885.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-355.9,0,303.4).s().p("AxriGIAAwNMAjXAUaIAAQNg");
	this.shape_885.setTransform(1269,3682.1);

	this.shape_886 = new cjs.Shape();
	this.shape_886.graphics.f("#F9CB69").s().p("A5Ds/IAAi8MAyHAc7IAAC8g");
	this.shape_886.setTransform(1278.075,3559.375);

	this.shape_887 = new cjs.Shape();
	this.shape_887.graphics.f("#FAE468").s().p("EgpNgFKMAgUgSmMAyHAc7MggUASmg");
	this.shape_887.setTransform(1381.45,3490.6);

	this.shape_888 = new cjs.Shape();
	this.shape_888.graphics.f("#F7AA67").s().p("AwJH1MAgTgSlIAAC4MggTASpg");
	this.shape_888.setTransform(1541.875,3592.55);

	this.shape_889 = new cjs.Shape();
	this.shape_889.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,262.2,0,-433.4).s().p("A5DABIAA89MAyHAc8IAAc9g");
	this.shape_889.setTransform(1278.075,3670.225);

	this.shape_890 = new cjs.Shape();
	this.shape_890.graphics.f("#ECF5FF").s().p("EgpNgFLMAgUgSkMAyHAc7MggUASkg");
	this.shape_890.setTransform(1381.45,3518.125);

	this.shape_891 = new cjs.Shape();
	this.shape_891.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,221.9,0,-99.1).s().p("AwJlMMAgTgSkIAAc3MggTASqg");
	this.shape_891.setTransform(1541.875,3703.4);

	this.shape_892 = new cjs.Shape();
	this.shape_892.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,534,0,130.3).s().p("Agcm2IA5AiIAAMpIg5Ahg");
	this.shape_892.setTransform(972.275,3383);

	this.shape_893 = new cjs.Shape();
	this.shape_893.graphics.f("#ECF5FF").s().p("AjFhhIA6ghIFSDBIAABEg");
	this.shape_893.setTransform(989.2,3436.625);

	this.shape_894 = new cjs.Shape();
	this.shape_894.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-159.4,0,306.8).s().p("AjFFEIAAtsIGMDlIAANsg");
	this.shape_894.setTransform(989.2,3394.45);

	this.shape_895 = new cjs.Shape();
	this.shape_895.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,573.2,0,169.5).s().p("Agcm1IA5AhIAAMpIg5Ahg");
	this.shape_895.setTransform(904.475,3343.825);

	this.shape_896 = new cjs.Shape();
	this.shape_896.graphics.f("#ECF5FF").s().p("AjGhhIA7giIFRDDIAABEg");
	this.shape_896.setTransform(921.4,3397.45);

	this.shape_897 = new cjs.Shape();
	this.shape_897.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-120.2,0,346).s().p("AjGFDIAAtrIGMDlIAANsg");
	this.shape_897.setTransform(921.4,3355.3);

	this.shape_898 = new cjs.Shape();
	this.shape_898.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,612.3,0,208.6).s().p("Agcm2IA5AjIAAMoIg5Aig");
	this.shape_898.setTransform(836.675,3304.75);

	this.shape_899 = new cjs.Shape();
	this.shape_899.graphics.f("#ECF5FF").s().p("AjFhhIA6giIFSDCIAABFg");
	this.shape_899.setTransform(853.6,3358.4);

	this.shape_900 = new cjs.Shape();
	this.shape_900.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-81.2,0,385).s().p("AjFFEIAAtsIGMDlIAANsg");
	this.shape_900.setTransform(853.6,3316.225);

	this.shape_901 = new cjs.Shape();
	this.shape_901.graphics.f("#586BC1").s().p("Ao4kLIAAh3IRxKPIAAB2g");
	this.shape_901.setTransform(840.95,3455.275);

	this.shape_902 = new cjs.Shape();
	this.shape_902.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-82.1,0,82.2,0).s().p("As1i1IH6kkIRxKPIn6Ejg");
	this.shape_902.setTransform(866.25,3434.8);

	this.shape_903 = new cjs.Shape();
	this.shape_903.graphics.f("#586BC1").s().p("Aj8BWIH5kiIAAB3In5Eig");
	this.shape_903.setTransform(923.1,3473.55);

	this.shape_904 = new cjs.Shape();
	this.shape_904.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,461.8,0,58.1).s().p("AgcoBIA5AiIAAO/Ig5Aig");
	this.shape_904.setTransform(831.125,3455.225);

	this.shape_905 = new cjs.Shape();
	this.shape_905.graphics.f("#ECF5FF").s().p("AohkpIA7giIQHJTIAABEg");
	this.shape_905.setTransform(882.75,3536.425);

	this.shape_906 = new cjs.Shape();
	this.shape_906.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-251.6,0,214.6).s().p("AohDHIAAwDIRCJ2IAAQDg");
	this.shape_906.setTransform(882.75,3486.725);

	this.shape_907 = new cjs.Shape();
	this.shape_907.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,368.4,0,-35.3).s().p("AgcrJIA5AhIAAVRIg5Ahg");
	this.shape_907.setTransform(959.425,3548.575);

	this.shape_908 = new cjs.Shape();
	this.shape_908.graphics.f("#ECF5FF").s().p("Ak7ilIA6ghII9FJIAABEg");
	this.shape_908.setTransform(988.125,3636.575);

	this.shape_909 = new cjs.Shape();
	this.shape_909.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-331.7,0,134.5).s().p("Ak7IUIAA2UIJ3FtIAAWUg");
	this.shape_909.setTransform(988.125,3566.825);

	this.shape_910 = new cjs.Shape();
	this.shape_910.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,739.9,0,203.2).s().p("AwCn0IAAh6MAgFASgIhrA9g");
	this.shape_910.setTransform(1140.575,3142.975);

	this.shape_911 = new cjs.Shape();
	this.shape_911.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,740.4,0,203.8).s().p("Av8IsIf4yVIAAB6I+NRZg");
	this.shape_911.setTransform(935.85,3142.45);

	this.shape_912 = new cjs.Shape();
	this.shape_912.graphics.f("#ECF5FF").s().p("EgkRgAEMAkMgU1MAkWAU+MgkLAU1gA/+gEMAgEASgIf6yXMggFgSgg");
	this.shape_912.setTransform(1038.5,3198.625);

	this.shape_913 = new cjs.Shape();
	this.shape_913.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,249.2,0,-734.2).s().p("AyLPtMAAAg0ZMAkXAVAMAAAA0Zg");
	this.shape_913.setTransform(922.725,3432.85);

	this.shape_914 = new cjs.Shape();
	this.shape_914.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-232.1,0,232.2,0).s().p("EgkRgAEMAkMgU1MAkWAU+MgkLAU1g");
	this.shape_914.setTransform(1038.5,3198.625);

	this.shape_915 = new cjs.Shape();
	this.shape_915.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,399.1,0,-66.3).s().p("AyFvyMAkLgU1MAAAA0aMgkLAU1g");
	this.shape_915.setTransform(1154.875,3433.525);

	this.instance_20 = new lib.Path_5();
	this.instance_20.setTransform(1439.3,3016.4,1,1,0,0,0,76,57.9);
	this.instance_20.alpha = 0.3008;
	this.instance_20.compositeOperation = "overlay";

	this.shape_916 = new cjs.Shape();
	this.shape_916.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-76,0,76,0).s().p("Ar3mNIJ2lqIN5SFIp3Fqg");
	this.shape_916.setTransform(1439.3,3034.525);

	this.instance_21 = new lib.Path_2_1();
	this.instance_21.setTransform(1558.8,2947.85,1,1,0,0,0,76,57.9);
	this.instance_21.alpha = 0.3008;
	this.instance_21.compositeOperation = "overlay";

	this.shape_917 = new cjs.Shape();
	this.shape_917.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-76,0,76,0).s().p("Ar3mNIJ3lqIN4SFIp3Fqg");
	this.shape_917.setTransform(1558.825,2965.975);

	this.shape_918 = new cjs.Shape();
	this.shape_918.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-43.6,187.9,-11.6,49).s().p("AgamJIA1AfIAALVIg1Afg");
	this.shape_918.setTransform(1266.7,3157.35);

	this.shape_919 = new cjs.Shape();
	this.shape_919.graphics.f("#ECF5FF").s().p("AiyhXIA2geIEvCuIAAA9g");
	this.shape_919.setTransform(1281.9,3205.5);

	this.shape_920 = new cjs.Shape();
	this.shape_920.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-89.5,0,168.5).s().p("AiyEjIAAsTIFlDOIAAMTg");
	this.shape_920.setTransform(1281.9,3167.625);

	this.shape_921 = new cjs.Shape();
	this.shape_921.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-40.3,174.1,-8.4,35.2).s().p("AgZmJIAzAeIAALXIgzAeg");
	this.shape_921.setTransform(1308.825,3181.625);

	this.shape_922 = new cjs.Shape();
	this.shape_922.graphics.f("#ECF5FF").s().p("AixhXIA0geIEvCtIAAA+g");
	this.shape_922.setTransform(1324.025,3229.8);

	this.shape_923 = new cjs.Shape();
	this.shape_923.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-113.8,0,144.2).s().p("AixEjIAAsTIFjDOIAAMTg");
	this.shape_923.setTransform(1324.025,3191.925);

	this.shape_924 = new cjs.Shape();
	this.shape_924.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,117.9,0,-383.6).s().p("AgZFsIAArWIAzgfIAAMTg");
	this.shape_924.setTransform(1639.625,3274.8);

	this.shape_925 = new cjs.Shape();
	this.shape_925.graphics.f("#ECF5FF").s().p("AixA5IEviuIA0AeIljDNg");
	this.shape_925.setTransform(1624.425,3322.975);

	this.shape_926 = new cjs.Shape();
	this.shape_926.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-248.9,0,130.2).s().p("AixkiIFjjOIAAMTIljDOg");
	this.shape_926.setTransform(1624.425,3285.075);

	this.shape_927 = new cjs.Shape();
	this.shape_927.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,53.3,0,-448.3).s().p("AgZFsIAArXIAzgeIAAMTg");
	this.shape_927.setTransform(1527.375,3339.45);

	this.shape_928 = new cjs.Shape();
	this.shape_928.graphics.f("#ECF5FF").s().p("AixA4IEvitIA0AeIljDNg");
	this.shape_928.setTransform(1512.175,3387.65);

	this.shape_929 = new cjs.Shape();
	this.shape_929.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-313.6,0,65.5).s().p("AixkiIFjjOIAAMTIljDOg");
	this.shape_929.setTransform(1512.175,3349.75);

	this.shape_930 = new cjs.Shape();
	this.shape_930.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,275.7,0,-225.8).s().p("AgZFsIAArXIAzgeIAAMTg");
	this.shape_930.setTransform(1639.625,3116.975);

	this.shape_931 = new cjs.Shape();
	this.shape_931.graphics.f("#ECF5FF").s().p("AixA5IEviuIA0AeIljDNg");
	this.shape_931.setTransform(1624.425,3165.125);

	this.shape_932 = new cjs.Shape();
	this.shape_932.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-91.1,0,288).s().p("AixkiIFjjNIAAMSIljDOg");
	this.shape_932.setTransform(1624.425,3127.25);

	this.shape_933 = new cjs.Shape();
	this.shape_933.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,211.1,0,-290.4).s().p("AgZFsIAArXIAzgeIAAMTg");
	this.shape_933.setTransform(1527.375,3181.625);

	this.shape_934 = new cjs.Shape();
	this.shape_934.graphics.f("#ECF5FF").s().p("AixA4IEvitIA0AeIljDNg");
	this.shape_934.setTransform(1512.175,3229.8);

	this.shape_935 = new cjs.Shape();
	this.shape_935.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-155.8,0,223.3).s().p("AixkiIFjjOIAAMTIljDOg");
	this.shape_935.setTransform(1512.175,3191.925);

	this.shape_936 = new cjs.Shape();
	this.shape_936.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-96.6,470.9,90.3,-405.8).s().p("Az+oxISDlfIV6cig");
	this.shape_936.setTransform(1311.725,3073.3);

	this.shape_937 = new cjs.Shape();
	this.shape_937.graphics.lf(["#FF5178","#BF469F"],[0,1],-184.5,0,184.5,0).s().p("AKyoqISDlfMgnmAW0IyDFfg");
	this.shape_937.setTransform(1368.35,2926.45);

	this.shape_938 = new cjs.Shape();
	this.shape_938.graphics.lf(["#FF7478","#F5509F"],[0,1],-196.9,0,196.9,0).s().p("A+wi2MAnmgW1IV7ciMgnnAW1g");
	this.shape_938.setTransform(1496.25,3000.25);

	this.shape_939 = new cjs.Shape();
	this.shape_939.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-63.1,296.1,123.8,-580.6).s().p("Az+OMMAAAgzcMAn9AXEMAAAAzdg");
	this.shape_939.setTransform(1311.725,3255.4);

	this.shape_940 = new cjs.Shape();
	this.shape_940.graphics.f("#A498A2").s().p("EgnxgAGMAnmgW2MAn+AXDMgnoAW2g");
	this.shape_940.setTransform(1438.5,3017.8);

	this.shape_941 = new cjs.Shape();
	this.shape_941.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-23,319.1,2.3,-30.8).s().p("AzzuTMAnngW2MAAAAzdMgnnAW2g");
	this.shape_941.setTransform(1566.375,3256.3);

	this.instance_22 = new lib.Path_4();
	this.instance_22.setTransform(2396.5,3584.3,1,1,0,0,0,63.6,48.5);
	this.instance_22.alpha = 0.3008;
	this.instance_22.compositeOperation = "overlay";

	this.shape_942 = new cjs.Shape();
	this.shape_942.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-63.6,0,63.6,0).s().p("Ap7lMIIQkvILnPIIoQEvg");
	this.shape_942.setTransform(2396.5,3599.375);

	this.instance_23 = new lib.Path_2_0();
	this.instance_23.setTransform(2466.9,3543.8,1,1,0,0,0,63.6,48.5);
	this.instance_23.alpha = 0.3008;
	this.instance_23.compositeOperation = "overlay";

	this.shape_943 = new cjs.Shape();
	this.shape_943.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-63.6,0,63.6,0).s().p("Ap7lMIIQkvILnPIIoQEvg");
	this.shape_943.setTransform(2466.9,3558.875);

	this.shape_944 = new cjs.Shape();
	this.shape_944.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],10.5,152.9,-38.3,-566.1).s().p("AgTEcIAAo4IAogXIAAJng");
	this.shape_944.setTransform(2674.7,3905.925);

	this.shape_945 = new cjs.Shape();
	this.shape_945.graphics.f("#ECF5FF").s().p("AiKAtIDsiIIApAYIkVCfg");
	this.shape_945.setTransform(2662.8,3943.6);

	this.shape_946 = new cjs.Shape();
	this.shape_946.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-351.8,0,74.2).s().p("AiKjjIEVihIAAJoIkVChg");
	this.shape_946.setTransform(2662.8,3913.975);

	this.shape_947 = new cjs.Shape();
	this.shape_947.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],8.1,118.1,-40.7,-600.9).s().p("AgUEdIAAo4IApgYIAAJng");
	this.shape_947.setTransform(2605.8,3945.6);

	this.shape_948 = new cjs.Shape();
	this.shape_948.graphics.f("#ECF5FF").s().p("AiKAtIDsiIIApAXIkVCgg");
	this.shape_948.setTransform(2593.925,3983.275);

	this.shape_949 = new cjs.Shape();
	this.shape_949.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-391.5,0,34.5).s().p("AiKjjIEVihIAAJnIkVChg");
	this.shape_949.setTransform(2593.925,3953.65);

	this.shape_950 = new cjs.Shape();
	this.shape_950.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],5.7,83.1,-43.1,-635.9).s().p("AgUEdIAAo4IAogYIAAJng");
	this.shape_950.setTransform(2536.95,3985.475);

	this.shape_951 = new cjs.Shape();
	this.shape_951.graphics.f("#ECF5FF").s().p("AiKAtIDsiIIApAXIkVCgg");
	this.shape_951.setTransform(2525.05,4023.175);

	this.shape_952 = new cjs.Shape();
	this.shape_952.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-431.3,0,-5.3).s().p("AiKjjIEVihIAAJoIkVChg");
	this.shape_952.setTransform(2525.05,3993.525);

	this.shape_953 = new cjs.Shape();
	this.shape_953.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],21.2,310.2,-27.6,-408.8).s().p("AgTEcIAAo4IAngXIAAJng");
	this.shape_953.setTransform(2367.1,3768.775);

	this.shape_954 = new cjs.Shape();
	this.shape_954.graphics.f("#ECF5FF").s().p("AiKAsIDsiHIApAXIkVChg");
	this.shape_954.setTransform(2355.2,3806.45);

	this.shape_955 = new cjs.Shape();
	this.shape_955.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-214.6,0,211.4).s().p("AiKjjIEVihIAAJoIkVChg");
	this.shape_955.setTransform(2355.2,3776.825);

	this.shape_956 = new cjs.Shape();
	this.shape_956.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],23.2,340.3,-25.6,-378.6).s().p("AgUEcIAAo3IAogYIAAJng");
	this.shape_956.setTransform(2426.5,3734.525);

	this.shape_957 = new cjs.Shape();
	this.shape_957.graphics.f("#ECF5FF").s().p("AiKAtIDsiIIAqAYIkWCfg");
	this.shape_957.setTransform(2414.6,3772.2);

	this.shape_958 = new cjs.Shape();
	this.shape_958.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-180.4,0,245.6).s().p("AiKjjIEWihIAAJoIkWChg");
	this.shape_958.setTransform(2414.6,3742.575);

	this.shape_959 = new cjs.Shape();
	this.shape_959.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-45,463,-23,235.4).s().p("AgTkzIAnAXIAAI4IgnAYg");
	this.shape_959.setTransform(2170.75,3710.6);

	this.shape_960 = new cjs.Shape();
	this.shape_960.graphics.f("#ECF5FF").s().p("AiLhEIAqgXIDsCIIAAAvg");
	this.shape_960.setTransform(2182.65,3748.275);

	this.shape_961 = new cjs.Shape();
	this.shape_961.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-132.7,0,209.3).s().p("AiLDjIAApmIEWChIAAJmg");
	this.shape_961.setTransform(2182.65,3718.65);

	this.shape_962 = new cjs.Shape();
	this.shape_962.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-43.4,447.3,-21.4,219.7).s().p("AgUkzIAoAXIAAI5IgoAXg");
	this.shape_962.setTransform(2203.7,3729.6);

	this.shape_963 = new cjs.Shape();
	this.shape_963.graphics.f("#ECF5FF").s().p("AiLhEIApgXIDuCIIAAAvg");
	this.shape_963.setTransform(2215.6,3767.275);

	this.shape_964 = new cjs.Shape();
	this.shape_964.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-151.7,0,190.3).s().p("AiLDjIAApnIEXChIAAJng");
	this.shape_964.setTransform(2215.6,3737.65);

	this.shape_965 = new cjs.Shape();
	this.shape_965.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],24.4,357.5,-24.4,-361.6).s().p("AghHBIAAuBIBDgoIAAPRg");
	this.shape_965.setTransform(2496.425,3712.5);

	this.shape_966 = new cjs.Shape();
	this.shape_966.graphics.f("#ECF5FF").s().p("AjmBKIGIjiIBFAoInNEJg");
	this.shape_966.setTransform(2476.775,3772.7);

	this.shape_967 = new cjs.Shape();
	this.shape_967.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-163.6,0,262.4).s().p("AjmliIHNkLIAAPRInNEKg");
	this.shape_967.setTransform(2476.775,3725.8);

	this.shape_968 = new cjs.Shape();
	this.shape_968.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],26.2,383.6,-22.6,-335.4).s().p("AghHBIAAuBIBDgoIAAPRg");
	this.shape_968.setTransform(2548,3682.8);

	this.shape_969 = new cjs.Shape();
	this.shape_969.graphics.f("#ECF5FF").s().p("AjmBKIGJjiIBEAnInNEJg");
	this.shape_969.setTransform(2528.325,3743);

	this.shape_970 = new cjs.Shape();
	this.shape_970.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-133.9,0,292.1).s().p("AjmliIHNkLIAAPQInNEKg");
	this.shape_970.setTransform(2528.325,3696.1);

	this.shape_971 = new cjs.Shape();
	this.shape_971.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-32.3,331.8,-10.3,104.1).s().p("AghohIBDAoIAAPzIhDAng");
	this.shape_971.setTransform(2128.8,3839);

	this.shape_972 = new cjs.Shape();
	this.shape_972.graphics.f("#ECF5FF").s().p("AjmhwIBEgoIGJDiIAABPg");
	this.shape_972.setTransform(2148.475,3904.875);

	this.shape_973 = new cjs.Shape();
	this.shape_973.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-266.3,0,75.6).s().p("AjmGdIAAxDIHNELIAARCg");
	this.shape_973.setTransform(2148.475,3852.3);

	this.shape_974 = new cjs.Shape();
	this.shape_974.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-48.4,347.5,38.3,-250.3).s().p("Avom4IOIkSIRIWVg");
	this.shape_974.setTransform(2208.8,3681.825);

	this.shape_975 = new cjs.Shape();
	this.shape_975.graphics.lf(["#FF5178","#BF469F"],[0,1],-176.5,0,176.6,0).s().p("ANeprIOHkSMgpCAXpIuIESg");
	this.shape_975.setTransform(2285.3,3548.35);

	this.shape_976 = new cjs.Shape();
	this.shape_976.graphics.lf(["#FF7478","#F5509F"],[0,1],-186.2,0,186.3,0).s().p("A9GAqMApDgXpIRJWWMgpCAXpg");
	this.shape_976.setTransform(2385.35,3606.125);

	this.shape_977 = new cjs.Shape();
	this.shape_977.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-40,276.1,46.7,-321.7).s().p("AvoANIAAycIfRSDIAAScg");
	this.shape_977.setTransform(2208.8,3754.45);

	this.shape_978 = new cjs.Shape();
	this.shape_978.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-21.2,244.5,2,-21.9).s().p("A0hCnMApDgXpIAASdMgpDAXog");
	this.shape_978.setTransform(2440.225,3736.625);

	this.shape_979 = new cjs.Shape();
	this.shape_979.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-29,298.9,-7,71.3).s().p("AgUkzIApAYIAAI4IgpAXg");
	this.shape_979.setTransform(2248.325,3883.725);

	this.shape_980 = new cjs.Shape();
	this.shape_980.graphics.f("#ECF5FF").s().p("AiKhEIApgXIDtCIIAAAvg");
	this.shape_980.setTransform(2260.2,3921.425);

	this.shape_981 = new cjs.Shape();
	this.shape_981.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-305.8,0,36.2).s().p("AiKDkIAApoIEWChIAAJog");
	this.shape_981.setTransform(2260.2,3891.775);

	this.shape_982 = new cjs.Shape();
	this.shape_982.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-31.2,322,-9.2,94.4).s().p("AgUkzIApAXIAAI4IgpAYg");
	this.shape_982.setTransform(2199.875,3855.75);

	this.shape_983 = new cjs.Shape();
	this.shape_983.graphics.f("#ECF5FF").s().p("AiKhEIApgXIDsCIIAAAvg");
	this.shape_983.setTransform(2211.75,3893.425);

	this.shape_984 = new cjs.Shape();
	this.shape_984.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-277.8,0,64.1).s().p("AiKDkIAApoIEVCiIAAJng");
	this.shape_984.setTransform(2211.75,3863.8);

	this.shape_985 = new cjs.Shape();
	this.shape_985.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-18,123.9,68.7,-473.9).s().p("A7TlvIAA0CMA2nAfhIAAUCg");
	this.shape_985.setTransform(2283.6,3920.725);

	this.shape_986 = new cjs.Shape();
	this.shape_986.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],32.1,188.4,-14.3,-84.1).s().p("A0dB1MAo7gXqIAAUBMgo7AXqg");
	this.shape_986.setTransform(2589.45,3945.875);

	this.shape_987 = new cjs.Shape();
	this.shape_987.graphics.f("#ECF5FF").s().p("EgvxgD7MAo7gXrMA2oAfhMgo7AXrg");
	this.shape_987.setTransform(2414.6,3780.9);

	this.instance_24 = new lib.Path_3();
	this.instance_24.setTransform(2175.35,3429.45,1,1,0,0,0,63.6,48.5);
	this.instance_24.alpha = 0.3008;
	this.instance_24.compositeOperation = "overlay";

	this.instance_25 = new lib.Path_1();
	this.instance_25.setTransform(2087.95,3479.9,1,1,0,0,0,63.6,48.5);
	this.instance_25.alpha = 0.3008;
	this.instance_25.compositeOperation = "overlay";

	this.instance_26 = new lib.Path_2();
	this.instance_26.setTransform(2000.55,3530.3,1,1,0,0,0,63.6,48.5);
	this.instance_26.alpha = 0.3008;
	this.instance_26.compositeOperation = "overlay";

	this.shape_988 = new cjs.Shape();
	this.shape_988.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-63.6,0,63.6,0).s().p("Ap7lMIIQkvILnPIIoQEvg");
	this.shape_988.setTransform(2175.35,3444.55);

	this.shape_989 = new cjs.Shape();
	this.shape_989.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-63.6,0,63.6,0).s().p("Ap7lMIIQkvILnPIIoQEvg");
	this.shape_989.setTransform(2087.95,3494.975);

	this.shape_990 = new cjs.Shape();
	this.shape_990.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-63.6,0,63.6,0).s().p("Ap7lNIIQkuILnPIIoPEvg");
	this.shape_990.setTransform(2000.55,3545.4);

	this.shape_991 = new cjs.Shape();
	this.shape_991.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-12.7,143.4,3.9,-42.8).s().p("AgWE/IAAp9IAtgaIAAKxg");
	this.shape_991.setTransform(2271.2,3581.875);

	this.shape_992 = new cjs.Shape();
	this.shape_992.graphics.f("#ECF5FF").s().p("AibAyIEJiZIAuAbIk3Czg");
	this.shape_992.setTransform(2257.875,3624.1);

	this.shape_993 = new cjs.Shape();
	this.shape_993.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-70.9,0,236.8).s().p("Aibj+IE3i1IAAKyIk3C0g");
	this.shape_993.setTransform(2257.875,3590.9);

	this.shape_994 = new cjs.Shape();
	this.shape_994.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-10.5,119,6.1,-67.2).s().p("AgWE/IAAp9IAtgaIAAKxg");
	this.shape_994.setTransform(2234.25,3603.175);

	this.shape_995 = new cjs.Shape();
	this.shape_995.graphics.f("#ECF5FF").s().p("AibAyIEJiYIAuAaIk3Czg");
	this.shape_995.setTransform(2220.925,3645.375);

	this.shape_996 = new cjs.Shape();
	this.shape_996.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-92.2,0,215.5).s().p("Aibj+IE3i0IAAKxIk3C0g");
	this.shape_996.setTransform(2220.925,3612.175);

	this.shape_997 = new cjs.Shape();
	this.shape_997.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-2.9,33.6,13.7,-152.6).s().p("AgWE/IAAp8IAtgbIAAKxg");
	this.shape_997.setTransform(2104.8,3677.725);

	this.shape_998 = new cjs.Shape();
	this.shape_998.graphics.f("#ECF5FF").s().p("AibAyIEJiZIAuAbIk3Czg");
	this.shape_998.setTransform(2091.475,3719.95);

	this.shape_999 = new cjs.Shape();
	this.shape_999.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-166.7,0,141).s().p("Aibj+IE3i1IAAKyIk3C0g");
	this.shape_999.setTransform(2091.475,3686.75);

	this.shape_1000 = new cjs.Shape();
	this.shape_1000.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-0.7,9.2,15.9,-177).s().p("AgWE/IAAp9IAtgaIAAKxg");
	this.shape_1000.setTransform(2067.85,3699.025);

	this.shape_1001 = new cjs.Shape();
	this.shape_1001.graphics.f("#ECF5FF").s().p("AibAyIEJiZIAuAbIk3Czg");
	this.shape_1001.setTransform(2054.525,3741.25);

	this.shape_1002 = new cjs.Shape();
	this.shape_1002.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-188,0,119.7).s().p("Aibj+IE3i1IAAKyIk3C0g");
	this.shape_1002.setTransform(2054.525,3708.05);

	this.shape_1003 = new cjs.Shape();
	this.shape_1003.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-0.8,159.7,-0.1,19.6).s().p("AgWlYIAtAaIAAJ9IgtAag");
	this.shape_1003.setTransform(1943.7,3699.025);

	this.shape_1004 = new cjs.Shape();
	this.shape_1004.graphics.f("#ECF5FF").s().p("AibhMIAugbIEJCZIAAA1g");
	this.shape_1004.setTransform(1957,3741.25);

	this.shape_1005 = new cjs.Shape();
	this.shape_1005.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-214.7,0,77.1).s().p("AibD/IAAqyIE3C1IAAKxg");
	this.shape_1005.setTransform(1957,3708.05);

	this.shape_1006 = new cjs.Shape();
	this.shape_1006.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-1.3,237.3,-0.6,97.2).s().p("AgWlYIAtAaIAAJ9IgtAag");
	this.shape_1006.setTransform(1807.8,3620.675);

	this.shape_1007 = new cjs.Shape();
	this.shape_1007.graphics.f("#ECF5FF").s().p("AibhMIAugaIEJCYIAAA1g");
	this.shape_1007.setTransform(1821.125,3662.875);

	this.shape_1008 = new cjs.Shape();
	this.shape_1008.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-136.4,0,155.4).s().p("AibD/IAAqxIE3C0IAAKxg");
	this.shape_1008.setTransform(1821.125,3629.675);

	this.shape_1009 = new cjs.Shape();
	this.shape_1009.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-1,181.5,-0.3,41.4).s().p("AglpiIBLAsIAARtIhLAsg");
	this.shape_1009.setTransform(1865.35,3676.85);

	this.shape_1010 = new cjs.Shape();
	this.shape_1010.graphics.f("#ECF5FF").s().p("AkBh+IBLgsIG4D8IAABZg");
	this.shape_1010.setTransform(1887.4,3750.65);

	this.shape_1011 = new cjs.Shape();
	this.shape_1011.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],0,-198.4,0,93.4).s().p("AkBHOIAAzFIIDErIAATEg");
	this.shape_1011.setTransform(1887.4,3691.75);

	this.shape_1012 = new cjs.Shape();
	this.shape_1012.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-18.5,276.3,20.2,-270.4).s().p("AxgnsIP0k0ITNZBg");
	this.shape_1012.setTransform(1893.675,3593.025);

	this.shape_1013 = new cjs.Shape();
	this.shape_1013.graphics.lf(["#FF5178","#BF469F"],[0,1],-197.7,0,197.8,0).s().p("APFq1IP1kzMgt/AaeIv0Ezg");
	this.shape_1013.setTransform(1979.375,3443.55);

	this.shape_1014 = new cjs.Shape();
	this.shape_1014.graphics.lf(["#FF7478","#F5509F"],[0,1],-208.6,0,208.7,0).s().p("EgglAAvMAt+gaeITOZBMgt/Aaeg");
	this.shape_1014.setTransform(2091.45,3508.25);

	this.shape_1015 = new cjs.Shape();
	this.shape_1015.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-13.3,187.3,25.4,-359.4).s().p("AxgBeIAA3JMAjBAUOIAAXJg");
	this.shape_1015.setTransform(1893.675,3682.375);

	this.shape_1016 = new cjs.Shape();
	this.shape_1016.graphics.f("#A498A2").s().p("EgofADJMAt9gafMAjDAUOMgt/Aafg");
	this.shape_1016.setTransform(2040.85,3523.625);

	this.shape_1017 = new cjs.Shape();
	this.shape_1017.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-17.1,238.1,1.5,-19.8).s().p("A2/BrMAt/gafIAAXKMgt/Aafg");
	this.shape_1017.setTransform(2152.925,3662.45);

	this.instance_27 = new lib.Path_0();
	this.instance_27.setTransform(2270.3,2753.35,1,1,0,0,0,536,229.9);
	this.instance_27.alpha = 0.3008;
	this.instance_27.compositeOperation = "overlay";

	this.shape_1018 = new cjs.Shape();
	this.shape_1018.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgjMB+oBJGIgVAkg");
	this.shape_1018.setTransform(2210.725,2964.55);

	this.shape_1019 = new cjs.Shape();
	this.shape_1019.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgkMB+oBJHIgVAkg");
	this.shape_1019.setTransform(2225.275,2947.075);

	this.shape_1020 = new cjs.Shape();
	this.shape_1020.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgkMB+oBJHIgVAkg");
	this.shape_1020.setTransform(2312.675,2855.625);

	this.shape_1021 = new cjs.Shape();
	this.shape_1021.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgkMB+oBJHIgVAkg");
	this.shape_1021.setTransform(2329.5,2835.625);

	this.shape_1022 = new cjs.Shape();
	this.shape_1022.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrRAvGg");
	this.shape_1022.setTransform(2587.875,3082.075);

	this.shape_1023 = new cjs.Shape();
	this.shape_1023.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1023.setTransform(2503.675,3033.625);

	this.shape_1024 = new cjs.Shape();
	this.shape_1024.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1024.setTransform(2412.625,2985.125);

	this.shape_1025 = new cjs.Shape();
	this.shape_1025.graphics.f("#ECF5FF").s().p("A2OXNMArSgvGIBLAtMgrRAvGg");
	this.shape_1025.setTransform(2326.125,2931.875);

	this.shape_1026 = new cjs.Shape();
	this.shape_1026.graphics.f("#ECF5FF").s().p("A2OXNMArSgvGIBLAtMgrRAvFg");
	this.shape_1026.setTransform(2233.875,2878.55);

	this.shape_1027 = new cjs.Shape();
	this.shape_1027.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1027.setTransform(2142.325,2824.575);

	this.shape_1028 = new cjs.Shape();
	this.shape_1028.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1028.setTransform(2048.675,2772.325);

	this.shape_1029 = new cjs.Shape();
	this.shape_1029.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1029.setTransform(1955.025,2720.075);

	this.shape_1030 = new cjs.Shape();
	this.shape_1030.graphics.f("#ECF5FF").s().p("EAnNA9GMh8PhHuQghgTgVgfQgVgfgGglQgGglALgkQALgkAagcMAqPgt/QAXgaAhgOQAfgOAjAAQArAAAnAXMB9QBH1QAhATAWAfQAVAfAGAmQAFAlgLAlQgMAkgaAbMgrQAt4QgYAaggAOQgeAMgiAAQgtABgmgXgEhTwgM3MB8QBHuMArQgt3Mh9QhH2g");
	this.shape_1030.setTransform(2270.3581,2900.15);

	this.shape_1031 = new cjs.Shape();
	this.shape_1031.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-536,0,536.1,0).s().p("EhTwgM3MAqQgt/MB9QBH1MgrQAt4g");
	this.shape_1031.setTransform(2270.35,2900.175);

	this.shape_1032 = new cjs.Shape();
	this.shape_1032.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-9.4,198.4,16.9,-356.4).s().p("Eg9YgfxIAAnWMB6xBG4IAAHXg");
	this.shape_1032.setTransform(2110.725,3150.375);

	this.shape_1033 = new cjs.Shape();
	this.shape_1033.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],40.8,734.4,29.8,537.1).s().p("EAnNA9HMh8PhHvQghgTgVgfQgVgfgGglQgGglALgkQALgkAagcMAqPgt/QAXgaAhgOQAfgOAjAAQAsAAAmAXMB9QBH1QAhASAWAgQAVAgAGAlQAFAmgLAjQgLAlgbAbMgrQAt4QgYAaggAOQgeAMgiAAQgtAAgmgVgEhTwgM3MB8QBHuMArQgt4Mh9QhH1g");
	this.shape_1033.setTransform(2270.3581,2915.45);

	this.shape_1034 = new cjs.Shape();
	this.shape_1034.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],79.5,238.5,-30.1,-90.5).s().p("A3fJ4MAu/gbGIAAHXMgu/AbFg");
	this.shape_1034.setTransform(2654.05,3290.5);

	this.shape_1035 = new cjs.Shape();
	this.shape_1035.graphics.f("#ECF5FF").s().p("EhU4gV2MAvHgbLMB6qBG8MgvAAbHg");
	this.shape_1035.setTransform(2261.125,3039.925);

	this.instance_28 = new lib.Path();
	this.instance_28.setTransform(2793.2,2452.4,1,1,0,0,0,536,229.9);
	this.instance_28.alpha = 0.3008;
	this.instance_28.compositeOperation = "overlay";

	this.shape_1036 = new cjs.Shape();
	this.shape_1036.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgkMB+oBJHIgVAjg");
	this.shape_1036.setTransform(2733.625,2663.6);

	this.shape_1037 = new cjs.Shape();
	this.shape_1037.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgkMB+oBJHIgVAkg");
	this.shape_1037.setTransform(2748.175,2646.125);

	this.shape_1038 = new cjs.Shape();
	this.shape_1038.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgkMB+oBJHIgVAkg");
	this.shape_1038.setTransform(2835.575,2554.675);

	this.shape_1039 = new cjs.Shape();
	this.shape_1039.graphics.f("#ECF5FF").s().p("Eg/egkRIAVgkMB+oBJHIgVAkg");
	this.shape_1039.setTransform(2852.4,2534.675);

	this.shape_1040 = new cjs.Shape();
	this.shape_1040.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1040.setTransform(3110.775,2781.125);

	this.shape_1041 = new cjs.Shape();
	this.shape_1041.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1041.setTransform(3026.575,2732.675);

	this.shape_1042 = new cjs.Shape();
	this.shape_1042.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1042.setTransform(2935.525,2684.175);

	this.shape_1043 = new cjs.Shape();
	this.shape_1043.graphics.f("#ECF5FF").s().p("A2OXNMArSgvGIBLAtMgrSAvGg");
	this.shape_1043.setTransform(2849.025,2630.925);

	this.shape_1044 = new cjs.Shape();
	this.shape_1044.graphics.f("#ECF5FF").s().p("A2OXNMArSgvGIBLAtMgrSAvFg");
	this.shape_1044.setTransform(2756.775,2577.6);

	this.shape_1045 = new cjs.Shape();
	this.shape_1045.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1045.setTransform(2665.225,2523.625);

	this.shape_1046 = new cjs.Shape();
	this.shape_1046.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1046.setTransform(2571.575,2471.375);

	this.shape_1047 = new cjs.Shape();
	this.shape_1047.graphics.f("#ECF5FF").s().p("A2OXOMArSgvHIBLAtMgrSAvGg");
	this.shape_1047.setTransform(2477.925,2419.125);

	this.shape_1048 = new cjs.Shape();
	this.shape_1048.graphics.f("#ECF5FF").s().p("EAnOA9HMh8QhHvQgggSgWggQgVgfgGglQgFglALgkQALgkAZgcMAqPgt/QAYgaAggOQAggOAiAAQAtAAAlAWMB9RBH2QAhASAVAgQAWAfAFAmQAGAmgMAkQgLAlgaAaMgrRAt5QgXAZggANQgfANgiAAQgtAAglgVgEhTvgM3MB8PBHuMArRgt4Mh9RhH1g");
	this.shape_1048.setTransform(2793.2473,2599.2);

	this.shape_1049 = new cjs.Shape();
	this.shape_1049.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-536,0,536.1,0).s().p("EhTwgM3MAqQgt/MB9QBH1MgrQAt4g");
	this.shape_1049.setTransform(2793.25,2599.2);

	this.shape_1050 = new cjs.Shape();
	this.shape_1050.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-9.4,198.4,16.9,-356.4).s().p("Eg9ZgfxIAAnWMB6yBG4IAAHXg");
	this.shape_1050.setTransform(2633.6,2849.425);

	this.shape_1051 = new cjs.Shape();
	this.shape_1051.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],40.8,734.4,29.9,537.1).s().p("EAnOA9HMh8QhHvQgggTgWgfQgVgfgGglQgFglALgkQALgkAZgcMAqPgt/QAYgaAggOQAggOAiAAQAtAAAlAWMB9RBH2QAhASAVAgQAWAfAFAmQAGAlgMAkQgLAlgaAbMgrRAt5QgXAYggAOQgfANgiAAQgtAAglgVgEhTvgM3MB8PBHuMArRgt4Mh9RhH1g");
	this.shape_1051.setTransform(2793.2473,2614.5);

	this.shape_1052 = new cjs.Shape();
	this.shape_1052.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],79.5,238.5,-30.1,-90.5).s().p("A3fJ4MAu/gbGIAAHXMgu/AbFg");
	this.shape_1052.setTransform(3176.95,2989.55);

	this.shape_1053 = new cjs.Shape();
	this.shape_1053.graphics.f("#ECF5FF").s().p("EhU5gV2MAvHgbLMB6sBG8MgvBAbHg");
	this.shape_1053.setTransform(2784,2738.975);

	this.shape_1054 = new cjs.Shape();
	this.shape_1054.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,674.4,0,-1114.6).s().p("EgN7A6XMAAAiEzIb3QGMAAACEzg");
	this.shape_1054.setTransform(3010.15,2103.025);

	this.shape_1055 = new cjs.Shape();
	this.shape_1055.graphics.f("#ECF5FF").s().p("A7zgDIbvv+Ib4QFI7wP+g");
	this.shape_1055.setTransform(3098.925,1627.025);

	this.shape_1056 = new cjs.Shape();
	this.shape_1056.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,694.6,0,-310.1).s().p("EgN3g6aIbvv+MAAACEzI7vP+g");
	this.shape_1056.setTransform(3188.125,2103.55);

	this.shape_1057 = new cjs.Shape();
	this.shape_1057.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,468.6,0,-774.5).s().p("EgN7AjpMAAAhXXIb3QFMAAABXYg");
	this.shape_1057.setTransform(2768.175,2108.65);

	this.shape_1058 = new cjs.Shape();
	this.shape_1058.graphics.f("#ECF5FF").s().p("A7zgDIbvv+Ib4QFI7vP+g");
	this.shape_1058.setTransform(2856.925,1778.075);

	this.shape_1059 = new cjs.Shape();
	this.shape_1059.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,482.4,0,-215.4).s().p("EgN2gjsIbtv+MAAABXXI7tP+g");
	this.shape_1059.setTransform(2946.15,2109.15);

	this.shape_1060 = new cjs.Shape();
	this.shape_1060.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,274.6,0,-453.7).s().p("At7OOMAAAgshIb3QGMAAAAshg");
	this.shape_1060.setTransform(2540.825,2114.525);

	this.shape_1061 = new cjs.Shape();
	this.shape_1061.graphics.f("#ECF5FF").s().p("A7zgDIbvv+Ib4QFI7vP+g");
	this.shape_1061.setTransform(2629.575,1921.075);

	this.shape_1062 = new cjs.Shape();
	this.shape_1062.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,282.4,0,-126).s().p("At2uRIbuv+MAAAAsgI7uP+g");
	this.shape_1062.setTransform(2718.8,2115.05);

	this.shape_1063 = new cjs.Shape();
	this.shape_1063.graphics.f("#ECF5FF").s().p("Eg38AfbMBucg/wIBdA2MhuTA/1g");
	this.shape_1063.setTransform(3446.025,4306.425);

	this.shape_1064 = new cjs.Shape();
	this.shape_1064.graphics.f("#ECF5FF").s().p("A73vsIAtgbMA3DAfyIg0Acg");
	this.shape_1064.setTransform(3127.75,4391.25);

	this.shape_1065 = new cjs.Shape();
	this.shape_1065.graphics.f("#ECF5FF").s().p("A74vrIAvgcMA3BAfxIgyAeg");
	this.shape_1065.setTransform(3224.8,4335.3);

	this.shape_1066 = new cjs.Shape();
	this.shape_1066.graphics.f("#ECF5FF").s().p("A74vsIAvgaMA3BAfxIgyAdg");
	this.shape_1066.setTransform(3321.9,4279.35);

	this.shape_1067 = new cjs.Shape();
	this.shape_1067.graphics.f("#ECF5FF").s().p("A73vsIAugbMA3BAfxIgyAdg");
	this.shape_1067.setTransform(3418.975,4223.4);

	this.shape_1068 = new cjs.Shape();
	this.shape_1068.graphics.f("#ECF5FF").s().p("A73vsIAugaMA3BAfwIgyAdg");
	this.shape_1068.setTransform(3516.05,4167.475);

	this.shape_1069 = new cjs.Shape();
	this.shape_1069.graphics.f("#ECF5FF").s().p("A74vsIAugaMA3CAfwIgyAdg");
	this.shape_1069.setTransform(3613.15,4111.525);

	this.shape_1070 = new cjs.Shape();
	this.shape_1070.graphics.f("#ECF5FF").s().p("Eg38AfbMBucg/wIBdA2MhuTA/1g");
	this.shape_1070.setTransform(3351.725,4251.125);

	this.shape_1071 = new cjs.Shape();
	this.shape_1071.graphics.f("#ECF5FF").s().p("Eg38AfbMBubg/wIBeA2MhuTA/0g");
	this.shape_1071.setTransform(3268.075,4205.6);

	this.shape_1072 = new cjs.Shape();
	this.shape_1072.graphics.f("#ECF5FF").s().p("EhTdAQGMBvWhANMA3lAgCMhvWBANgEhQLAQGMA0TAeJMBsEg+UMg0TgeIg");
	this.shape_1072.setTransform(3361.525,4257);

	this.shape_1073 = new cjs.Shape();
	this.shape_1073.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],148.6,526.6,30.6,108.1).s().p("Eg3rAeQMBvWhANIAADuMhvWBANg");
	this.shape_1073.setTransform(3539.4,4371.4);

	this.shape_1074 = new cjs.Shape();
	this.shape_1074.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],161,570.8,43,152.3).s().p("A7yuJIAAjuMA3lAgBIAADug");
	this.shape_1074.setTransform(3005.175,4474.4);

	this.shape_1075 = new cjs.Shape();
	this.shape_1075.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-534.2,0,534.3,0).s().p("EhTdAQGMBvWhANMA3lAgCMhvWBANg");
	this.shape_1075.setTransform(3361.525,4257);

	this.shape_1076 = new cjs.Shape();
	this.shape_1076.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-188.1,-105,487,272).s().p("AqbAxILwm1IJHFTIrxG2g");
	this.shape_1076.setTransform(3988.275,3205.7);

	this.shape_1077 = new cjs.Shape();
	this.shape_1077.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-266.8,-149,408.3,228.1).s().p("AqbAxILvm1IJJFTIrzG2g");
	this.shape_1077.setTransform(4066.35,3250.9);

	this.shape_1078 = new cjs.Shape();
	this.shape_1078.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-345.6,-192.9,329.5,184.1).s().p("AqbAxILvm1IJIFTIryG2g");
	this.shape_1078.setTransform(4144.45,3296.05);

	this.shape_1079 = new cjs.Shape();
	this.shape_1079.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-424.3,-236.9,250.8,140.2).s().p("AqcAyILxm2IJIFTIryG2g");
	this.shape_1079.setTransform(4222.5,3341.2);

	this.shape_1080 = new cjs.Shape();
	this.shape_1080.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-38.1,144.3,88,-333.4).s().p("A/ytDIAAqjMA/lAksIAAKhg");
	this.shape_1080.setTransform(4014.075,3311.25);

	this.shape_1081 = new cjs.Shape();
	this.shape_1081.graphics.f("#ECF5FF").s().p("EgnUgN9IPGoxMA/jAkqIvEI0g");
	this.shape_1081.setTransform(4062.275,3249.5);

	this.shape_1082 = new cjs.Shape();
	this.shape_1082.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],31.5,153.4,2.9,14).s().p("Anhg2IPDozIAAKiIvDIxg");
	this.shape_1082.setTransform(4265.75,3400.55);

	this.shape_1083 = new cjs.Shape();
	this.shape_1083.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-66.8,-231.7,12.1,42.1).s().p("AjkAKIAAkbIHJEKIAAEYg");
	this.shape_1083.setTransform(3831.25,2823.55);

	this.shape_1084 = new cjs.Shape();
	this.shape_1084.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-69.8,-242.1,9.2,31.8).s().p("AksAhIJalbIAAEaIpaFbg");
	this.shape_1084.setTransform(3884.25,2819.475);

	this.shape_1085 = new cjs.Shape();
	this.shape_1085.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-46.1,-159.8,32.9,114.1).s().p("AjkAJIAAkaIHJEKIAAEYg");
	this.shape_1085.setTransform(3831.25,2745.6);

	this.shape_1086 = new cjs.Shape();
	this.shape_1086.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-49,-170.2,29.9,103.7).s().p("AksAgIJalaIAAEaIpaFbg");
	this.shape_1086.setTransform(3884.25,2741.55);

	this.shape_1087 = new cjs.Shape();
	this.shape_1087.graphics.f("#F7AA67").s().p("Aksq3IJZldIAAbMIpZFcg");
	this.shape_1087.setTransform(3739.375,2927.5);

	this.shape_1088 = new cjs.Shape();
	this.shape_1088.graphics.f("#F7E367").s().p("AoRApIJYlaIHLEIIpZFbg");
	this.shape_1088.setTransform(3716.5,2827.225);

	this.shape_1089 = new cjs.Shape();
	this.shape_1089.graphics.f("#F7BD67").s().p("AjkLjIAA7NIHJEJIAAbMg");
	this.shape_1089.setTransform(3686.375,2931.625);

	this.shape_1090 = new cjs.Shape();
	this.shape_1090.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],-5.2,260.5,2.4,-116.5).s().p("AkswtIJalcMAAAAm3IpaFcg");
	this.shape_1090.setTransform(3884.25,2807.15);

	this.shape_1091 = new cjs.Shape();
	this.shape_1091.graphics.f("#ECF5FF").s().p("AoRApIJYlaIHLEIIpaFbg");
	this.shape_1091.setTransform(3861.4,2669.55);

	this.shape_1092 = new cjs.Shape();
	this.shape_1092.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],21.7,142.2,-30.5,-200.4).s().p("AjkRZMAAAgm4IHJEJMAAAAm2g");
	this.shape_1092.setTransform(3831.25,2811.275);

	this.shape_1093 = new cjs.Shape();
	this.shape_1093.graphics.f("#1D5EC5").s().p("AhEMLIAA5kICIBQIAAZig");
	this.shape_1093.setTransform(3941.5,3483.2);

	this.shape_1094 = new cjs.Shape();
	this.shape_1094.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICJBPIAAZjg");
	this.shape_1094.setTransform(3962.8,3495.4);

	this.shape_1095 = new cjs.Shape();
	this.shape_1095.graphics.f("#1D5EC5").s().p("AhEMLIAA5jICJBOIAAZjg");
	this.shape_1095.setTransform(3984.05,3507.75);

	this.shape_1096 = new cjs.Shape();
	this.shape_1096.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICHBQIAAZig");
	this.shape_1096.setTransform(4005.3,3520.05);

	this.shape_1097 = new cjs.Shape();
	this.shape_1097.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICIBPIAAZkg");
	this.shape_1097.setTransform(4026.6,3532.35);

	this.shape_1098 = new cjs.Shape();
	this.shape_1098.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICIBPIAAZjg");
	this.shape_1098.setTransform(4047.85,3544.65);

	this.shape_1099 = new cjs.Shape();
	this.shape_1099.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICHBQIAAZjg");
	this.shape_1099.setTransform(4069.1,3556.825);

	this.shape_1100 = new cjs.Shape();
	this.shape_1100.graphics.f("#1D5EC5").s().p("AhEMKIAA5iICIBOIAAZkg");
	this.shape_1100.setTransform(4090.4,3569.3);

	this.shape_1101 = new cjs.Shape();
	this.shape_1101.graphics.f("#1D5EC5").s().p("AhEMLIAA5kICJBPIAAZkg");
	this.shape_1101.setTransform(4111.65,3581.5);

	this.shape_1102 = new cjs.Shape();
	this.shape_1102.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBPIAAZjg");
	this.shape_1102.setTransform(4132.9,3593.8);

	this.shape_1103 = new cjs.Shape();
	this.shape_1103.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICHBPIAAZjg");
	this.shape_1103.setTransform(3508.9,3234);

	this.shape_1104 = new cjs.Shape();
	this.shape_1104.graphics.f("#1D5EC5").s().p("AhEMLIAA5kICJBQIAAZjg");
	this.shape_1104.setTransform(3530.2,3246.2);

	this.shape_1105 = new cjs.Shape();
	this.shape_1105.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICJBPIAAZkg");
	this.shape_1105.setTransform(3551.45,3258.55);

	this.shape_1106 = new cjs.Shape();
	this.shape_1106.graphics.f("#1D5EC5").s().p("AhDMLIAA5kICHBQIAAZjg");
	this.shape_1106.setTransform(3572.725,3270.85);

	this.shape_1107 = new cjs.Shape();
	this.shape_1107.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICJBPIAAZjg");
	this.shape_1107.setTransform(3594,3283.15);

	this.shape_1108 = new cjs.Shape();
	this.shape_1108.graphics.f("#1D5EC5").s().p("AhEMKIAA5iICIBOIAAZjg");
	this.shape_1108.setTransform(3615.25,3295.45);

	this.shape_1109 = new cjs.Shape();
	this.shape_1109.graphics.f("#1D5EC5").s().p("AhDMLIAA5kICHBPIAAZkg");
	this.shape_1109.setTransform(3636.55,3307.6);

	this.shape_1110 = new cjs.Shape();
	this.shape_1110.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBQIAAZig");
	this.shape_1110.setTransform(3657.8,3320.05);

	this.shape_1111 = new cjs.Shape();
	this.shape_1111.graphics.f("#1D5EC5").s().p("AhEMKIAA5iICIBOIAAZjg");
	this.shape_1111.setTransform(3679.05,3332.3);

	this.shape_1112 = new cjs.Shape();
	this.shape_1112.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICHBQIAAZjg");
	this.shape_1112.setTransform(3700.325,3344.575);

	this.shape_1113 = new cjs.Shape();
	this.shape_1113.graphics.lf(["#9ABAED","#95B9ED","#88B4ED","#7EB1ED"],[0,0.373,0.788,1],-581.3,0,581.4,0).s().p("Eha0gQVMA+dgkGMB3MBExMg+cAkFg");
	this.shape_1113.setTransform(4036.15,3162.75);

	this.shape_1114 = new cjs.Shape();
	this.shape_1114.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBPg");
	this.shape_1114.setTransform(4380.3,3548.75);

	this.shape_1115 = new cjs.Shape();
	this.shape_1115.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBQg");
	this.shape_1115.setTransform(4401.55,3536.6);

	this.shape_1116 = new cjs.Shape();
	this.shape_1116.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBQg");
	this.shape_1116.setTransform(4422.825,3524.225);

	this.shape_1117 = new cjs.Shape();
	this.shape_1117.graphics.f("#1D5EC5").s().p("AhEsJICJhQIAAZjIiJBQg");
	this.shape_1117.setTransform(4444.1,3511.9);

	this.shape_1118 = new cjs.Shape();
	this.shape_1118.graphics.f("#1D5EC5").s().p("AhEsJICJhQIAAZjIiJBPg");
	this.shape_1118.setTransform(4465.35,3499.65);

	this.shape_1119 = new cjs.Shape();
	this.shape_1119.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBQg");
	this.shape_1119.setTransform(4486.625,3487.35);

	this.shape_1120 = new cjs.Shape();
	this.shape_1120.graphics.f("#1D5EC5").s().p("AhEsJICJhQIAAZjIiJBPg");
	this.shape_1120.setTransform(4507.9,3475.15);

	this.shape_1121 = new cjs.Shape();
	this.shape_1121.graphics.f("#1D5EC5").s().p("AhEsJICJhPIAAZiIiJBQg");
	this.shape_1121.setTransform(4529.15,3462.7);

	this.shape_1122 = new cjs.Shape();
	this.shape_1122.graphics.f("#1D5EC5").s().p("AhDsJICHhPIAAZiIiHBPg");
	this.shape_1122.setTransform(4550.45,3450.5);

	this.shape_1123 = new cjs.Shape();
	this.shape_1123.graphics.f("#1D5EC5").s().p("AhDsKICHhPIAAZkIiHBOg");
	this.shape_1123.setTransform(4571.7,3438.2);

	this.shape_1124 = new cjs.Shape();
	this.shape_1124.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],-199.8,0,199.9,0).s().p("A/NAXMA+bgkEMAAAAjWMg+bAkFg");
	this.shape_1124.setTransform(4417.675,3495.95);

	this.shape_1125 = new cjs.Shape();
	this.shape_1125.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-199,503.5,104.2,-263.3).s().p("Eg7mgQtMAAAgjWMB3NBEwMAAAAjXg");
	this.shape_1125.setTransform(3836.325,3391.375);

	this.shape_1126 = new cjs.Shape();
	this.shape_1126.graphics.f("#1D5EC5").s().p("AhEMKIAA5iICIBOIAAZkg");
	this.shape_1126.setTransform(3941.5,3750.75);

	this.shape_1127 = new cjs.Shape();
	this.shape_1127.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICJBQIAAZjg");
	this.shape_1127.setTransform(3962.8,3762.925);

	this.shape_1128 = new cjs.Shape();
	this.shape_1128.graphics.f("#1D5EC5").s().p("AhEMLIAA5kICJBPIAAZjg");
	this.shape_1128.setTransform(3984.05,3775.3);

	this.shape_1129 = new cjs.Shape();
	this.shape_1129.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICHBQIAAZig");
	this.shape_1129.setTransform(4005.3,3787.6);

	this.shape_1130 = new cjs.Shape();
	this.shape_1130.graphics.f("#1D5EC5").s().p("AhDMKIAA5iICIBOIAAZjg");
	this.shape_1130.setTransform(4026.6,3799.9);

	this.shape_1131 = new cjs.Shape();
	this.shape_1131.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICIBQIAAZjg");
	this.shape_1131.setTransform(4047.85,3812.175);

	this.shape_1132 = new cjs.Shape();
	this.shape_1132.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICHBPIAAZjg");
	this.shape_1132.setTransform(4069.1,3824.35);

	this.shape_1133 = new cjs.Shape();
	this.shape_1133.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBPIAAZjg");
	this.shape_1133.setTransform(4090.4,3836.8);

	this.shape_1134 = new cjs.Shape();
	this.shape_1134.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICJBQIAAZjg");
	this.shape_1134.setTransform(4111.65,3849.025);

	this.shape_1135 = new cjs.Shape();
	this.shape_1135.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBPIAAZjg");
	this.shape_1135.setTransform(4132.9,3861.3);

	this.shape_1136 = new cjs.Shape();
	this.shape_1136.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBPIAAZjg");
	this.shape_1136.setTransform(3508.9,3501.55);

	this.shape_1137 = new cjs.Shape();
	this.shape_1137.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICJBQIAAZjg");
	this.shape_1137.setTransform(3530.2,3513.7);

	this.shape_1138 = new cjs.Shape();
	this.shape_1138.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBPIAAZkg");
	this.shape_1138.setTransform(3551.45,3526.1);

	this.shape_1139 = new cjs.Shape();
	this.shape_1139.graphics.f("#1D5EC5").s().p("AhDMKIAA5jICHBQIAAZig");
	this.shape_1139.setTransform(3572.725,3538.4);

	this.shape_1140 = new cjs.Shape();
	this.shape_1140.graphics.f("#1D5EC5").s().p("AhEMKIAA5iICIBOIAAZjg");
	this.shape_1140.setTransform(3594,3550.7);

	this.shape_1141 = new cjs.Shape();
	this.shape_1141.graphics.f("#1D5EC5").s().p("AhDMKIAA5iICIBOIAAZjg");
	this.shape_1141.setTransform(3615.25,3562.95);

	this.shape_1142 = new cjs.Shape();
	this.shape_1142.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBQIAAZig");
	this.shape_1142.setTransform(3636.55,3575.15);

	this.shape_1143 = new cjs.Shape();
	this.shape_1143.graphics.f("#1D5EC5").s().p("AhEMLIAA5kICIBPIAAZjg");
	this.shape_1143.setTransform(3657.8,3587.6);

	this.shape_1144 = new cjs.Shape();
	this.shape_1144.graphics.f("#1D5EC5").s().p("AhEMKIAA5jICIBQIAAZjg");
	this.shape_1144.setTransform(3679.05,3599.825);

	this.shape_1145 = new cjs.Shape();
	this.shape_1145.graphics.f("#1D5EC5").s().p("AhDMKIAA5iICHBPIAAZjg");
	this.shape_1145.setTransform(3700.325,3612.1);

	this.shape_1146 = new cjs.Shape();
	this.shape_1146.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],-304.9,-522.5,281,481.3).s().p("Eha0gQVMA+dgkGMB3MBExMg+cAkGg");
	this.shape_1146.setTransform(4036.15,3430.3);

	this.shape_1147 = new cjs.Shape();
	this.shape_1147.graphics.f("#1D5EC5").s().p("AhDsKICHhOIAAZiIiHBPg");
	this.shape_1147.setTransform(4380.3,3816.3);

	this.shape_1148 = new cjs.Shape();
	this.shape_1148.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBQg");
	this.shape_1148.setTransform(4401.55,3804.125);

	this.shape_1149 = new cjs.Shape();
	this.shape_1149.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBPg");
	this.shape_1149.setTransform(4422.825,3791.75);

	this.shape_1150 = new cjs.Shape();
	this.shape_1150.graphics.f("#1D5EC5").s().p("AhEsKICJhOIAAZiIiJBPg");
	this.shape_1150.setTransform(4444.1,3779.45);

	this.shape_1151 = new cjs.Shape();
	this.shape_1151.graphics.f("#1D5EC5").s().p("AhEsJICJhQIAAZjIiJBPg");
	this.shape_1151.setTransform(4465.35,3767.15);

	this.shape_1152 = new cjs.Shape();
	this.shape_1152.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBQg");
	this.shape_1152.setTransform(4486.625,3754.875);

	this.shape_1153 = new cjs.Shape();
	this.shape_1153.graphics.f("#1D5EC5").s().p("AhEsJICJhQIAAZkIiJBOg");
	this.shape_1153.setTransform(4507.9,3742.7);

	this.shape_1154 = new cjs.Shape();
	this.shape_1154.graphics.f("#1D5EC5").s().p("AhEsKICJhPIAAZkIiJBOg");
	this.shape_1154.setTransform(4529.15,3730.25);

	this.shape_1155 = new cjs.Shape();
	this.shape_1155.graphics.f("#1D5EC5").s().p("AhDsJICHhQIAAZjIiHBQg");
	this.shape_1155.setTransform(4550.45,3718.025);

	this.shape_1156 = new cjs.Shape();
	this.shape_1156.graphics.f("#1D5EC5").s().p("AhDsJICHhPIAAZiIiHBPg");
	this.shape_1156.setTransform(4571.7,3705.75);

	this.shape_1157 = new cjs.Shape();
	this.shape_1157.graphics.lf(["#6A85ED","#6680ED","#5C73ED","#4B5CED","#4757ED"],[0,0.282,0.6,0.933,1],-199.8,0,199.9,0).s().p("A/NAYMA+bgkFMAAAAjWMg+bAkFg");
	this.shape_1157.setTransform(4417.675,3763.475);

	this.shape_1158 = new cjs.Shape();
	this.shape_1158.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-107.6,272.2,195.6,-494.6).s().p("Eg7mgQtMAAAgjWMB3NBExMAAAAjWg");
	this.shape_1158.setTransform(3836.325,3658.9);

	this.shape_1159 = new cjs.Shape();
	this.shape_1159.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],434.9,115.8,-418.1,-103.2).s().p("EAbFBPNMg8CgiqQkVigigkVQigkWAAlAMAAAhnTQAAhlAyhVQAwhPBSgvQBSgwBdgBQBigCBYAyMBCbAmXQEgCmCnEgQCmEhAAFMMAAABfEQAAC2hbCYQhWCPiUBWQiTBVinADIgMAAQirAAiYhYg");
	this.shape_1159.setTransform(3813.375,1949.401);

	this.shape_1160 = new cjs.Shape();
	this.shape_1160.graphics.lf(["#6AA6ED","#6AA1ED","#6B94ED","#6C81ED"],[0,0.318,0.675,1],-287.3,0,287.3,0).s().p("EAckBJ5Mg4VggiQkVifigkWQigkVAAlAMAAAhKNIny71IIAkpIABgBIAEgCQBRgtBcgBQBhgBBWAyMBCbAmWQEgCnCnEgQCmEgAAFNMAAABfDQAAC4hdCZQhYCQiVBVIAAAAIoFErg");
	this.shape_1160.setTransform(3846.825,1930.9978);

	this.shape_1161 = new cjs.Shape();
	this.shape_1161.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-1083.2,850.1,1780.4,-1397).s().p("EhQCgsdIDBhwMCdEBarIjBBwg");
	this.shape_1161.setTransform(3127.725,3562.225);

	this.shape_1162 = new cjs.Shape();
	this.shape_1162.graphics.f("#8DBFF2").s().p("A0DIeMAitgUCIFaDHMgisAUCg");
	this.shape_1162.setTransform(991.425,3250.45);

	this.shape_1163 = new cjs.Shape();
	this.shape_1163.graphics.lf(["#42E296","#41DB9B","#3EC7A8","#3BB3B6"],[0,0.278,0.682,1],-1177.4,0,1177.5,0).s().p("Ei39ghOMB9ShHvMDypCKMMh9VBHvg");
	this.shape_1163.setTransform(1791.825,3747.525);

	this.shape_1164 = new cjs.Shape();
	this.shape_1164.graphics.f("#EBF0F4").s().p("EBClBufMkBciSqQirhhhdimQhYidAAi2QgBi1BYieQBdimCqhiMBhyg37QFKi8F9gBQF8AAFLC8MEHDCV1QCDBLBHCAQBEB4AACMQAACLhDB6QhHB/iDBLMhjzA5GQl/Dbm6AAIgCAAQm5AAl/jZg");
	this.shape_1164.setTransform(1836.7249,3766.8);

	this.shape_1165 = new cjs.Shape();
	this.shape_1165.graphics.lf(["#EBF4FF","#E6F3FF","#D9F1FF","#C2ECFF","#A3E6FF","#8CE2FF"],[0,0.188,0.404,0.627,0.859,1],0,960.9,0,2318.8).s().p("EBClBueMkBciSpQihhchciZQhYiQgKisIgBAAIAAuVIM9AAMBaTgzqQFKi8F9gBQF8AAFLC9MD6iCOsIQvAAIAAOVQABCMhEB6QhHB/iDBMMhjzA5GQl/Dbm6AAIgCABQm5AAl/jbg");
	this.shape_1165.setTransform(1836.7252,3857.5501);

	this.shape_1166 = new cjs.Shape();
	this.shape_1166.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-1303.3,1019.6,1560.3,-1227.5).s().p("Aw9YRIcawaI88wtIDBhvIABAAIasvbIDBBwI6sPaIc8QtI/bSKg");
	this.shape_1166.setTransform(3778.225,3941);

	this.shape_1167 = new cjs.Shape();
	this.shape_1167.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-1327,1041.3,1536.6,-1205.8).s().p("AwXHtIduxJIDBBwI9uRJg");
	this.shape_1167.setTransform(3706.275,3797.5);

	this.shape_1168 = new cjs.Shape();
	this.shape_1168.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-560.6,685.2,2303,-1561.9).s().p("EjOcBCyIDChwIYKN9MB7UhHLI7qv9IDBhwIbqP+MB7ahHPI6+vkIDBhwMCf7BcVIjBBvMiB8hLAMj8wCR5g");
	this.shape_1168.setTransform(1778.875,2674);

	this.shape_1169 = new cjs.Shape();
	this.shape_1169.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-522.2,409.8,2341.4,-1837.3).s().p("EhQCAseMCdEharIDBBwMidEBarg");
	this.shape_1169.setTransform(2308.875,3673.7);

	this.shape_1170 = new cjs.Shape();
	this.shape_1170.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-689.9,541.5,2173.7,-1705.6).s().p("EhQCAseMCdDharIDCBwMidEBarg");
	this.shape_1170.setTransform(2793.25,3945.625);

	this.shape_1171 = new cjs.Shape();
	this.shape_1171.graphics.lf(["#FDCB3A","#FBC541","#F7B355","#F09775","#E97C94"],[0,0.176,0.439,0.753,1],-1355.8,959.9,1507.8,-1287.2).s().p("EgqCAocMBOCgtCMg+Cgj1IDBhwMBBEAllMhREAuyg");
	this.shape_1171.setTransform(3191.475,3186.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1171},{t:this.shape_1170},{t:this.shape_1169},{t:this.shape_1168},{t:this.shape_1167},{t:this.shape_1166},{t:this.shape_1165},{t:this.shape_1164},{t:this.shape_1163},{t:this.shape_1162},{t:this.shape_1161},{t:this.shape_1160},{t:this.shape_1159},{t:this.shape_1158},{t:this.shape_1157},{t:this.shape_1156},{t:this.shape_1155},{t:this.shape_1154},{t:this.shape_1153},{t:this.shape_1152},{t:this.shape_1151},{t:this.shape_1150},{t:this.shape_1149},{t:this.shape_1148},{t:this.shape_1147},{t:this.shape_1146},{t:this.shape_1145},{t:this.shape_1144},{t:this.shape_1143},{t:this.shape_1142},{t:this.shape_1141},{t:this.shape_1140},{t:this.shape_1139},{t:this.shape_1138},{t:this.shape_1137},{t:this.shape_1136},{t:this.shape_1135},{t:this.shape_1134},{t:this.shape_1133},{t:this.shape_1132},{t:this.shape_1131},{t:this.shape_1130},{t:this.shape_1129},{t:this.shape_1128},{t:this.shape_1127},{t:this.shape_1126},{t:this.shape_1125},{t:this.shape_1124},{t:this.shape_1123},{t:this.shape_1122},{t:this.shape_1121},{t:this.shape_1120},{t:this.shape_1119},{t:this.shape_1118},{t:this.shape_1117},{t:this.shape_1116},{t:this.shape_1115},{t:this.shape_1114},{t:this.shape_1113},{t:this.shape_1112},{t:this.shape_1111},{t:this.shape_1110},{t:this.shape_1109},{t:this.shape_1108},{t:this.shape_1107},{t:this.shape_1106},{t:this.shape_1105},{t:this.shape_1104},{t:this.shape_1103},{t:this.shape_1102},{t:this.shape_1101},{t:this.shape_1100},{t:this.shape_1099},{t:this.shape_1098},{t:this.shape_1097},{t:this.shape_1096},{t:this.shape_1095},{t:this.shape_1094},{t:this.shape_1093},{t:this.shape_1092},{t:this.shape_1091},{t:this.shape_1090},{t:this.shape_1089},{t:this.shape_1088},{t:this.shape_1087},{t:this.shape_1086},{t:this.shape_1085},{t:this.shape_1084},{t:this.shape_1083},{t:this.shape_1082},{t:this.shape_1081},{t:this.shape_1080},{t:this.shape_1079},{t:this.shape_1078},{t:this.shape_1077},{t:this.shape_1076},{t:this.shape_1075},{t:this.shape_1074},{t:this.shape_1073},{t:this.shape_1072},{t:this.shape_1071},{t:this.shape_1070},{t:this.shape_1069},{t:this.shape_1068},{t:this.shape_1067},{t:this.shape_1066},{t:this.shape_1065},{t:this.shape_1064},{t:this.shape_1063},{t:this.shape_1062},{t:this.shape_1061},{t:this.shape_1060},{t:this.shape_1059},{t:this.shape_1058},{t:this.shape_1057},{t:this.shape_1056},{t:this.shape_1055},{t:this.shape_1054},{t:this.shape_1053},{t:this.shape_1052},{t:this.shape_1051},{t:this.shape_1050},{t:this.shape_1049},{t:this.shape_1048},{t:this.shape_1047},{t:this.shape_1046},{t:this.shape_1045},{t:this.shape_1044},{t:this.shape_1043},{t:this.shape_1042},{t:this.shape_1041},{t:this.shape_1040},{t:this.shape_1039},{t:this.shape_1038},{t:this.shape_1037},{t:this.shape_1036},{t:this.instance_28},{t:this.shape_1035},{t:this.shape_1034},{t:this.shape_1033},{t:this.shape_1032},{t:this.shape_1031},{t:this.shape_1030},{t:this.shape_1029},{t:this.shape_1028},{t:this.shape_1027},{t:this.shape_1026},{t:this.shape_1025},{t:this.shape_1024},{t:this.shape_1023},{t:this.shape_1022},{t:this.shape_1021},{t:this.shape_1020},{t:this.shape_1019},{t:this.shape_1018},{t:this.instance_27},{t:this.shape_1017},{t:this.shape_1016},{t:this.shape_1015},{t:this.shape_1014},{t:this.shape_1013},{t:this.shape_1012},{t:this.shape_1011},{t:this.shape_1010},{t:this.shape_1009},{t:this.shape_1008},{t:this.shape_1007},{t:this.shape_1006},{t:this.shape_1005},{t:this.shape_1004},{t:this.shape_1003},{t:this.shape_1002},{t:this.shape_1001},{t:this.shape_1000},{t:this.shape_999},{t:this.shape_998},{t:this.shape_997},{t:this.shape_996},{t:this.shape_995},{t:this.shape_994},{t:this.shape_993},{t:this.shape_992},{t:this.shape_991},{t:this.shape_990},{t:this.shape_989},{t:this.shape_988},{t:this.instance_26},{t:this.instance_25},{t:this.instance_24},{t:this.shape_987},{t:this.shape_986},{t:this.shape_985},{t:this.shape_984},{t:this.shape_983},{t:this.shape_982},{t:this.shape_981},{t:this.shape_980},{t:this.shape_979},{t:this.shape_978},{t:this.shape_977},{t:this.shape_976},{t:this.shape_975},{t:this.shape_974},{t:this.shape_973},{t:this.shape_972},{t:this.shape_971},{t:this.shape_970},{t:this.shape_969},{t:this.shape_968},{t:this.shape_967},{t:this.shape_966},{t:this.shape_965},{t:this.shape_964},{t:this.shape_963},{t:this.shape_962},{t:this.shape_961},{t:this.shape_960},{t:this.shape_959},{t:this.shape_958},{t:this.shape_957},{t:this.shape_956},{t:this.shape_955},{t:this.shape_954},{t:this.shape_953},{t:this.shape_952},{t:this.shape_951},{t:this.shape_950},{t:this.shape_949},{t:this.shape_948},{t:this.shape_947},{t:this.shape_946},{t:this.shape_945},{t:this.shape_944},{t:this.shape_943},{t:this.instance_23},{t:this.shape_942},{t:this.instance_22},{t:this.shape_941},{t:this.shape_940},{t:this.shape_939},{t:this.shape_938},{t:this.shape_937},{t:this.shape_936},{t:this.shape_935},{t:this.shape_934},{t:this.shape_933},{t:this.shape_932},{t:this.shape_931},{t:this.shape_930},{t:this.shape_929},{t:this.shape_928},{t:this.shape_927},{t:this.shape_926},{t:this.shape_925},{t:this.shape_924},{t:this.shape_923},{t:this.shape_922},{t:this.shape_921},{t:this.shape_920},{t:this.shape_919},{t:this.shape_918},{t:this.shape_917},{t:this.instance_21},{t:this.shape_916},{t:this.instance_20},{t:this.shape_915},{t:this.shape_914},{t:this.shape_913},{t:this.shape_912},{t:this.shape_911},{t:this.shape_910},{t:this.shape_909},{t:this.shape_908},{t:this.shape_907},{t:this.shape_906},{t:this.shape_905},{t:this.shape_904},{t:this.shape_903},{t:this.shape_902},{t:this.shape_901},{t:this.shape_900},{t:this.shape_899},{t:this.shape_898},{t:this.shape_897},{t:this.shape_896},{t:this.shape_895},{t:this.shape_894},{t:this.shape_893},{t:this.shape_892},{t:this.shape_891},{t:this.shape_890},{t:this.shape_889},{t:this.shape_888},{t:this.shape_887},{t:this.shape_886},{t:this.shape_885},{t:this.shape_884},{t:this.shape_883},{t:this.shape_882},{t:this.shape_881},{t:this.shape_880},{t:this.shape_879},{t:this.shape_878},{t:this.shape_877},{t:this.shape_876},{t:this.shape_875},{t:this.shape_874},{t:this.shape_873},{t:this.shape_872},{t:this.shape_871},{t:this.shape_870},{t:this.shape_869},{t:this.shape_868},{t:this.shape_867},{t:this.shape_866},{t:this.shape_865},{t:this.shape_864},{t:this.shape_863},{t:this.shape_862},{t:this.shape_861},{t:this.shape_860},{t:this.shape_859},{t:this.shape_858},{t:this.shape_857},{t:this.shape_856},{t:this.shape_855},{t:this.shape_854},{t:this.shape_853},{t:this.shape_852},{t:this.shape_851},{t:this.shape_850},{t:this.shape_849},{t:this.shape_848},{t:this.shape_847},{t:this.shape_846},{t:this.shape_845},{t:this.shape_844},{t:this.shape_843},{t:this.shape_842},{t:this.shape_841},{t:this.shape_840},{t:this.shape_839},{t:this.shape_838},{t:this.shape_837},{t:this.shape_836},{t:this.shape_835},{t:this.shape_834},{t:this.shape_833},{t:this.shape_832},{t:this.shape_831},{t:this.shape_830},{t:this.shape_829},{t:this.shape_828},{t:this.shape_827},{t:this.shape_826},{t:this.shape_825},{t:this.shape_824},{t:this.shape_823},{t:this.shape_822},{t:this.shape_821},{t:this.shape_820},{t:this.shape_819},{t:this.shape_818},{t:this.shape_817},{t:this.shape_816},{t:this.shape_815},{t:this.shape_814},{t:this.shape_813},{t:this.shape_812},{t:this.shape_811},{t:this.shape_810},{t:this.shape_809},{t:this.shape_808},{t:this.shape_807},{t:this.shape_806},{t:this.shape_805},{t:this.shape_804},{t:this.shape_803},{t:this.shape_802},{t:this.shape_801},{t:this.shape_800},{t:this.shape_799},{t:this.instance_19},{t:this.shape_798},{t:this.shape_797},{t:this.shape_796},{t:this.shape_795},{t:this.shape_794},{t:this.instance_18},{t:this.shape_793},{t:this.shape_792},{t:this.shape_791},{t:this.shape_790},{t:this.shape_789},{t:this.instance_17},{t:this.shape_788},{t:this.shape_787},{t:this.shape_786},{t:this.shape_785},{t:this.shape_784},{t:this.instance_16},{t:this.shape_783},{t:this.shape_782},{t:this.shape_781},{t:this.shape_780},{t:this.shape_779},{t:this.instance_15},{t:this.shape_778},{t:this.shape_777},{t:this.shape_776},{t:this.shape_775},{t:this.shape_774},{t:this.instance_14},{t:this.shape_773},{t:this.shape_772},{t:this.shape_771},{t:this.shape_770},{t:this.shape_769},{t:this.instance_13},{t:this.instance_12},{t:this.shape_768},{t:this.shape_767},{t:this.shape_766},{t:this.shape_765},{t:this.shape_764},{t:this.shape_763},{t:this.shape_762},{t:this.shape_761},{t:this.instance_11},{t:this.instance_10}]}).wait(40));

	// bg
	this.shape_1172 = new cjs.Shape();
	this.shape_1172.graphics.lf(["#00FFBB","#00DCCD","#0084FA","#007BFF"],[0,0.29,0.933,1],2274,-1353.9,-1194.9,884.8).s().p("ECfMFXoQrIhco8kCQp1kcmnnVQoLpGiFtiQg8mOAfmlQAfmbB0mMQDRrLHgrrQFyo+JvrSQEDktCTjAQDbkfCFj3QFPpxiDoaQhIkpjikjQiqjcktkIUgd2gaLgwKgK7UgmPgIsgwzABKQpjAOxdBRQy2BYoMATQvDAkrshBQuKhOr+jqQmmiBkyijQl1jHj0kOQkSkvhdmEQhimdCZlbQCGkxFMjzQDsisGji9QNvmNPxkNQN7juQeiZQNbh9RghYQHrgmXdhdQTZhNLlhHQQ8hnNjieQQAi6NqkeQPNk/NRnOQLGmCHJnJQIpopCnqCQBxmxg8nvQg2m8i7nRQkgrJoQpdQnyo8qrm5QqOmnsBkOQrxkHsXhdQxMiCyqBZQwaBOyyD+QvEDMzvFrQnGCDqPDGIxVFRQ0/GUtxDdQzFEzwCCOQywCnw+ghQy2gjxukaQtYjVsQl3QszmIqQoTQq5o0nMqkQntrVjAsvQi5sQBUuPQBKsSETt+UAMKgnfAf4gpAQNVxKRVyKQOPu6SZxFQA+g5J7pzQIpoiGNleQTpxYJdAAMHAlAAAMAAAHiwQqdDBoxFxQytMtrUQLQspSDiHUrQgrGjASHsQAOGBA6IQQAgEwBKJhQA9IaATF4QArM7iuLDQiuLDmBIxQmEI3pOGPQpXGVsTDcQpnCrqQA5QkmAZkdAAQmOAAl7gxg");
	this.shape_1172.setTransform(3526.9003,2229.875);

	this.shape_1173 = new cjs.Shape();
	this.shape_1173.graphics.lf(["#00FFBB","#00DCCD","#0084FA","#007BFF"],[0,0.29,0.933,1],-2734.4,0,2734.4,0).s().p("EhMUGo9QLjgRNUn3QMLnMMeszQLMreJZtzQI0s+Ejq/QGTvLAfxyQAfxYlJw1QlPxKqItcQqvuOupn7Qx5pr4DioQzQiH6xCQQpvA1twBqQvkB8npA6QtVBmpMAvQr6A9pggEQ5ygK5QmcQ53ml18sWQ3Ds9wRx9QxWzLoN3aQmLxkgTzWQgSy0FRybQFSybKMvyQKfwOOgrkQEEjPFpjgQEQipGojrQHkkID0iIQGmjsEni8QMXn3G1oDQIdp9B8sLQCPuDoMvJQmjsGtBsfQqRp3uqsRQjYi02uykQv1s8ptooQthsCpzqtQrdshn7sVQoztsk9uOUgLCgfpAHKglQQBWm/EytaQFfvcGktmQH+wiHmpeQJErTHpgEMMhNAAAMAAANR5g");
	this.shape_1173.setTransform(2765.6856,2745.475);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1173},{t:this.shape_1172}]}).wait(40));

	this._renderFirstFrame();

}).prototype = p = new lib.AnMovieClip();
p.nominalBounds = rect = new cjs.Rectangle(2781.4,2775.8,5468.7,5439.3);
p.frameBounds = [rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect];
// library properties:
lib.properties = {
	id: 'F1988807AE641A4C98F78AB7F6B4A69F',
	width: 5500,
	height: 5500,
	fps: 30,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['F1988807AE641A4C98F78AB7F6B4A69F'] = {
	getStage: function() { return exportRoot.stage; },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


an.makeResponsive = function(isResp, respDim, isScale, scaleType, domContainers) {		
	var lastW, lastH, lastS=1;		
	window.addEventListener('resize', resizeCanvas);		
	resizeCanvas();		
	function resizeCanvas() {			
		var w = lib.properties.width, h = lib.properties.height;			
		var iw = window.innerWidth, ih=window.innerHeight;			
		var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
		if(isResp) {                
			if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
				sRatio = lastS;                
			}				
			else if(!isScale) {					
				if(iw<w || ih<h)						
					sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==1) {					
				sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==2) {					
				sRatio = Math.max(xRatio, yRatio);				
			}			
		}
		domContainers[0].width = w * pRatio * sRatio;			
		domContainers[0].height = h * pRatio * sRatio;
		domContainers.forEach(function(container) {				
			container.style.width = w * sRatio + 'px';				
			container.style.height = h * sRatio + 'px';			
		});
		stage.scaleX = pRatio*sRatio;			
		stage.scaleY = pRatio*sRatio;
		lastW = iw; lastH = ih; lastS = sRatio;            
		stage.tickOnUpdate = false;            
		stage.update();            
		stage.tickOnUpdate = true;		
	}
}
an.handleSoundStreamOnTick = function(event) {
	if(!event.paused){
		var stageChild = stage.getChildAt(0);
		if(!stageChild.paused || stageChild.ignorePause){
			stageChild.syncStreamSounds();
		}
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;