;(function($){$.ui={plugin:{add:function(module,option,set){var proto=$.ui[module].prototype;for(var i in set){proto.plugins[i]=proto.plugins[i]||[];proto.plugins[i].push([option,set[i]]);}},call:function(instance,name,args){var set=instance.plugins[name];if(!set){return;}
for(var i=0;i<set.length;i++){if(instance.options[set[i][0]]){set[i][1].apply(instance.element,args);}}}},cssCache:{},css:function(name){if($.ui.cssCache[name]){return $.ui.cssCache[name];}
var tmp=$('<div class="ui-gen">').addClass(name).css({position:'absolute',top:'-5000px',left:'-5000px',display:'block'}).appendTo('body');$.ui.cssCache[name]=!!((!(/auto|default/).test(tmp.css('cursor'))||(/^[1-9]/).test(tmp.css('height'))||(/^[1-9]/).test(tmp.css('width'))||!(/none/).test(tmp.css('backgroundImage'))||!(/transparent|rgba\(0, 0, 0, 0\)/).test(tmp.css('backgroundColor'))));try{$('body').get(0).removeChild(tmp.get(0));}catch(e){}
return $.ui.cssCache[name];},disableSelection:function(el){$(el).attr('unselectable','on').css('MozUserSelect','none');},enableSelection:function(el){$(el).attr('unselectable','off').css('MozUserSelect','');},hasScroll:function(e,a){var scroll=/top/.test(a||"top")?'scrollTop':'scrollLeft',has=false;if(e[scroll]>0)return true;e[scroll]=1;has=e[scroll]>0?true:false;e[scroll]=0;return has;}};var _remove=$.fn.remove;$.fn.remove=function(){$("*",this).add(this).triggerHandler("remove");return _remove.apply(this,arguments);};function getter(namespace,plugin,method){var methods=$[namespace][plugin].getter||[];methods=(typeof methods=="string"?methods.split(/,?\s+/):methods);return($.inArray(method,methods)!=-1);}
$.widget=function(name,prototype){var namespace=name.split(".")[0];name=name.split(".")[1];$.fn[name]=function(options){var isMethodCall=(typeof options=='string'),args=Array.prototype.slice.call(arguments,1);if(isMethodCall&&getter(namespace,name,options)){var instance=$.data(this[0],name);return(instance?instance[options].apply(instance,args):undefined);}
return this.each(function(){var instance=$.data(this,name);if(isMethodCall&&instance&&$.isFunction(instance[options])){instance[options].apply(instance,args);}else if(!isMethodCall){$.data(this,name,new $[namespace][name](this,options));}});};$[namespace][name]=function(element,options){var self=this;this.widgetName=name;this.widgetBaseClass=namespace+'-'+name;this.options=$.extend({},$.widget.defaults,$[namespace][name].defaults,options);this.element=$(element).bind('setData.'+name,function(e,key,value){return self.setData(key,value);}).bind('getData.'+name,function(e,key){return self.getData(key);}).bind('remove',function(){return self.destroy();});this.init();};$[namespace][name].prototype=$.extend({},$.widget.prototype,prototype);};$.widget.prototype={init:function(){},destroy:function(){this.element.removeData(this.widgetName);},getData:function(key){return this.options[key];},setData:function(key,value){this.options[key]=value;if(key=='disabled'){this.element[value?'addClass':'removeClass'](this.widgetBaseClass+'-disabled');}},enable:function(){this.setData('disabled',false);},disable:function(){this.setData('disabled',true);}};$.widget.defaults={disabled:false};$.ui.mouse={mouseInit:function(){var self=this;this.element.bind('mousedown.'+this.widgetName,function(e){return self.mouseDown(e);});if($.browser.msie){this._mouseUnselectable=this.element.attr('unselectable');this.element.attr('unselectable','on');}
this.started=false;},mouseDestroy:function(){this.element.unbind('.'+this.widgetName);($.browser.msie&&this.element.attr('unselectable',this._mouseUnselectable));},mouseDown:function(e){(this._mouseStarted&&this.mouseUp(e));this._mouseDownEvent=e;var self=this,btnIsLeft=(e.which==1),elIsCancel=(typeof this.options.cancel=="string"?$(e.target).parents().add(e.target).filter(this.options.cancel).length:false);if(!btnIsLeft||elIsCancel||!this.mouseCapture(e)){return true;}
this._mouseDelayMet=!this.options.delay;if(!this._mouseDelayMet){this._mouseDelayTimer=setTimeout(function(){self._mouseDelayMet=true;},this.options.delay);}
if(this.mouseDistanceMet(e)&&this.mouseDelayMet(e)){this._mouseStarted=(this.mouseStart(e)!==false);if(!this._mouseStarted){e.preventDefault();return true;}}
this._mouseMoveDelegate=function(e){return self.mouseMove(e);};this._mouseUpDelegate=function(e){return self.mouseUp(e);};$(document).bind('mousemove.'+this.widgetName,this._mouseMoveDelegate).bind('mouseup.'+this.widgetName,this._mouseUpDelegate);return false;},mouseMove:function(e){if($.browser.msie&&!e.button){return this.mouseUp(e);}
if(this._mouseStarted){this.mouseDrag(e);return false;}
if(this.mouseDistanceMet(e)&&this.mouseDelayMet(e)){this._mouseStarted=(this.mouseStart(this._mouseDownEvent,e)!==false);(this._mouseStarted?this.mouseDrag(e):this.mouseUp(e));}
return!this._mouseStarted;},mouseUp:function(e){$(document).unbind('mousemove.'+this.widgetName,this._mouseMoveDelegate).unbind('mouseup.'+this.widgetName,this._mouseUpDelegate);if(this._mouseStarted){this._mouseStarted=false;this.mouseStop(e);}
return false;},mouseDistanceMet:function(e){return(Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance);},mouseDelayMet:function(e){return this._mouseDelayMet;},mouseStart:function(e){},mouseDrag:function(e){},mouseStop:function(e){},mouseCapture:function(e){return true;}};$.ui.mouse.defaults={cancel:null,distance:1,delay:0};})(jQuery);(function($){$.fn.unwrap=$.fn.unwrap||function(expr){return this.each(function(){$(this).parents(expr).eq(0).after(this).remove();});};$.widget("ui.slider",{plugins:{},ui:function(e){return{options:this.options,handle:this.currentHandle,value:this.options.axis!="both"||!this.options.axis?Math.round(this.value(null,this.options.axis=="vertical"?"y":"x")):{x:Math.round(this.value(null,"x")),y:Math.round(this.value(null,"y"))},range:this.getRange()};},propagate:function(n,e){$.ui.plugin.call(this,n,[e,this.ui()]);this.element.triggerHandler(n=="slide"?n:"slide"+n,[e,this.ui()],this.options[n]);},destroy:function(){this.element.removeClass("ui-slider ui-slider-disabled").removeData("slider").unbind(".slider");if(this.handle&&this.handle.length){this.handle.unwrap("a");this.handle.each(function(){$(this).data("mouse").mouseDestroy();});}
this.generated&&this.generated.remove();},setData:function(key,value){$.widget.prototype.setData.apply(this,arguments);if(/min|max|steps/.test(key)){this.initBoundaries();}
if(key=="range"){value?this.handle.length==2&&this.createRange():this.removeRange();}},init:function(){var self=this;this.element.addClass("ui-slider");this.initBoundaries();this.handle=$(this.options.handle,this.element);if(!this.handle.length){self.handle=self.generated=$(self.options.handles||[0]).map(function(){var handle=$("<div/>").addClass("ui-slider-handle").appendTo(self.element);if(this.id)
handle.attr("id",this.id);return handle[0];});}
var handleclass=function(el){this.element=$(el);this.element.data("mouse",this);this.options=self.options;this.element.bind("mousedown",function(){if(self.currentHandle)this.blur(self.currentHandle);self.focus(this,1);});this.mouseInit();};$.extend(handleclass.prototype,$.ui.mouse,{mouseStart:function(e){return self.start.call(self,e,this.element[0]);},mouseStop:function(e){return self.stop.call(self,e,this.element[0]);},mouseDrag:function(e){return self.drag.call(self,e,this.element[0]);},mouseCapture:function(){return true;},trigger:function(e){this.mouseDown(e);}});$(this.handle).each(function(){new handleclass(this);}).wrap('<a href="javascript:void(0)" style="outline:none;border:none;"></a>').parent().bind('focus',function(e){self.focus(this.firstChild);}).bind('blur',function(e){self.blur(this.firstChild);}).bind('keydown',function(e){if(!self.options.noKeyboard)self.keydown(e.keyCode,this.firstChild);});this.element.bind('mousedown.slider',function(e){self.click.apply(self,[e]);self.currentHandle.data("mouse").trigger(e);self.firstValue=self.firstValue+1;});$.each(this.options.handles||[],function(index,handle){self.moveTo(handle.start,index,true);});if(!isNaN(this.options.startValue))
this.moveTo(this.options.startValue,0,true);this.previousHandle=$(this.handle[0]);if(this.handle.length==2&&this.options.range)this.createRange();},initBoundaries:function(){var element=this.element[0],o=this.options;this.actualSize={width:this.element.outerWidth(),height:this.element.outerHeight()};$.extend(o,{axis:o.axis||(element.offsetWidth<element.offsetHeight?'vertical':'horizontal'),max:!isNaN(parseInt(o.max,10))?{x:parseInt(o.max,10),y:parseInt(o.max,10)}:({x:o.max&&o.max.x||100,y:o.max&&o.max.y||100}),min:!isNaN(parseInt(o.min,10))?{x:parseInt(o.min,10),y:parseInt(o.min,10)}:({x:o.min&&o.min.x||0,y:o.min&&o.min.y||0})});o.realMax={x:o.max.x-o.min.x,y:o.max.y-o.min.y};o.stepping={x:o.stepping&&o.stepping.x||parseInt(o.stepping,10)||(o.steps?o.realMax.x/(o.steps.x||parseInt(o.steps,10)||o.realMax.x):0),y:o.stepping&&o.stepping.y||parseInt(o.stepping,10)||(o.steps?o.realMax.y/(o.steps.y||parseInt(o.steps,10)||o.realMax.y):0)};},keydown:function(keyCode,handle){if(/(37|38|39|40)/.test(keyCode)){this.moveTo({x:/(37|39)/.test(keyCode)?(keyCode==37?'-':'+')+'='+this.oneStep("x"):0,y:/(38|40)/.test(keyCode)?(keyCode==38?'-':'+')+'='+this.oneStep("y"):0},handle);}},focus:function(handle,hard){this.currentHandle=$(handle).addClass('ui-slider-handle-active');if(hard)
this.currentHandle.parent()[0].focus();},blur:function(handle){$(handle).removeClass('ui-slider-handle-active');if(this.currentHandle&&this.currentHandle[0]==handle){this.previousHandle=this.currentHandle;this.currentHandle=null;};},click:function(e){var pointer=[e.pageX,e.pageY];var clickedHandle=false;this.handle.each(function(){if(this==e.target)
clickedHandle=true;});if(clickedHandle||this.options.disabled||!(this.currentHandle||this.previousHandle))
return;if(!this.currentHandle&&this.previousHandle)
this.focus(this.previousHandle,true);this.offset=this.element.offset();this.moveTo({y:this.convertValue(e.pageY-this.offset.top-this.currentHandle[0].offsetHeight/2,"y"),x:this.convertValue(e.pageX-this.offset.left-this.currentHandle[0].offsetWidth/2,"x")},null,!this.options.distance);},createRange:function(){if(this.rangeElement)return;this.rangeElement=$('<div></div>').addClass('ui-slider-range').css({position:'absolute'}).appendTo(this.element);this.updateRange();},removeRange:function(){this.rangeElement.remove();this.rangeElement=null;},updateRange:function(){var prop=this.options.axis=="vertical"?"top":"left";var size=this.options.axis=="vertical"?"height":"width";this.rangeElement.css(prop,(parseInt($(this.handle[0]).css(prop),10)||0)+this.handleSize(0,this.options.axis=="vertical"?"y":"x")/2);this.rangeElement.css(size,(parseInt($(this.handle[1]).css(prop),10)||0)-(parseInt($(this.handle[0]).css(prop),10)||0));},getRange:function(){return this.rangeElement?this.convertValue(parseInt(this.rangeElement.css(this.options.axis=="vertical"?"height":"width"),10),this.options.axis=="vertical"?"y":"x"):null;},handleIndex:function(){return this.handle.index(this.currentHandle[0]);},value:function(handle,axis){if(this.handle.length==1)this.currentHandle=this.handle;if(!axis)axis=this.options.axis=="vertical"?"y":"x";var curHandle=$(handle!=undefined&&handle!==null?this.handle[handle]||handle:this.currentHandle);if(curHandle.data("mouse").sliderValue){return parseInt(curHandle.data("mouse").sliderValue[axis],10);}else{return parseInt(((parseInt(curHandle.css(axis=="x"?"left":"top"),10)/(this.actualSize[axis=="x"?"width":"height"]-this.handleSize(handle,axis)))*this.options.realMax[axis])+this.options.min[axis],10);}},convertValue:function(value,axis){return this.options.min[axis]+(value/(this.actualSize[axis=="x"?"width":"height"]-this.handleSize(null,axis)))*this.options.realMax[axis];},translateValue:function(value,axis){return((value-this.options.min[axis])/this.options.realMax[axis])*(this.actualSize[axis=="x"?"width":"height"]-this.handleSize(null,axis));},translateRange:function(value,axis){if(this.rangeElement){if(this.currentHandle[0]==this.handle[0]&&value>=this.translateValue(this.value(1),axis))
value=this.translateValue(this.value(1,axis)-this.oneStep(axis),axis);if(this.currentHandle[0]==this.handle[1]&&value<=this.translateValue(this.value(0),axis))
value=this.translateValue(this.value(0,axis)+this.oneStep(axis),axis);}
if(this.options.handles){var handle=this.options.handles[this.handleIndex()];if(value<this.translateValue(handle.min,axis)){value=this.translateValue(handle.min,axis);}else if(value>this.translateValue(handle.max,axis)){value=this.translateValue(handle.max,axis);}}
return value;},translateLimits:function(value,axis){if(value>=this.actualSize[axis=="x"?"width":"height"]-this.handleSize(null,axis))
value=this.actualSize[axis=="x"?"width":"height"]-this.handleSize(null,axis);if(value<=0)
value=0;return value;},handleSize:function(handle,axis){return $(handle!=undefined&&handle!==null?this.handle[handle]:this.currentHandle)[0]["offset"+(axis=="x"?"Width":"Height")];},oneStep:function(axis){return this.options.stepping[axis]||1;},start:function(e,handle){var o=this.options;if(o.disabled)return false;this.actualSize={width:this.element.outerWidth(),height:this.element.outerHeight()};if(!this.currentHandle)
this.focus(this.previousHandle,true);this.offset=this.element.offset();this.handleOffset=this.currentHandle.offset();this.clickOffset={top:e.pageY-this.handleOffset.top,left:e.pageX-this.handleOffset.left};this.firstValue=this.value();this.propagate('start',e);this.drag(e,handle);return true;},stop:function(e){this.propagate('stop',e);if(this.firstValue!=this.value())
this.propagate('change',e);this.focus(this.currentHandle,true);return false;},drag:function(e,handle){var o=this.options;var position={top:e.pageY-this.offset.top-this.clickOffset.top,left:e.pageX-this.offset.left-this.clickOffset.left};if(!this.currentHandle)this.focus(this.previousHandle,true);position.left=this.translateLimits(position.left,"x");position.top=this.translateLimits(position.top,"y");if(o.stepping.x){var value=this.convertValue(position.left,"x");value=Math.round(value/o.stepping.x)*o.stepping.x;position.left=this.translateValue(value,"x");}
if(o.stepping.y){var value=this.convertValue(position.top,"y");value=Math.round(value/o.stepping.y)*o.stepping.y;position.top=this.translateValue(value,"y");}
position.left=this.translateRange(position.left,"x");position.top=this.translateRange(position.top,"y");if(o.axis!="vertical")this.currentHandle.css({left:position.left});if(o.axis!="horizontal")this.currentHandle.css({top:position.top});this.currentHandle.data("mouse").sliderValue={x:Math.round(this.convertValue(position.left,"x"))||0,y:Math.round(this.convertValue(position.top,"y"))||0};if(this.rangeElement)
this.updateRange();this.propagate('slide',e);return false;},moveTo:function(value,handle,noPropagation){var o=this.options;this.actualSize={width:this.element.outerWidth(),height:this.element.outerHeight()};if(handle==undefined&&!this.currentHandle&&this.handle.length!=1)
return false;if(handle==undefined&&!this.currentHandle)
handle=0;if(handle!=undefined)
this.currentHandle=this.previousHandle=$(this.handle[handle]||handle);if(value.x!==undefined&&value.y!==undefined){var x=value.x,y=value.y;}else{var x=value,y=value;}
if(x!==undefined&&x.constructor!=Number){var me=/^\-\=/.test(x),pe=/^\+\=/.test(x);if(me||pe){x=this.value(null,"x")+parseInt(x.replace(me?'=':'+=',''),10);}else{x=isNaN(parseInt(x,10))?undefined:parseInt(x,10);}}
if(y!==undefined&&y.constructor!=Number){var me=/^\-\=/.test(y),pe=/^\+\=/.test(y);if(me||pe){y=this.value(null,"y")+parseInt(y.replace(me?'=':'+=',''),10);}else{y=isNaN(parseInt(y,10))?undefined:parseInt(y,10);}}
if(o.axis!="vertical"&&x!==undefined){if(o.stepping.x)x=Math.round(x/o.stepping.x)*o.stepping.x;x=this.translateValue(x,"x");x=this.translateLimits(x,"x");x=this.translateRange(x,"x");o.animate?this.currentHandle.stop().animate({left:x},(Math.abs(parseInt(this.currentHandle.css("left"))-x))*(!isNaN(parseInt(o.animate))?o.animate:5)):this.currentHandle.css({left:x});}
if(o.axis!="horizontal"&&y!==undefined){if(o.stepping.y)y=Math.round(y/o.stepping.y)*o.stepping.y;y=this.translateValue(y,"y");y=this.translateLimits(y,"y");y=this.translateRange(y,"y");o.animate?this.currentHandle.stop().animate({top:y},(Math.abs(parseInt(this.currentHandle.css("top"))-y))*(!isNaN(parseInt(o.animate))?o.animate:5)):this.currentHandle.css({top:y});}
if(this.rangeElement)
this.updateRange();this.currentHandle.data("mouse").sliderValue={x:Math.round(this.convertValue(x,"x"))||0,y:Math.round(this.convertValue(y,"y"))||0};if(!noPropagation){this.propagate('start',null);this.propagate('stop',null);this.propagate('change',null);this.propagate("slide",null);}}});$.ui.slider.getter="value";$.ui.slider.defaults={handle:".ui-slider-handle",distance:1,animate:false};})(jQuery);