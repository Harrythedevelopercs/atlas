<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* Start Plugin */
       .flipdown .rotor,.flipdown .rotor-group{position:relative}.flipdown.flipdown__theme-dark,.flipdown.flipdown__theme-light{font-family:sans-serif;font-weight:700}.flipdown.flipdown__theme-dark .rotor-group-heading:before{color:#000}.flipdown.flipdown__theme-dark .rotor-group:nth-child(n+2):nth-child(-n+3):after,.flipdown.flipdown__theme-dark .rotor-group:nth-child(n+2):nth-child(-n+3):before{background-color:#151515}.flipdown.flipdown__theme-dark .rotor,.flipdown.flipdown__theme-dark .rotor-leaf-front,.flipdown.flipdown__theme-dark .rotor-top{color:#fff;background-color:#151515}.flipdown.flipdown__theme-dark .rotor-bottom,.flipdown.flipdown__theme-dark .rotor-leaf-rear{color:#efefef;background-color:#202020}.flipdown.flipdown__theme-dark .rotor:after{border-top:1px solid #151515}.flipdown.flipdown__theme-light .rotor-group-heading:before{color:#eee}.flipdown.flipdown__theme-light .rotor-group:nth-child(n+2):nth-child(-n+3):after,.flipdown.flipdown__theme-light .rotor-group:nth-child(n+2):nth-child(-n+3):before{background-color:#ddd}.flipdown.flipdown__theme-light .rotor,.flipdown.flipdown__theme-light .rotor-leaf-front,.flipdown.flipdown__theme-light .rotor-top{color:#222;background-color:#ddd}.flipdown.flipdown__theme-light .rotor-bottom,.flipdown.flipdown__theme-light .rotor-leaf-rear{color:#333;background-color:#eee}.flipdown.flipdown__theme-light .rotor:after{border-top:1px solid #222}.flipdown{overflow:visible;width:510px;height:70px}.flipdown .rotor-group:last-child{padding-right:0}.flipdown .rotor-group-heading:before{display:block;height:20px;font-size: 14px;line-height:20px;text-align:center}.flipdown .rotor-group:first-child .rotor-group-heading:before,.flipdown .rotor-group:nth-child(2) .rotor-group-heading:before,.flipdown .rotor-group:nth-child(3) .rotor-group-heading:before,.flipdown .rotor-group:nth-child(4) .rotor-group-heading:before{content:attr(data-before)}.flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):before{content:'';position:absolute;bottom:5px;left:65px;width:10px;height:10px;border-radius:50%}.flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):after{content:'';position:absolute;bottom:25px;left:65px;width:10px;height:10px;border-radius:50%}.flipdown .rotor{float:left;width:25px;height:40px;margin:0 5px 0 0;border-radius:4px;font-size:22px;text-align:center;perspective:200px}.flipdown .rotor:last-child{margin-right:0}.flipdown .rotor-bottom,.flipdown .rotor-top{overflow:hidden;position:absolute;width:25px;height:20px}.flipdown .rotor-leaf{z-index:1;position:absolute;width:25px;height:40px;transform-style:preserve-3d;transition:transform}.flipdown .rotor-leaf.flipped{transform:rotateX(-180deg);transition:.5s ease-in-out}.flipdown .rotor-leaf-front,.flipdown .rotor-leaf-rear{overflow:hidden;position:absolute;width:25px;height:20px;margin:0;transform:rotateX(0);backface-visibility:hidden;-webkit-backface-visibility:hidden}.flipdown .rotor-leaf-front,.flipdown .rotor-top{line-height:40px;border-radius:4px 4px 0 0}.flipdown .rotor-leaf-rear{line-height:0;border-radius:0 0 4px 4px;transform:rotateX(-180deg)}.flipdown .rotor-bottom{bottom:0;line-height:0;border-radius:0 0 4px 4px}.flipdown .rotor:after{content:'';z-index:2;position:absolute;bottom:0;left:0;width:25px;height:20px;border-radius:0 0 4px 4px}    
       /* End Plugin */

        .count-down {
            background: url(timer-img/black-friday-bg.webp);
            background-size: contain;
            width: 268px;
            height: 255px;
            padding: 0px;
            display: flex;
            justify-content: center;
            align-items: end;
            font-family: 'Poppins', sans-serif;
            position: fixed;
            bottom: 5px;
            left: 5px;
            z-index: 999999;
            transform: translateX(0);
            transition: all 1s cubic-bezier(0.615, 0, 0.07, 1);
            cursor: pointer;
        }

        .count-down .close-icon {
            position: absolute;
            top: -20px;
            right: 0px;
            cursor: pointer;
            font-size: 20px;
            color: #fff;
            width: 45px;
            height: 45px;
            background: #3b074d;
            border-radius: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: rotate(0deg);
            transition: all .6s cubic-bezier(0.615, 0, 0.07, 1);
            font-family: 'Poppins', sans-serif;
        }

        .count-down .close-icon:hover {
            transform: rotate(90deg);
        }

        .hidden {
            transform: translateX(-500px);
            /* opacity: 0; */
        }

        .count-down .flipdown.flipdown__theme-dark {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff61;
            backdrop-filter: blur(5px);
        }

        .count-down .flipdown {
            width: 100%;
            padding: 5px;
        }

        .count-down h1 {
            font-family: 'Poppins', sans-serif;
        }
        
        .flipdown .rotor-group::after,
        .flipdown .rotor-group::before{
            display: none;
        }

        @media (max-width: 576px) {
            .flipdown .rotor-group {
                padding-right: 5px;
            } 
        }
    </style>
    <div class="count-down openpopup" data-bs-toggle="modal" data-bs-target="#myModal" id="count-down">
        <span class="close-icon" onclick="closeBox()">✖</span>
        <div class="flipdown" id="flipdown"></div>
    </div>
<script>
// Start Plugin JS
"use strict";function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function t(e){return typeof e}:function t(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(t)}function _classCallCheck(t,e){if(!(t instanceof e))throw TypeError("Cannot call a class as a function")}function _defineProperties(t,e){for(var o=0;o<e.length;o++){var s=e[o];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}function _createClass(t,e,o){return e&&_defineProperties(t.prototype,e),o&&_defineProperties(t,o),t}var FlipDown=function(){function t(e){var o=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"flipdown",s=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};if(_classCallCheck(this,t),"number"!=typeof e)throw Error("FlipDown: Constructor expected unix timestamp, got ".concat(_typeof(e)," instead."));"object"===_typeof(o)&&(s=o,o="flipdown"),this.version="0.3.2",this.initialised=!1,this.now=this._getTime(),this.epoch=e,this.countdownEnded=!1,this.hasEndedCallback=null,this.element=document.getElementById(o),this.rotors=[],this.rotorLeafFront=[],this.rotorLeafRear=[],this.rotorTops=[],this.rotorBottoms=[],this.countdown=null,this.daysRemaining=0,this.clockValues={},this.clockStrings={},this.clockValuesAsString=[],this.prevClockValuesAsString=[],this.opts=this._parseOptions(s),this._setOptions(),console.log("FlipDown ".concat(this.version," (Theme: ").concat(this.opts.theme,")"))}return _createClass(t,[{key:"start",value:function t(){return this.initialised||this._init(),this.countdown=setInterval(this._tick.bind(this),1e3),this}},{key:"ifEnded",value:function t(e){return this.hasEndedCallback=function(){e(),this.hasEndedCallback=null},this}},{key:"_getTime",value:function t(){return new Date().getTime()/1e3}},{key:"_hasCountdownEnded",value:function t(){return this.epoch-this.now<0?(this.countdownEnded=!0,null!=this.hasEndedCallback&&(this.hasEndedCallback(),this.hasEndedCallback=null),!0):(this.countdownEnded=!1,!1)}},{key:"_parseOptions",value:function t(e){var o=["Days","Hours","Minutes","Seconds"];return e.headings&&4===e.headings.length&&(o=e.headings),{theme:e.hasOwnProperty("theme")?e.theme:"dark",headings:o}}},{key:"_setOptions",value:function t(){this.element.classList.add("flipdown__theme-".concat(this.opts.theme))}},{key:"_init",value:function t(){this.initialised=!0,this._hasCountdownEnded()?this.daysremaining=0:this.daysremaining=Math.floor((this.epoch-this.now)/86400).toString().length;for(var e=this.daysremaining<=2?2:this.daysremaining,o=0;o<e+6;o++)this.rotors.push(this._createRotor(0));for(var s=[],o=0;o<e;o++)s.push(this.rotors[o]);this.element.appendChild(this._createRotorGroup(s,0));for(var i=e,o=0;o<3;o++){for(var n=[],r=0;r<2;r++)n.push(this.rotors[i]),i++;this.element.appendChild(this._createRotorGroup(n,o+1))}return this.rotorLeafFront=Array.prototype.slice.call(this.element.getElementsByClassName("rotor-leaf-front")),this.rotorLeafRear=Array.prototype.slice.call(this.element.getElementsByClassName("rotor-leaf-rear")),this.rotorTop=Array.prototype.slice.call(this.element.getElementsByClassName("rotor-top")),this.rotorBottom=Array.prototype.slice.call(this.element.getElementsByClassName("rotor-bottom")),this._tick(),this._updateClockValues(!0),this}},{key:"_createRotorGroup",value:function t(e,o){var s=document.createElement("div");s.className="rotor-group";var i=document.createElement("div");return i.className="rotor-group-heading",i.setAttribute("data-before",this.opts.headings[o]),s.appendChild(i),appendChildren(s,e),s}},{key:"_createRotor",value:function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,o=document.createElement("div"),s=document.createElement("div"),i=document.createElement("figure"),n=document.createElement("figure"),r=document.createElement("div"),a=document.createElement("div");return o.className="rotor",s.className="rotor-leaf",i.className="rotor-leaf-rear",n.className="rotor-leaf-front",r.className="rotor-top",a.className="rotor-bottom",i.textContent=e,r.textContent=e,a.textContent=e,appendChildren(o,[s,r,a]),appendChildren(s,[i,n]),o}},{key:"_tick",value:function t(){this.now=this._getTime();var e=this.epoch-this.now<=0?0:this.epoch-this.now;this.clockValues.d=Math.floor(e/86400),e-=86400*this.clockValues.d,this.clockValues.h=Math.floor(e/3600),e-=3600*this.clockValues.h,this.clockValues.m=Math.floor(e/60),e-=60*this.clockValues.m,this.clockValues.s=Math.floor(e),this._updateClockValues(),this._hasCountdownEnded()}},{key:"_updateClockValues",value:function t(){var e=this,o=arguments.length>0&&void 0!==arguments[0]&&arguments[0];function s(){var t=this;this.rotorTop.forEach(function(e,o){e.textContent!=t.clockValuesAsString[o]&&(e.textContent=t.clockValuesAsString[o])})}function i(){var t=this;this.rotorLeafRear.forEach(function(e,o){if(e.textContent!=t.clockValuesAsString[o]){e.textContent=t.clockValuesAsString[o],e.parentElement.classList.add("flipped");var s=setInterval((function(){e.parentElement.classList.remove("flipped"),clearInterval(s)}).bind(t),500)}})}this.clockStrings.d=pad(this.clockValues.d,2),this.clockStrings.h=pad(this.clockValues.h,2),this.clockStrings.m=pad(this.clockValues.m,2),this.clockStrings.s=pad(this.clockValues.s,2),this.clockValuesAsString=(this.clockStrings.d+this.clockStrings.h+this.clockStrings.m+this.clockStrings.s).split(""),this.rotorLeafFront.forEach(function(t,o){t.textContent=e.prevClockValuesAsString[o]}),this.rotorBottom.forEach(function(t,o){t.textContent=e.prevClockValuesAsString[o]}),o?(s.call(this),i.call(this)):(setTimeout(s.bind(this),500),setTimeout(i.bind(this),500)),this.prevClockValuesAsString=this.clockValuesAsString}}]),t}();function pad(t,e){return(t=t.toString()).length<e?pad("0"+t,e):t}function appendChildren(t,e){e.forEach(function(e){t.appendChild(e)})}
// End Plugin JS
</script>
<script>
        // The End Of Year Date To Countdown Date
        document.addEventListener('DOMContentLoaded', () => {
            // Unix timestamp (in seconds) to count down to
            var toDayFromNow = (new Date("Nov 30, 2025 23:59:59").getTime() / 1000) + (3600 / 60 / 60 / 24) - 1;
            // Set Up FlipDown
            var flipdown = new FlipDown(toDayFromNow)

                // Start The Count Down
                .start()
                // Do Something When The Countdown Ends
                .ifEnded(() => {
                    document.querySelector(".flipdown").innerHTML = `<h2>Timer is ended</h2>`;
                });
        });

        function closeBox() {
            var box = document.getElementById("count-down");
            box.classList.add("hidden");
        }
</script>