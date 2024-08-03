"use strict";
var XF = window.XF || {};
void 0 === window.jQuery && (jQuery = $ = {});
!(function(g, q, r) {
    XF.activate
        ? console.error("XF core has been double loaded")
        : (XF.browser ||
              (XF.browser = {
                  browser: "",
                  version: 0,
                  os: "",
                  osVersion: null
              }),
          (function() {
              var a = (function() {
                  var f = r.createElement("fake"),
                      e = {
                          WebkitTransition: "webkitTransitionEnd",
                          MozTransition: "transitionend",
                          OTransition: "oTransitionEnd otransitionend",
                          transition: "transitionend"
                      },
                      d;
                  for (d in e) if (void 0 !== f.style[d]) return { end: e[d] };
                  return !1;
              })();
              g.support.transition = a;
              g.support.transition &&
                  (g.event.special.xfTransitionEnd = {
                      bindType: a.end,
                      delegateType: a.end,
                      handle: function(f) {
                          if (g(f.target).is(this))
                              return f.handleObj.handler.apply(this, arguments);
                      }
                  });
              var b = g("html").attr("dir");
              a = "normal";
              if (b && "RTL" == b.toUpperCase()) {
                  b = g(
                      '<div style="width: 80px; height: 40px; font-size: 30px; overflow: scroll; white-space: nowrap; word-wrap: normal; position: absolute; top: -1000px; visibility: hidden; pointer-events: none">MMMMMMMMMM</div>'
                  );
                  var c = b[0];
                  b.appendTo("body");
                  0 < c.scrollLeft
                      ? (a = "inverted")
                      : ((c.scrollLeft = -1),
                        -1 == c.scrollLeft && (a = "negative"));
                  b.remove();
              }
              g.support.scrollLeftType = a;
              g.fn.reverse = [].reverse;
              g.addEventCapture = (function() {
                  var f = g.event.special;
                  return function(e) {
                      r.addEventListener &&
                          ("string" == typeof e && (e = [e]),
                          g.each(e, function(d, h) {
                              var k = function(m) {
                                  m = g.event.fix(m);
                                  return g.event.dispatch.call(this, m);
                              };
                              f[h] = f[h] || {};
                              f[h].setup ||
                                  f[h].teardown ||
                                  g.extend(f[h], {
                                      setup: function() {
                                          this.addEventListener(h, k, !0);
                                      },
                                      teardown: function() {
                                          this.removeEventListener(h, k, !0);
                                      }
                                  });
                          }));
                  };
              })();
          })(),
          g.fn.extend({
              onWithin: function(a, b, c) {
                  var f = this;
                  g(r).on(a, function(e) {
                      g(e.target).has(f).length && (c && g(r).off(e), b(e));
                  });
                  return this;
              },
              oneWithin: function(a, b) {
                  return this.onWithin(a, b, !0);
              },
              onPassive: function(a, b) {
                  if ("object" == typeof a) {
                      for (var c in a) this.onPassive(c, a[c]);
                      return this;
                  }
                  if ("string" != typeof a || "function" != typeof b)
                      return (
                          console.warn(
                              "$.onPassive failure for %s.on%s, check parameters",
                              this.get(0),
                              a
                          ),
                          this
                      );
                  if (-1 !== a.indexOf("."))
                      return (
                          console.warn(
                              "$.onPassive does not support namespaced events %s.on%s",
                              this.get(0),
                              a
                          ),
                          !1
                      );
                  XF.Feature?.has("passiveeventlisteners")
                      ? this.get(0).addEventListener(a, b, { passive: !0 })
                      : this.get(0).addEventListener(a, b);
                  return this;
              },
              offPassive: function(a, b) {
                  this.get(0).removeEventListener(a, b);
                  return this;
              },
              onPointer: function(a, b) {
                  if (g.isPlainObject(a)) {
                      for (var c in a)
                          if (a.hasOwnProperty(c)) this.onPointer(c, a[c]);
                      return this;
                  }
                  "string" === typeof a && (a = a.split(/\s+/));
                  var f = this,
                      e = function(d) {
                          var h = g(this).data("xf-pointer-type");
                          d.xfPointerType = d.pointerType || h || "";
                          b(d);
                      };
                  a.forEach(function(d) {
                      f.on(d, e);
                  });
                  this.off("pointerdown.pointer-watcher").on(
                      "pointerdown.pointer-watcher",
                      function(d) {
                          g(this).data("xf-pointer-type", d.pointerType);
                      }
                  );
                  return this;
              },
              xfFadeDown: function(a, b) {
                  this.filter(":hidden")
                      .hide()
                      .css("opacity", 0);
                  a = a || XF.config.speed.normal;
                  this.find(".is-sticky")
                      .addClass("was-sticky")
                      .removeClass("is-sticky");
                  this.animate(
                      {
                          opacity: 1,
                          height: "show",
                          marginTop: "show",
                          marginBottom: "show",
                          paddingTop: "show",
                          paddingBottom: "show"
                      },
                      {
                          duration: a,
                          easing: "swing",
                          complete: function() {
                              g(this)
                                  .find(".was-sticky")
                                  .addClass("is-sticky")
                                  .removeClass("was-sticky");
                              b && b();
                              XF.layoutChange();
                          }
                      }
                  );
                  return this;
              },
              xfFadeUp: function(a, b) {
                  a = a || XF.config.speed.normal;
                  this.find(".is-sticky")
                      .addClass("was-sticky")
                      .removeClass("is-sticky");
                  this.animate(
                      {
                          opacity: 0,
                          height: "hide",
                          marginTop: "hide",
                          marginBottom: "hide",
                          paddingTop: "hide",
                          paddingBottom: "hide"
                      },
                      {
                          duration: a,
                          easing: "swing",
                          complete: function() {
                              g(this)
                                  .find(".was-sticky")
                                  .addClass("is-sticky")
                                  .removeClass("was-sticky");
                              b && b();
                              XF.layoutChange();
                          }
                      }
                  );
                  return this;
              },
              xfUniqueId: function() {
                  var a = this.attr("id");
                  a ||
                      ((a = "js-XFUniqueId" + XF.getUniqueCounter()),
                      this.attr("id", a));
                  return a;
              },
              findExtended: function(a) {
                  var b;
                  if (
                      "string" === typeof a &&
                      (b = a.match(/^<([^|]+)(\|([\s\S]+))?$/))
                  ) {
                      a = g.trim(b[1]);
                      var c,
                          f,
                          e = { up: "parent", next: "next", prev: "prev" },
                          d = this;
                      do
                          if ((c = a.match(/^:(up|next|prev)(\((\d+)\))?/))) {
                              c[2] || (c[3] = 1);
                              var h = e[c[1]];
                              for (f = 0; f < c[3]; f++)
                                  (d = d[h]()) || (d = g());
                              a = g.trim(a.substr(c[0].length));
                          }
                      while (c);
                      a.length && (d = d.closest(a));
                      d.length || (d = g());
                      a = b[2] ? g.trim(b[3]) : "";
                      return a.length ? d.find(a) : d;
                  }
                  return this._find(a);
              },
              dimensions: function(a, b) {
                  var c = this.offset();
                  c = { top: c.top, left: c.left };
                  b = b ? !0 : !1;
                  c.width = a ? this.outerWidth(b) : this.width();
                  c.height = a ? this.outerHeight(b) : this.height();
                  c.right = c.left + c.width;
                  c.bottom = c.top + c.height;
                  return c;
              },
              viewport: function(a, b) {
                  a = {
                      width: a ? this.outerWidth(b) : this.width(),
                      height: a ? this.outerHeight(b) : this.height(),
                      left: this.scrollLeft(),
                      top: this.scrollTop(),
                      right: 0,
                      bottom: 0,
                      docWidth: g(r).width(),
                      docHeight: g(r).height()
                  };
                  a.bottom = a.top + a.height;
                  a.right = a.left + a.width;
                  return a;
              },
              hasFixableParent: function() {
                  var a = !1;
                  this.parents().each(function() {
                      var b = g(this);
                      switch (b.css("position")) {
                          case "fixed":
                          case "sticky":
                          case "-webkit-sticky":
                              return (a = b), !1;
                      }
                      if (b.data("sticky_kit")) return (a = b), !1;
                  });
                  return a;
              },
              hasFixedParent: function() {
                  var a = !1;
                  this.parents().each(function() {
                      var b = g(this);
                      switch (b.css("position")) {
                          case "fixed":
                              return (a = b), !1;
                          case "sticky":
                          case "-webkit-sticky":
                              var c = b.dimensions(!0),
                                  f = g(q).viewport(),
                                  e = b.css("top"),
                                  d = b.css("bottom");
                              if (
                                  ("auto" !== e &&
                                      ((e = c.top - f.top - parseInt(e, 10)),
                                      0.5 >= e && -0.5 <= e)) ||
                                  ("auto" !== d &&
                                      ((e =
                                          c.bottom -
                                          f.bottom -
                                          parseInt(d, 10)),
                                      0.5 >= e && -0.5 <= e))
                              )
                                  return (a = b), !1;
                      }
                  });
                  return a;
              },
              onTransitionEnd: function(a, b) {
                  var c = !1,
                      f = this;
                  this.one("xfTransitionEnd", function() {
                      if (!c) return (c = !0), b.apply(this, arguments);
                  });
                  setTimeout(function() {
                      c || f.trigger("xfTransitionEnd");
                  }, a + 10);
                  return this;
              },
              autofocus: function() {
                  var a = g(this);
                  XF.isIOS()
                      ? a.is(":focus") ||
                        (a.addClass("is-focused"),
                        a.on("blur", function() {
                            a.removeClass("is-focused");
                        }))
                      : a.focus();
                  return this;
              },
              normalizedScrollLeft: function(a) {
                  var b = g.support.scrollLeftType;
                  if ("undefined" !== typeof a) {
                      for (var c = 0; c < this.length; c++) {
                          var f = this[c],
                              e = a;
                          switch (b) {
                              case "negative":
                                  e = 0 < e ? -e : 0;
                                  break;
                              case "inverted":
                                  e = f.scrollWidth - f.offsetWidth - e;
                          }
                          f.scrollLeft = e;
                      }
                      return this;
                  }
                  a = this[0];
                  if (!a) return 0;
                  c = a.scrollLeft;
                  switch (b) {
                      case "negative":
                          return 0 > c ? -c : 0;
                      case "inverted":
                          return (
                              (b = a.scrollWidth - c - a.offsetWidth),
                              0.5 > b ? 0 : b
                          );
                      default:
                          return c;
                  }
              },
              focusNext: function() {
                  var a = g(
                      'input:not([type="hidden"]), select, textarea, a, button'
                  ).filter(":visible");
                  return a.eq(a.index(this) + 1).focus();
              },
              retinaFix: function() {
                  if (2 <= q.devicePixelRatio)
                      this.find("img[srcset]").one("load", function(a) {
                          g(this).prop("srcset", g(this).attr("srcset"));
                      });
                  return this;
              }
          }),
          (function() {
              function a(e) {
                  if (!g.support.transition) return 0;
                  var d = e[0];
                  if (!(d && d instanceof q.Element)) return 0;
                  e = e.css("transition-duration");
                  d = 0;
                  e &&
                      e.match(/^(\+|-|)([0-9]*\.[0-9]+|[0-9]+)(ms|s)/i) &&
                      (d =
                          ("-" == RegExp.$1 ? -1 : 1) *
                          parseFloat(RegExp.$2) *
                          ("ms" == RegExp.$3.toLowerCase() ? 1 : 1e3));
                  return d;
              }
              function b(e, d, h) {
                  var k = [];
                  g.isFunction(d) && (d = d.call(e[0], 0, e[0].className));
                  d = g.trim(d).split(/\s+/);
                  e = " " + e[0].className + " ";
                  for (var m, l = 0; l < d.length; l++)
                      (((m = 0 <= e.indexOf(" " + d[l] + " ")) && !h) ||
                          (!m && h)) &&
                          k.push(d[l]);
                  return k.join(" ");
              }
              function c(e, d, h, k, m) {
                  m = m ? 0 : a(e);
                  var l = d ? "addClass" : "removeClass",
                      p = d ? "removeClass" : "addClass";
                  d = b(e, h, d ? !0 : !1);
                  var n = e[0],
                      t = function() {
                          k &&
                              setTimeout(function() {
                                  k.call(n, g.Event("xfTransitionEnd"));
                              }, 0);
                      };
                  if (d.length)
                      if (0 >= m) e[l](d), t();
                      else {
                          e.hasClass("is-transitioning") &&
                              e.trigger("xfTransitionEnd");
                          e.addClass("is-transitioning");
                          if (
                              e
                                  .css("transition-property")
                                  .match(/(^|\s|,)-xf-(width|height)($|\s|,)/)
                          ) {
                              t = RegExp.$2;
                              var x = f[t],
                                  v = e.css(x),
                                  y = v[t],
                                  w = "transition." + t,
                                  u = e.data(w),
                                  z = n.style,
                                  B =
                                      z.transition ||
                                      z["-webkit-transition"] ||
                                      z["-moz-transition"] ||
                                      z["-o-transition"] ||
                                      "",
                                  A;
                              if (void 0 === u)
                                  for (u = {}, A = 0; A < x.length; A++)
                                      u[x[A]] = z[x[A]] || "";
                              if (0 == e[t]())
                                  for (A in ((y = "0"), v))
                                      v.hasOwnProperty(A) && (v[A] = "0");
                              e.data(w, u)
                                  .css("transition", "none")
                                  [l](d);
                              x = e.css(x);
                              u = x[t];
                              if (0 == e[t]())
                                  for (A in ((u = "0"), x))
                                      x.hasOwnProperty(A) && (x[A] = "0");
                              e[p](d);
                              if (y != u) {
                                  var C = k;
                                  e.css(v);
                                  n.offsetWidth;
                                  e.css("transition", B).css(x);
                                  k = function() {
                                      e.css(e.data(w)).removeData(w);
                                      C && C.apply(this, arguments);
                                  };
                              } else e.css("transition", B);
                          }
                          e.onTransitionEnd(m, function() {
                              e.removeClass("is-transitioning");
                              k && k.apply(this, arguments);
                          });
                          e[l](h);
                      }
                  else t();
              }
              var f = {
                  height: "height padding-top padding-bottom margin-top margin-bottom border-top-width border-bottom-width".split(
                      " "
                  ),
                  width: "width padding-left padding-right margin-left margin-right border-right-width border-left-width".split(
                      " "
                  )
              };
              g.fn.addClassTransitioned = function(e, d, h) {
                  for (var k = this.length, m = 0; m < k; m++)
                      c(g(this[m]), !0, e, d, h);
                  return this;
              };
              g.fn.removeClassTransitioned = function(e, d, h) {
                  for (var k = this.length, m = 0; m < k; m++)
                      c(g(this[m]), !1, e, d, h);
                  return this;
              };
              g.fn.toggleClassTransitioned = function(e, d, h, k) {
                  "boolean" !== typeof d &&
                      "undefined" === typeof h &&
                      ((h = d), (d = null));
                  for (
                      var m = "boolean" === typeof d, l = this.length, p = 0;
                      p < l;
                      p++
                  ) {
                      var n = g(this[p]);
                      var t = m ? d : n.hasClass(e) ? !1 : !0;
                      c(n, t, e, h, k);
                  }
                  return this;
              };
          })(),
          g.extend(XF, {
              config: {
                  userId: null,
                  enablePush: !1,
                  skipServiceWorkerRegistration: !1,
                  skipPushNotificationSubscription: !1,
                  skipPushNotificationCta: !1,
                  serviceWorkerPath: null,
                  pushAppServerKey: null,
                  csrf: g("html").data("csrf"),
                  time: {
                      now: 0,
                      today: 0,
                      todayDow: 0,
                      tomorrow: 0,
                      yesterday: 0,
                      week: 0
                  },
                  cookie: { path: "/", domain: "", prefix: "xf_" },
                  url: { fullBase: "/", basePath: "/", css: "", keepAlive: "" },
                  css: {},
                  js: {},
                  jsState: {},
                  speed: {
                      xxfast: 50,
                      xfast: 100,
                      fast: 200,
                      normal: 400,
                      slow: 600
                  },
                  job: { manualUrl: "" },
                  borderSizeFeature: "3px",
                  fontAwesomeWeight: "r",
                  enableRtnProtect: !0,
                  enableFormSubmitSticky: !0,
                  visitorCounts: {
                      conversations_unread: "0",
                      alerts_unviewed: "0",
                      total_unread: "0",
                      title_count: !1,
                      icon_indicator: !1
                  },
                  uploadMaxFilesize: null,
                  allowedVideoExtensions: [],
                  allowedAudioExtensions: [],
                  shortcodeToEmoji: !0,
                  publicMetadataLogoUrl: "",
                  publicPushBadgeUrl: ""
              },
              debug: { disableAjaxSubmit: !1 },
              counter: 1,
              pageDisplayTime: null,
              phrases: {},
              getApp: function() {
                  return g("html").data("app") || null;
              },
              getKeyboardInputs: function() {
                  return "input:not([type=radio], [type=checkbox], [type=submit], [type=reset]), textarea";
              },
              onPageLoad: function() {
                  g(r).trigger("xf:page-load-start");
                  XF.NavDeviceWatcher.initialize();
                  XF.ActionIndicator.initialize();
                  XF.DynamicDate.initialize();
                  XF.KeepAlive.initialize();
                  XF.LinkWatcher.initLinkProxy();
                  XF.LinkWatcher.initExternalWatcher();
                  XF.NoticeWatcher.initialize();
                  XF.ExpandableContent.watch();
                  XF.ScrollButtons.initialize();
                  XF.KeyboardShortcuts.initialize();
                  XF.FormInputValidation.initialize();
                  XF.PWA.initialize();
                  XF.Push.initialize();
                  XF.IgnoreWatcher.initializeHash();
                  XF.BrowserWarning.display();
                  XF.BrowserWarning.hideJsWarning();
                  XF.History.initialize();
                  XF.config.jsState = XF.applyJsState({}, XF.config.jsState);
                  XF.activate(r);
                  g(r).on("ajax:complete", function(a, b, c) {
                      (a = b.responseJSON) &&
                          a.visitor &&
                          XF.updateVisitorCounts(a.visitor, !0);
                  });
                  g(r).on("ajax:before-success", function(a, b, c, f) {
                      (b = f.responseJSON) &&
                          b &&
                          b.job &&
                          ((a = b.job),
                          a.manual && XF.JobRunner.runManual(a.manual),
                          a.autoBlocking
                              ? XF.JobRunner.runAutoBlocking(
                                    a.autoBlocking,
                                    a.autoBlockingMessage
                                )
                              : a.auto && setTimeout(XF.JobRunner.runAuto, 0));
                  });
                  g(r).on("keyup", "a:not([href])", function(a) {
                      "Enter" == a.key && g(a.currentTarget).click();
                  });
                  g("html[data-run-jobs]").length &&
                      setTimeout(XF.JobRunner.runAuto, 100);
                  XF.updateVisitorCountsOnLoad(XF.config.visitorCounts);
                  XF.CrossTab.on("visitorCounts", function(a) {
                      XF.updateVisitorCounts(a, !1);
                  });
                  XF.pageLoadScrollFix();
                  setTimeout(function() {
                      g("[data-load-auto-click]")
                          .first()
                          .click();
                  }, 100);
                  g(r).trigger("xf:page-load-complete");
              },
              addExtraPhrases: function(a) {
                  g(a)
                      .find("script.js-extraPhrases")
                      .each(function() {
                          var b = g(this);
                          try {
                              var c = g.parseJSON(b.html()) || {};
                              g.extend(XF.phrases, c);
                          } catch (f) {
                              console.error(f);
                          }
                          b.remove();
                      });
              },
              phrase: function(a, b, c) {
                  var f = XF.phrases[a];
                  f && b && (f = XF.stringTranslate(f, b));
                  return f || c || a;
              },
              _isRtl: null,
              isRtl: function() {
                  if (null === XF._isRtl) {
                      var a = g("html").attr("dir");
                      XF._isRtl = a && "RTL" == a.toUpperCase();
                  }
                  return XF._isRtl;
              },
              rtlFlipKeyword: function(a) {
                  if (!XF.isRtl()) return a;
                  switch (a.toLowerCase()) {
                      case "left":
                          return "right";
                      case "right":
                          return "left";
                      default:
                          return a;
                  }
              },
              isMac: function() {
                  return -1 != navigator.userAgent.indexOf("Mac OS");
              },
              isIOS: function() {
                  return (
                      /iPad|iPhone|iPod/.test(navigator.userAgent) &&
                      !q.MSStream
                  );
              },
              isIE: function() {
                  var a = navigator.userAgent;
                  return 0 < a.indexOf("MSIE ") || 0 < a.indexOf("Trident/");
              },
              log: function() {
                  console.log &&
                      console.log.apply &&
                      console.log.apply(console, arguments);
              },
              findRelativeIf: function(a, b) {
                  if (!a) throw Error("No selector provided");
                  var c;
                  if ((c = a.match(/^(<|>|\|)/))) {
                      if ("<" == c[1]) return b.findExtended(a);
                      "|" == c[1] && (a = a.substr(1));
                      return b.find(a);
                  }
                  return g(a);
              },
              isElementVisible: function(a) {
                  a = a[0].getBoundingClientRect();
                  return (
                      0 <= a.top &&
                      0 <= a.left &&
                      a.bottom <= g(q).height() &&
                      a.right <= g(q).width()
                  );
              },
              layoutChange: function() {
                  XF._layoutChangeTriggered ||
                      ((XF._layoutChangeTriggered = !0),
                      setTimeout(function() {
                          XF._layoutChangeTriggered = !1;
                          g(r.body)
                              .trigger("sticky_kit:recalc")
                              .trigger("xf:layout");
                      }, 0));
              },
              _layoutChangeTriggered: !1,
              updateAvatars: function(a, b, c) {
                  g(".avatar").each(function() {
                      var f = g(this),
                          e = f.find("img, span").first(),
                          d = "avatar-u" + a + "-",
                          h = f.hasClass("avatar--updateLink")
                              ? f.find(".avatar-update")
                              : null;
                      if (
                          (c || !e.hasClass(".js-croppedAvatar")) &&
                          e.is('[class^="' + d + '"]')
                      ) {
                          if (e.hasClass(d + "s")) e = g(b.s);
                          else if (e.hasClass(d + "m")) e = g(b.m);
                          else if (e.hasClass(d + "l")) e = g(b.l);
                          else if (e.hasClass(d + "o")) e = g(b.o);
                          else return;
                          f.html(e.html());
                          e.hasClass("avatar--default")
                              ? (f.addClass("avatar--default"),
                                e.hasClass("avatar--default--dynamic")
                                    ? f.addClass("avatar--default--dynamic")
                                    : e.hasClass("avatar--default--text")
                                    ? f.addClass("avatar--default--text")
                                    : e.hasClass("avatar--default--image") &&
                                      f.addClass("avatar--default--image"))
                              : f.removeClass(
                                    "avatar--default avatar--default--dynamic avatar--default--text avatar--default--image"
                                );
                          f.attr("style", e.attr("style"));
                          h && f.append(h);
                      }
                  });
              },
              updateVisitorCounts: function(a, b, c) {
                  a &&
                      "public" == XF.getApp() &&
                      (XF.badgeCounterUpdate(
                          g(".js-badge--conversations"),
                          a.conversations_unread
                      ),
                      XF.badgeCounterUpdate(
                          g(".js-badge--alerts"),
                          a.alerts_unviewed
                      ),
                      XF.config.visitorCounts.title_count &&
                          XF.pageTitleCounterUpdate(a.total_unread),
                      XF.config.visitorCounts.icon_indicator &&
                          XF.faviconUpdate(a.total_unread),
                      b &&
                          (XF.appBadgeUpdate(a.total_unread),
                          XF.CrossTab.trigger("visitorCounts", a),
                          XF.LocalStorage.setJson("visitorCounts", {
                              time:
                                  c ||
                                  Math.floor(new Date().getTime() / 1e3) - 1,
                              conversations_unread: a.conversations_unread,
                              alerts_unviewed: a.alerts_unviewed,
                              total_unread: a.total_unread
                          })));
              },
              updateVisitorCountsOnLoad: function(a) {
                  var b = XF.getLocalLoadTime(),
                      c = XF.LocalStorage.getJson("visitorCounts");
                  c &&
                      c.time &&
                      c.time > b &&
                      ((a.conversations_unread = c.conversations_unread),
                      (a.alerts_unviewed = c.alerts_unviewed),
                      (a.total_unread = c.total_unread));
                  XF.updateVisitorCounts(a, !0, b);
              },
              badgeCounterUpdate: function(a, b) {
                  a.length &&
                      (a.attr("data-badge", b),
                      "0" != String(b)
                          ? a.addClass("badgeContainer--highlighted")
                          : a.removeClass("badgeContainer--highlighted"));
              },
              shouldCountBeShown: function(a) {
                  return 0 < parseInt(a.replace(/[,. ]/g, ""));
              },
              pageTitleCache: "",
              pageTitleCounterUpdate: function(a) {
                  var b = r.title;
                  "" === XF.pageTitleCache && (XF.pageTitleCache = b);
                  b !== XF.pageTitleCache &&
                      "(" === b.charAt(0) &&
                      (b = XF.pageTitleCache);
                  a = (this.shouldCountBeShown(a) ? "(" + a + ") " : "") + b;
                  a != r.title && (r.title = a);
              },
              favIconAlertShown: !1,
              faviconUpdate: function(a) {
                  var b = this.shouldCountBeShown(a);
                  if (b !== XF.favIconAlertShown) {
                      var c = g('link[rel~="icon"]');
                      if (c.length) {
                          XF.favIconAlertShown = b;
                          var f = this;
                          c.each(function(e, d) {
                              var h = g(d);
                              e = h.attr("href");
                              d = h.data("original-href");
                              f.shouldCountBeShown(a)
                                  ? (d || h.data("original-href", e),
                                    g("<img />")
                                        .on("load", function() {
                                            var k = XF.faviconDraw(this);
                                            k && h.attr("href", k);
                                        })
                                        .attr("src", e))
                                  : d &&
                                    h
                                        .attr("href", d)
                                        .removeData("original-href");
                          });
                      }
                  }
              },
              faviconDraw: function(a) {
                  var b = a.naturalWidth,
                      c = a.naturalHeight;
                  c = g("<canvas />").attr({ width: b, height: c });
                  var f = c[0].getContext("2d"),
                      e = b / (32 / 6),
                      d = 2 * Math.PI;
                  f.drawImage(a, 0, 0);
                  f.beginPath();
                  f.arc(e, e, e, 0, d, !1);
                  f.fillStyle = "#E03030";
                  f.fill();
                  f.lineWidth = b / 16;
                  f.strokeStyle = "#EAEAEA";
                  f.stroke();
                  f.closePath();
                  try {
                      return c[0].toDataURL("image/png");
                  } catch (h) {
                      return null;
                  }
              },
              appBadgeUpdate: function(a) {
                  "setAppBadge" in navigator &&
                      !navigator.webdriver &&
                      !navigator.userAgent.match(
                          /Chrome-Lighthouse|Googlebot|AdsBot-Google|Mediapartners-Google/i
                      ) &&
                      ((a = parseInt(String(a).replace(/[,. ]/g, ""))),
                      navigator.setAppBadge(a));
              },
              unparseBbCode: function(a) {
                  var b = g(r.createElement("div"));
                  b.html(a);
                  b.find(".js-noSelectToQuote").each(function() {
                      g(this).remove();
                  });
                  g.each(["B", "I", "U", "S"], function(c, f) {
                      b.find(f).each(function() {
                          g(this).replaceWith(
                              "[" + f + "]" + g(this).html() + "[/" + f + "]"
                          );
                      });
                  });
                  b.find(".bbCodeBlock--quote").each(function() {
                      var c = g(this),
                          f = c.find(".bbCodeBlock-expandContent");
                      f.length
                          ? c.replaceWith(
                                "<div>[QUOTE]" + f.html() + "[/QUOTE]</div>"
                            )
                          : f.find(".bbCodeBlock-expand").remove();
                  });
                  b.find(".bbCodeBlock--code").each(function() {
                      var c = g(this);
                      if (!c.find(".bbCodeCode")) return !0;
                      var f = c.find(".bbCodeCode code");
                      if (!f.length) return !0;
                      var e = f.attr("class");
                      e = (e = e ? e.match(/language-(\S+)/) : null)
                          ? e[1]
                          : null;
                      f.removeAttr("class");
                      c.replaceWith(
                          f.first().attr("data-language", e || "none")
                      );
                  });
                  b.find(".bbCodeBlock--unfurl").each(function() {
                      var c = g(this).data("url");
                      g(this).replaceWith("[URL unfurl=true]" + c + "[/URL]");
                  });
                  b.find('div[style*="text-align"]').each(function() {
                      var c = g(this)
                          .css("text-align")
                          .toUpperCase();
                      g(this).replaceWith(
                          "[" + c + "]" + g(this).html() + "[/" + c + "]"
                      );
                  });
                  b.find(".bbCodeSpoiler").each(function() {
                      var c = "";
                      var f = g(this).find(".bbCodeSpoiler-button");
                      if (f.length) {
                          var e = g(this)
                              .find(".bbCodeSpoiler-content")
                              .html();
                          f = f.find(".bbCodeSpoiler-button-title");
                          f.length && (c = '="' + f.text() + '"');
                          g(this).replaceWith(
                              "[SPOILER" + c + "]" + e + "[/SPOILER]"
                          );
                      }
                  });
                  b.find(".bbCodeInlineSpoiler").each(function() {
                      var c = g(this).html();
                      g(this).replaceWith("[ISPOILER]" + c + "[/ISPOILER]");
                  });
                  return b.html();
              },
              hideOverlays: function() {
                  g.each(XF.Overlay.cache, function(a, b) {
                      b.hide();
                  });
              },
              hideTooltips: function() {
                  g.each(XF.TooltipTrigger.cache, function(a, b) {
                      b.hide();
                  });
              },
              hideParentOverlay: function(a) {
                  a = a.closest(".overlay-container");
                  a.length && a.data("overlay") && a.data("overlay").hide();
              },
              getStickyHeaderOffset: function() {
                  var a,
                      b = 0;
                  for (a = 0; a < XF.StickyHeader.cache.length; a++) {
                      var c = XF.StickyHeader.cache[a];
                      c.$target.hasClass(c.options.stickyClass) &&
                          (b += c.$target.outerHeight());
                  }
                  return b;
              },
              loadedScripts: {},
              loadScript: function(a, b) {
                  if (XF.loadedScripts.hasOwnProperty(a)) return !1;
                  XF.loadedScripts[a] = !0;
                  return g.ajax({
                      url: a,
                      dataType: "script",
                      cache: !0,
                      global: !1,
                      success: b
                  });
              },
              loadScripts: function(a, b) {
                  function c() {
                      k--;
                      0 === k && b && b();
                  }
                  function f() {
                      for (var n; m[0] && "loaded" == m[0].readyState; )
                          (n = m.shift()),
                              (n.onreadystatechange = null),
                              (n.onerror = null),
                              h.appendChild(n),
                              c();
                  }
                  var e = r.scripts[0],
                      d = "async" in e;
                  e = e.readyState;
                  var h = r.head,
                      k = 0,
                      m = [],
                      l;
                  for (l in a)
                      if (a.hasOwnProperty(l)) {
                          var p = a[l];
                          XF.loadedScripts[p] ||
                              ((XF.loadedScripts[p] = !0),
                              k++,
                              d
                                  ? (function(n) {
                                        var t = g("<script>").prop({
                                            src: n,
                                            async: !1
                                        });
                                        t.on("load error", function(x) {
                                            t.off("load error");
                                            c();
                                        });
                                        h.appendChild(t[0]);
                                    })(p)
                                  : e
                                  ? (function(n) {
                                        var t = r.createElement("script");
                                        m.push(t);
                                        t.onreadystatechange = f;
                                        t.onerror = function() {
                                            t.onreadystatechange = null;
                                            t.onerror = null;
                                            c();
                                        };
                                        t.src = n;
                                    })(p)
                                  : g
                                        .ajax({
                                            url: p,
                                            dataType: "script",
                                            cache: !0,
                                            global: !1
                                        })
                                        .always(c));
                      }
                  !k && b && b();
              },

              dataPush: function(a, b, c) {
                  a && "string" != typeof a
                      ? void 0 !== a[0]
                          ? a.push({ name: b, value: c })
                          : q.FormData && a instanceof FormData
                          ? a.append(b, c)
                          : (a[b] = c)
                      : ((a = String(a)),
                        (a +=
                            "&" +
                            encodeURIComponent(b) +
                            "=" +
                            encodeURIComponent(c)));
                  return a;
              },
              defaultAjaxSuccessError: function(a, b, c) {
                  if ("object" != typeof a)
                      return XF.alert("Response was not JSON."), !0;
                  a.html &&
                      a.html.templateErrors &&
                      ((b =
                          "Errors were triggered when rendering this template:"),
                      a.html.templateErrorDetails &&
                          (b +=
                              "\n* " +
                              a.html.templateErrorDetails.join("\n* ")),
                      console.error(b));
                  return a.errorHtml
                      ? (XF.setupHtmlInsert(a.errorHtml, function(f, e) {
                            e =
                                e.h1 ||
                                e.title ||
                                XF.phrase("oops_we_ran_into_some_problems");
                            XF.overlayMessage(e, f);
                        }),
                        !0)
                      : a.errors
                      ? (XF.alert(a.errors), !0)
                      : a.exception
                      ? (XF.alert(a.exception), !0)
                      : !1;
              },
              defaultAjaxSuccess: function(a, b, c) {
                  a &&
                      "ok" == a.status &&
                      a.message &&
                      XF.flashMessage(a.message, 3e3);
                  return !1;
              },
              defaultAjaxError: function(a, b, c) {
                  switch (b) {
                      case "abort":
                          return;
                      case "timeout":
                          XF.alert(
                              XF.phrase(
                                  "server_did_not_respond_in_time_try_again"
                              )
                          );
                          return;
                      case "notmodified":
                      case "error":
                          if (!a || !a.responseText) return;
                  }
                  console.error("PHP: " + a.responseText);
                  XF.alert(
                      XF.phrase(
                          "oops_we_ran_into_some_problems_more_details_console"
                      )
                  );
              },
              activate: function(a) {
                  XF.addExtraPhrases(a);
                  XF.IgnoreWatcher.refresh(a);
                  XF.Element.initialize(a);
                  XF.DynamicDate.refresh(a);
                  XF.ExpandableContent.checkSizing(a);
                  XF.UnfurlLoader.activateContainer(a);
                  XF.KeyboardShortcuts.initializeElements(a);
                  XF.FormInputValidation.initializeElements(a);
                  var b = a instanceof g ? a.get(0) : a;
                  q.FB &&
                      setTimeout(function() {
                          FB.XFBML.parse(b);
                      }, 0);
                  g(r).trigger("xf:reinit", [a]);
              },
              getDefaultFormData: function(a, b, c, f) {
                  var e;
                  b && b.length && b.attr("name") && (e = b.attr("name"));
                  c &&
                      "multipart/form-data" === a.attr("enctype") &&
                      console.error(
                          "JSON serialized forms do not support the file upload-style enctype."
                      );
                  if (q.FormData && !c) {
                      var d = new FormData(a[0]);
                      e && d.append(e, b.attr("value"));
                      a.find('input[type="file"]').each(function() {
                          var p = g(this);
                          if (0 === p.prop("files").length)
                              try {
                                  d.delete(p.attr("name"));
                              } catch (n) {}
                      });
                  } else {
                      if (c) {
                          a = a.is("form") ? g(a[0].elements) : a;
                          var h,
                              k = [],
                              m = [];
                          if (f) {
                              "string" === typeof f && (f = f.split(","));
                              var l = [];
                              g.each(f, function(p, n) {
                                  "number" === typeof p
                                      ? l.push(XF.regexQuote(g.trim(n)))
                                      : l.push(XF.regexQuote(g.trim(p)));
                              });
                              l.length &&
                                  (h = new RegExp(
                                      "^(" + l.join("|") + ")(\\[|$)"
                                  ));
                          }
                          a.each(function(p, n) {
                              (p = n.name) && "_xf" !== p.substring(0, 3)
                                  ? !h || h.test(p)
                                      ? k.push(n)
                                      : m.push(n)
                                  : m.push(n);
                          });
                          d = g(m).serializeArray();
                          f = g(k).serializeJSON();
                          d.unshift({ name: c, value: JSON.stringify(f) });
                      } else d = a.serializeArray();
                      e && d.push({ name: e, value: b.attr("value") });
                  }
                  return d;
              },
              scriptMatchRegex: /<script([^>]*)>([\s\S]*?)<\/script>/gi,
              setupHtmlInsert: function(a, b, c) {
                  if ("string" === typeof a || a instanceof g)
                      a = { content: a };
                  if ("object" == typeof a && a.content) {
                      var f = arguments;
                      XF.Loader.load(a.js, a.css, function() {
                          var e,
                              d = a.jsInline || [],
                              h = a.content,
                              k = "string" == typeof h,
                              m = f[2] ? !0 : !1;
                          if (a.cssInline)
                              for (e = 0; e < a.cssInline.length; e++)
                                  g(
                                      "<style>" + a.cssInline[e] + "</style>"
                                  ).appendTo("head");
                          if (k) {
                              var l;
                              h = g.trim(h);
                              if (!m)
                                  for (; (e = XF.scriptMatchRegex.exec(h)); ) {
                                      var p = !1;
                                      if (
                                          (l = e[1].match(
                                              /(^|\s)type=("|'|)([^"' ;]+)/
                                          ))
                                      )
                                          switch (l[3].toLowerCase()) {
                                              case "text/javascript":
                                              case "text/ecmascript":
                                              case "application/javascript":
                                              case "application/ecmascript":
                                                  p = !0;
                                          }
                                      else p = !0;
                                      p &&
                                          (d.push(e[2]),
                                          (h = h.replace(e[0], "")));
                                  }
                              h = h.replace(
                                  /<noscript>([\s\S]*?)<\/noscript>/gi,
                                  ""
                              );
                          }
                          var n = g(k ? g.parseHTML(h, null, m) : h);
                          n.retinaFix();
                          n.find("noscript")
                              .empty()
                              .remove();
                          if (b instanceof g) {
                              var t = b;
                              b = function(v) {
                                  t.html(v);
                              };
                          }
                          if ("function" !== typeof b)
                              console.error("onReady was not a function");
                          else {
                              var x = !1;
                              h = function(v) {
                                  if (!x) {
                                      x = !0;
                                      for (var y = 0; y < d.length; y++)
                                          g.globalEval(d[y]);
                                      a.jsState &&
                                          (XF.config.jsState = XF.applyJsState(
                                              XF.config.jsState,
                                              a.jsState
                                          ));
                                      v || XF.activate(n);
                                  }
                              };
                              !1 !== b(n, a, h) && h();
                          }
                      });
                  } else
                      console.error(
                          "Was not provided an object or HTML content"
                      );
              },
              alert: function(a, b, c, f) {
                  var e = a;
                  "object" == typeof a &&
                      ((e = "<ul>"),
                      g.each(a, function(d, h) {
                          e += "<li>" + h + "</li>";
                      }),
                      (e += "</ul>"),
                      (e = '<div class="blockMessage">' + e + "</div>"));
                  b || (b = "error");
                  if (!c)
                      switch (b) {
                          case "error":
                              c = XF.phrase("oops_we_ran_into_some_problems");
                              break;
                          default:
                              c = "";
                      }
                  return XF.overlayMessage(c, e);
              },
              getOverlayHtml: function(a) {
                  var b = { dismissible: !0, title: null, url: null };
                  g.isPlainObject(a) &&
                      ((b = g.extend({}, b, a)), a.html && (a = a.html));
                  if ("string" == typeof a) a = g(g.parseHTML(a));
                  else if (!(a instanceof g))
                      throw Error(
                          "Can only create an overlay with html provided as a string or jQuery object"
                      );
                  if (!a.is(".overlay")) {
                      var c = b.title;
                      if (!c) {
                          var f = a.find(".overlay-title");
                          f.length && ((c = f.contents()), f.remove());
                      }
                      c || (c = XF.htmlspecialchars(g("title").text()));
                      f = a.find(".overlay-content");
                      f.length && (a = f);
                      f = g(
                          '<div class="overlay" tabindex="-1" data-url="' +
                              b.url +
                              '"><div class="overlay-title"></div><div class="overlay-content"></div></div>'
                      );
                      var e = f.find(".overlay-title");
                      e.html(c);
                      b.dismissible &&
                          e.prepend(
                              '<a class="overlay-titleCloser js-overlayClose" role="button" tabindex="0" aria-label="' +
                                  XF.phrase("close") +
                                  '"></a>'
                          );
                      f.find(".overlay-content").html(a);
                      a = f;
                  }
                  a.appendTo("body");
                  return a;
              },
              createMultiBar: function(a, b, c, f) {},
              getMultiBarHtml: function(a) {
                  var b = { dismissible: !0, title: null };
                  g.isPlainObject(a) &&
                      (g.extend({}, b, a), a.html && (a = a.html));
                  if ("string" == typeof a) a = g(g.parseHTML(a));
                  else if (!(a instanceof g))
                      throw Error(
                          "Can only create an action bar with html provided as a string or jQuery object"
                      );
                  b = g(
                      '<div class="multiBar" tabindex="-1"><div class="multiBar-inner"><span>Hello there.</span></div></div>'
                  );
                  b.find(".multiBar-inner").html(a);
                  b.appendTo("body");
                  return b;
              },
              overlayMessage: function(a, b) {
                  if ("string" == typeof b) b = g(g.parseHTML(b));
                  else if (!(b instanceof g))
                      throw Error(
                          "Can only create an overlay with html provided as a string or jQuery object"
                      );
                  b.is(".block, .blockMessage") ||
                      b.find(".block, .blockMessage").length ||
                      (b = g('<div class="blockMessage" />').html(b));
                  b = XF.getOverlayHtml({ title: a, html: b });
                  return XF.showOverlay(b, { role: "alertdialog" });
              },
              flashMessage: function(a, b, c) {
                  var f = g(
                      '<div class="flashMessage"><div class="flashMessage-content"></div></div>'
                  );
                  f.find(".flashMessage-content").html(a);
                  f.appendTo("body").addClassTransitioned("is-active");
                  setTimeout(function() {
                      f.removeClassTransitioned("is-active", function() {
                          f.remove();
                          c && c();
                      });
                  }, Math.max(500, b));
              },
              htmlspecialchars: function(a) {
                  return String(a)
                      .replace(/&/g, "&amp;")
                      .replace(/"/g, "&quot;")
                      .replace(/</g, "&lt;")
                      .replace(/>/g, "&gt;");
              },
              regexQuote: function(a) {
                  return (a + "").replace(
                      /([\\\.\+\*\?\[\^\]\$\(\)\{\}=!<>\|:])/g,
                      "\\$1"
                  );
              },
              stringTranslate: function(a, b) {
                  a = a.toString();
                  for (var c in b)
                      if (b.hasOwnProperty(c)) {
                          var f = new RegExp(XF.regexQuote(c, "g"));
                          a = a.replace(f, b[c]);
                      }
                  return a;
              },
              stringHashCode: function(a) {
                  var b = 0,
                      c;
                  if (0 === a.length) return b;
                  var f = 0;
                  for (c = a.length; f < c; f++) {
                      var e = a.charCodeAt(f);
                      b = (b << 5) - b + e;
                      b |= 0;
                  }
                  return b;
              },
              getUniqueCounter: function() {
                  var a = XF.counter;
                  XF.counter++;
                  return a;
              },
              canonicalizeUrl: function(a) {
                  if (a.match(/^[a-z]+:/i)) return a;
                  if (0 == a.indexOf("/")) {
                      var b;
                      return (b = XF.config.url.fullBase.match(
                          /^([a-z]+:(\/\/)?[^\/]+)\//i
                      ))
                          ? b[1] + a
                          : a;
                  }
                  return XF.config.url.fullBase + a;
              },
              isRedirecting: !1,
              redirect: function(a) {
                  XF.isRedirecting = !0;
                  if (XF.JobRunner.isBlockingJobRunning())
                      return (
                          g(r).one("job:blocking-complete", function() {
                              XF.redirect(a);
                          }),
                          !1
                      );
                  a = XF.canonicalizeUrl(a);
                  var b = q.location;
                  if (a == b.href) b.reload(!0);
                  else {
                      q.location = a;
                      var c = a.split("#"),
                          f = b.href.split("#");
                      c[1] && c[0] == f[0] && b.reload(!0);
                  }
                  return !0;
              },
              getAutoCompleteUrl: function() {
                  return "admin" == XF.getApp()
                      ? XF.canonicalizeUrl("admin.php?users/find")
                      : XF.canonicalizeUrl("index.php?members/find");
              },
              applyDataOptions: function(a, b, c) {
                  var f = {},
                      e;
                  for (e in a)
                      if (
                          a.hasOwnProperty(e) &&
                          ((f[e] = a[e]), b.hasOwnProperty(e))
                      ) {
                          var d = b[e];
                          var h = typeof d;
                          var k = !0;
                          switch (typeof f[e]) {
                              case "string":
                                  "string" != h && (d = String(d));
                                  break;
                              case "number":
                                  "number" != h &&
                                      ((d = Number(d)), isNaN(d) && (k = !1));
                                  break;
                              case "boolean":
                                  if ("boolean" != h)
                                      switch (d) {
                                          case "true":
                                          case "yes":
                                          case "on":
                                          case "1":
                                          case 1:
                                              d = !0;
                                              break;
                                          default:
                                              d = !1;
                                      }
                          }
                          k && (f[e] = d);
                      }
                  g.isPlainObject(c) && (f = g.extend(f, c));
                  return f;
              },
              watchInputChangeDelayed: function(a, b, c) {
                  var f = g(a),
                      e = f.val(),
                      d;
                  c = c || 200;
                  f.onPassive({
                      keyup: function() {
                          clearTimeout(d);
                          d = setTimeout(function() {
                              var h = f.val();
                              h != e && ((e = h), b());
                          }, c);
                      },
                      paste: function() {
                          setTimeout(function() {
                              f.trigger("keyup");
                          }, 0);
                      }
                  });
              },
              insertIntoEditor: function(a, b, c, f) {
                  return XF.modifyEditorContent(
                      a,
                      function(e) {
                          e.insertContent(b);
                      },
                      function(e) {
                          XF.insertIntoTextBox(e, c);
                      },
                      f
                  );
              },
              replaceEditorContent: function(a, b, c, f) {
                  return XF.modifyEditorContent(
                      a,
                      function(e) {
                          e.replaceContent(b);
                      },
                      function(e) {
                          XF.replaceIntoTextBox(e, c);
                      },
                      f
                  );
              },
              clearEditorContent: function(a, b) {
                  b = XF.replaceEditorContent(a, "", "", b);
                  a.trigger("draft:sync");
                  return b;
              },
              modifyEditorContent: function(a, b, c, f) {
                  a = XF.getEditorInContainer(a, f);
                  return a
                      ? XF.Editor && a instanceof XF.Editor
                          ? (a.isBbCodeView()
                                ? ((b = a.ed.bbCode.getTextArea()),
                                  c(b),
                                  b.trigger("autosize"))
                                : b(a),
                            !0)
                          : a instanceof g && a.is("textarea")
                          ? (c(a), a.trigger("autosize"), !0)
                          : !1
                      : !1;
              },
              getEditorInContainer: function(a, b) {
                  if (a.is(".js-editor")) {
                      if (b && a.is(b)) return null;
                      b = a;
                  } else {
                      a = a.find(".js-editor");
                      b && (a = a.not(b));
                      if (!a.length) return null;
                      b = a.first();
                  }
                  return (a = XF.Element.getHandler(b, "editor"))
                      ? a
                      : b.is("textarea")
                      ? b
                      : null;
              },
              focusEditor: function(a, b) {
                  a = XF.getEditorInContainer(a, b);
                  return a
                      ? XF.Editor && a instanceof XF.Editor
                          ? (a.isInitialized() && a.scrollToCursor(), !0)
                          : a instanceof g && a.is("textarea")
                          ? (a.autofocus(), !0)
                          : !1
                      : !1;
              },
              insertIntoTextBox: function(a, b) {
                  var c = a[0],
                      f = c.scrollTop,
                      e = c.selectionStart,
                      d = c.selectionEnd,
                      h = a.val(),
                      k = h.substring(0, e);
                  d = h.substring(d, h.length);
                  a.val(k + b + d).trigger("autosize");
                  c.selectionStart = c.selectionEnd = e + b.length;
                  c.scrollTop = f;
                  a.autofocus();
              },
              replaceIntoTextBox: function(a, b) {
                  a.val(b).trigger("autosize");
              },
              isElementWithinDraftForm: function(a) {
                  a = a.is("form") ? a : a.closest("form");
                  return a.length && a.is("[data-xf-init~=draft]");
              },
              logRecentEmojiUsage: function(a) {
                  a = g.trim(a);
                  var b = XF.Feature.has("hiddenscroll") ? 12 : 11,
                      c = XF.Cookie.get("emoji_usage");
                  c = c ? c.split(",") : [];
                  var f = c.indexOf(a);
                  -1 !== f && c.splice(f, 1);
                  c.push(a);
                  c.length > b &&
                      (c = c
                          .reverse()
                          .slice(0, b)
                          .reverse());
                  XF.Cookie.set(
                      "emoji_usage",
                      c.join(","),
                      new Date(
                          new Date().setFullYear(new Date().getFullYear() + 1)
                      )
                  );
                  g(r).trigger("recent-emoji:logged");
                  return c;
              },
              getRecentEmojiUsage: function() {
                  var a = XF.Cookie.get("emoji_usage");
                  return (a ? a.split(",") : []).reverse();
              },
              getFixedOffsetParent: function(a) {
                  do {
                      if ("fixed" == a.css("position")) return a;
                      a = a.parent();
                  } while (a[0] && 1 === a[0].nodeType);
                  return g(r.documentElement);
              },
              getFixedOffset: function(a) {
                  var b = a.offset(),
                      c = XF.getFixedOffsetParent(a);
                  if (a.is("html")) return b;
                  a = c.offset();
                  return { top: b.top - a.top, left: b.left - a.left };
              },
              autoFocusWithin: function(a, b, c) {
                  var f = a.find(b || "[autofocus]");
                  f.length ||
                      (!f.length &&
                          XF.NavDeviceWatcher.isKeyboardNav() &&
                          (f = a
                              .find("a, button, :input, [tabindex]")
                              .filter(":visible")
                              .not(":disabled, [data-no-auto-focus]")
                              .first()),
                      f.length ||
                          ((b = a.is("form:not([data-no-auto-focus])")
                              ? a
                              : a
                                    .find("form:not([data-no-auto-focus])")
                                    .first()),
                          b.length &&
                              (f = b
                                  .find(":input, button")
                                  .filter(":visible")
                                  .not(":disabled, .select2-hidden-accessible")
                                  .first())),
                      !f.length && c && c.length && (f = c),
                      f.length || (a.attr("tabindex", "-1"), (f = a)));
                  f = f.first();
                  a = [];
                  c = f[0].parentNode;
                  do a.push({ el: c, left: c.scrollLeft, top: c.scrollTop });
                  while ((c = c.parentNode));
                  f.on("focus", function() {
                      g(q).on("resize", function() {
                          setTimeout(function() {
                              XF.isElementVisible(f) ||
                                  (f.get(0).scrollIntoView({
                                      behavior: "smooth",
                                      block: "end",
                                      inline: "nearest"
                                  }),
                                  g(q).off("resize"));
                          }, 50);
                      });
                  });
                  f.first().autofocus();
                  for (b = 0; b < a.length; b++)
                      (c = a[b].el),
                          c.scrollLeft != a[b].left &&
                              (c.scrollLeft = a[b].left),
                          c.scrollTop != a[b].top && (c.scrollTop = a[b].top);
              },
              bottomFix: function(a) {
                  var b = g(".js-bottomFixTarget").first();
                  b
                      ? b.append(a)
                      : g(a)
                            .css({ position: "fixed", bottom: 0 })
                            .appendTo("body");
              },
              addFixedMessage: function(a, b) {
                  var c = g(
                      g.parseHTML(
                          '<div class="fixedMessageBar"><div class="fixedMessageBar-inner"><div class="fixedMessageBar-message"></div><a class="fixedMessageBar-close" data-close="true" role="button" tabindex="0" aria-label="' +
                              XF.phrase("close") +
                              '"></a></div></div>'
                      )
                  );
                  c.find(".fixedMessageBar-message").html(a);
                  b &&
                      (b.class && (c.addClass(b.class), delete b.class),
                      c.attr(b));
                  c.on("click", "[data-close]", function() {
                      c.removeClassTransitioned("is-active", function() {
                          c.remove();
                      });
                  });
                  XF.bottomFix(c);
                  c.addClassTransitioned("is-active");
              },
              _measureScrollBar: null,
              measureScrollBar: function(a, b) {
                  b = "height" == b || "h" == b ? "h" : "w";
                  if (a || null === XF._measureScrollBar) {
                      var c = g('<div class="scrollMeasure" />');
                      c.appendTo(a || "body");
                      var f = c[0];
                      f = {
                          w: f.offsetWidth - f.clientWidth,
                          h: f.offsetHeight - f.clientHeight
                      };
                      c.remove();
                      a || (XF._measureScrollBar = f);
                      return f[b];
                  }
                  return XF._measureScrollBar[b];
              },
              windowHeight: function() {
                  return XF.browser.ios || XF.browser.android
                      ? q.innerHeight
                      : g(q).height();
              },
              pageLoadScrollFix: function() {
                  if (!XF.Feature?.has("overflowanchor") && q.location.hash) {
                      var a = !1,
                          b = function() {
                              if (!a) {
                                  var c = q.location.hash.replace(
                                      /[^a-zA-Z0-9_-]/g,
                                      ""
                                  );
                                  c = c ? g("#" + c) : g();
                                  c.length && c.get(0).scrollIntoView(!0);
                              }
                          };
                      "complete" == r.readyState
                          ? setTimeout(b, 0)
                          : (setTimeout(function() {
                                g(q).one("scroll", function(c) {
                                    a = !0;
                                });
                            }, 100),
                            g(q).one("load", b));
                  }
              },
              applyJsState: function(a, b) {
                  a = a || {};
                  if (!b) return a;
                  for (var c in b)
                      b.hasOwnProperty(c) &&
                          !a[c] &&
                          XF.jsStates.hasOwnProperty(c) &&
                          XF.jsStates[c]() &&
                          (a[c] = !0);
                  return a;
              },
              jsStates: {
                  facebook: function() {
                      return this.fbSdk();
                  },
                  fbSdk: function() {
                      g(r.body).append(g('<div id="fb-root" />'));
                      q.fbAsyncInit = function() {
                          FB.init({ version: "v2.7", xfbml: !0 });
                      };
                      XF.loadScript(
                          "https://connect.facebook.net/" +
                              XF.getLocale() +
                              "/sdk.js"
                      );
                      return !0;
                  },
                  twitter: function() {
                      q.twttr = (function() {
                          var a = q.twttr || {};
                          XF.loadScript(
                              "https://platform.twitter.com/widgets.js"
                          ) &&
                              ((a._e = []),
                              (a.ready = function(b) {
                                  a._e.push(b);
                              }));
                          return a;
                      })();
                      return !0;
                  },
                  flickr: function() {
                      XF.loadScript(
                          "https://embedr.flickr.com/assets/client-code.js"
                      );
                      return !0;
                  },
                  instagram: function() {
                      XF.loadScript(
                          "https://platform.instagram.com/" +
                              XF.getLocale() +
                              "/embeds.js",
                          function() {
                              g(r).on("xf:reinit", function(a, b) {
                                  q.instgrm &&
                                      instgrm.Embeds.process(
                                          b instanceof g ? b.get(0) : b
                                      );
                              });
                          }
                      );
                  },
                  reddit: function() {
                      XF.loadScript(
                          "https://embed.redditmedia.com/widgets/platform.js"
                      );
                      XF.loadScript(
                          "https://www.redditstatic.com/comment-embed.js",
                          function() {
                              g(r).on("xf:reinit", function(a, b) {
                                  q.rembeddit && rembeddit.init();
                              });
                          }
                      );
                      return !0;
                  },
                  reddit_comment: function() {
                      return this.reddit();
                  },
                  imgur: function() {
                      q.imgurEmbed ||
                          (q.imgurEmbed = {
                              tasks: g("blockquote.imgur-embed-pub").length
                          });
                      XF.loadScript(
                          "//s.imgur.com/min/embed-controller.js",
                          function() {
                              g(r).on("xf:reinit", function(a, b) {
                                  imgurEmbed.tasks += g(
                                      "blockquote.imgur-embed-pub"
                                  ).length;
                                  for (a = 0; a < imgurEmbed.tasks; a++)
                                      imgurEmbed.createIframe(),
                                          imgurEmbed.tasks--;
                              });
                          }
                      );
                      return !0;
                  },
                  pinterest: function() {
                      XF.loadScript(
                          "//assets.pinterest.com/js/pinit.js",
                          function() {
                              g(r).on("xf:reinit", function(a, b) {
                                  PinUtils.build(b instanceof g ? b.get(0) : b);
                              });
                          }
                      );
                      return !0;
                  }
              },
              getLocale: function() {
                  var a = g("html")
                      .attr("lang")
                      .replace("-", "_");
                  a || (a = "en_US");
                  return a;
              },
              supportsPointerEvents: function() {
                  return "PointerEvent" in q;
              },
              isEventTouchTriggered: function(a) {
                  if (a) {
                      if (a.xfPointerType) return "touch" === a.xfPointerType;
                      if ((a = a.originalEvent)) {
                          if (
                              XF.supportsPointerEvents() &&
                              a instanceof PointerEvent
                          )
                              return "touch" === a.pointerType;
                          if (a.sourceCapabilities)
                              return a.sourceCapabilities.firesTouchEvents;
                      }
                  }
                  return XF.Feature?.has("touchevents");
              },
              getElEffectiveZIndex: function(a) {
                  var b = parseInt(a.css("z-index"), 10) || 0;
                  a.parents().each(function(c, f) {
                      c = parseInt(g(f).css("z-index"), 10);
                      c > b && (b = c);
                  });
                  return b;
              },
              setRelativeZIndex: function(a, b, c, f) {
                  f || (f = 6);
                  var e = XF.getElEffectiveZIndex(b);
                  f && f > e && (e = f);
                  if (null === c || "undefined" === typeof c) c = 0;
                  e || c
                      ? a.each(function() {
                            var d = g(this);
                            "undefined" == typeof d.data("base-z-index") &&
                                d.data(
                                    "base-z-index",
                                    parseInt(d.css("z-index"), 10) || 0
                                );
                            d.css("z-index", d.data("base-z-index") + c + e);
                        })
                      : a.css("z-index", "");
              },
              adjustHtmlForRte: function(a) {
                  a = a.replace(/<img[^>]+>/gi, function(b) {
                      if (b.match(/class="([^"]* )?smilie( |")/)) {
                          var c;
                          if ((c = b.match(/alt="([^"]+)"/))) return c[1];
                      }
                      return b;
                  });
                  a = a.replace(
                      /([\w\W]|^)<a\s[^>]*data-user-id="\d+"\s+data-username="([^"]+)"[^>]*>([\w\W]+?)<\/a>/gi,
                      function(b, c, f, e) {
                          return (
                              c + ("@" == c ? "" : "@") + e.replace(/^@/, "")
                          );
                      }
                  );
                  a = a.replace(
                      /(<img\s[^>]*)src="[^"]*"(\s[^>]*)data-url="([^"]+)"/gi,
                      function(b, c, f, e) {
                          return c + 'src="' + e + '"' + f;
                      }
                  );
                  a = g("<div />").html(a);
                  a.find("blockquote").each(function(b, c) {
                      var f = g(c);
                      ["attributes", "quote", "source"].forEach(function(e) {
                          f.attr("data-" + e) || f.removeAttr("data-" + e);
                      });
                      f.find(".bbCodeBlock-title").remove();
                  });
                  return (a = a.html());
              },
              requestAnimationTimeout: function(a, b) {
                  function c() {
                      Date.now() - e >= b ? a() : (d.id = f(c));
                  }
                  b || (b = 0);
                  var f =
                          q.requestAnimationFrame ||
                          function(h) {
                              return q.setTimeout(h, 1e3 / 60);
                          },
                      e = Date.now(),
                      d = {};
                  d.id = f(c);
                  d.cancel = function() {
                      (q.cancelAnimationFrame || q.clearTimeout)(this.id);
                  };
                  return d;
              },
              proxy: function(a, b) {
                  var c;
                  if ("string" === typeof b) {
                      var f = a[b];
                      b = a;
                      a = f;
                  }
                  if ("function" === typeof a)
                      return (c = [].slice.call(arguments, 2))
                          ? function() {
                                return a.apply(
                                    b,
                                    c.concat([].slice.call(arguments))
                                );
                            }
                          : a.bind(b, c);
              },
              _localLoadTime: null,
              getLocalLoadTime: function() {
                  if (XF._localLoadTime) return XF._localLoadTime;
                  var a = XF.config.time,
                      b = g("#_xfClientLoadTime"),
                      c = b.val();
                  if (c && c.length) {
                      var f = c.split(",");
                      if (2 == f.length && parseInt(f[1], 10) == a.now) {
                          var e = parseInt(f[0], 10);
                          b.val(c);
                      }
                  }
                  e ||
                      (q.performance &&
                      q.performance.timing &&
                      0 !== q.performance.timing.requestStart
                          ? ((e = q.performance.timing),
                            (e = Math.floor(
                                (e.requestStart + e.responseStart) / 2e3
                            )))
                          : (e = Math.floor(new Date().getTime() / 1e3) - 1),
                      b.val(e + "," + a.now));
                  return (XF._localLoadTime = e);
              },
              getFutureDate: function(a, b) {
                  var c = 864e5;
                  switch (b) {
                      case "year":
                          c *= 365;
                          break;
                      case "month":
                          c *= 30;
                  }
                  c *= a;
                  return new Date(Date.now() + c);
              },
              smoothScroll: function(a, b, c, f) {
                  if ("undefined" === typeof c || null === c)
                      c = XF.config.speed.fast;
                  if (a instanceof g || "string" === typeof a) {
                      var e = a instanceof g ? a : g(a);
                      if (e.length) {
                          var d = e.offset().top;
                          a = parseInt(g("html").css("scroll-padding-top"), 10);
                          isNaN(a) || (d -= a);
                      } else d = null;
                      !0 === b && (b = e.length ? "#" + e.attr("id") : null);
                  } else "number" === typeof a && ((e = null), (d = a));
                  if (null === d) console.error("Invalid scroll position");
                  else {
                      0 > d && (d = 0);
                      e = function() {
                          b &&
                              "pushState" in q.history &&
                              q.history.pushState(
                                  {},
                                  "",
                                  q.location.toString().replace(/#.*$/, "") + b
                              );
                      };
                      if (
                          f &&
                          ((f = g(q).scrollTop()),
                          (a = f + g(q).height()),
                          d >= f && d <= a)
                      ) {
                          e();
                          return;
                      }
                      try {
                          e(),
                              g("html, body").animate(
                                  { scrollTop: d },
                                  c,
                                  function() {
                                      b &&
                                          !q.history.pushState &&
                                          (q.location.hash = b);
                                  }
                              );
                      } catch (h) {
                          b && (q.location.hash = b);
                      }
                  }
              }
          }),
          "function" != typeof Object.create &&
              (Object.create = (function() {
                  var a = function() {};
                  return function(b) {
                      a.prototype = b;
                      b = new a();
                      a.prototype = null;
                      return b;
                  };
              })()),
          (XF.create = function(a) {
              var b = function() {
                  this.__construct.apply(this, arguments);
              };
              b.prototype = Object.create(a);
              b.prototype.__construct ||
                  (b.prototype.__construct = function() {});
              return (b.prototype.constructor = b);
          }),
          (XF.extend = function(a, b) {
              var c = function() {
                      this.__construct.apply(this, arguments);
                  },
                  f;
              c.prototype = Object.create(a.prototype);
              c.prototype.__construct ||
                  (c.prototype.__construct = function() {});
              c.prototype.constructor = c;
              if ("object" == typeof b) {
                  if ("object" == typeof b.__backup) {
                      a = b.__backup;
                      for (f in a)
                          if (a.hasOwnProperty(f)) {
                              if (c.prototype[a[f]])
                                  throw Error(
                                      "Method " +
                                          a[f] +
                                          " already exists on object. Aliases must be unique."
                                  );
                              c.prototype[a[f]] = c.prototype[f];
                          }
                      delete b.__backup;
                  }
                  for (f in b) b.hasOwnProperty(f) && (c.prototype[f] = b[f]);
              }
              return c;
          }),
          (XF.classToConstructor = function(a) {
              var b = q,
                  c = a.split("."),
                  f;
              for (f = 0; f < c.length; f++) b = b[c[f]];
              return "function" != typeof b
                  ? (console.error("%s is not a function.", a), !1)
                  : b;
          }),
          (XF.Cookie = {
              get: function(a) {
                  return (a = new RegExp(
                      "(^| )" + XF.config.cookie.prefix + a + "=([^;]+)(;|$)"
                  ).exec(r.cookie))
                      ? decodeURIComponent(a[2])
                      : null;
              },
              getEncodedCookieValue: function(a, b, c, f) {
                  var e = XF.config.cookie;
                  return (
                      e.prefix +
                      a +
                      "=" +
                      encodeURIComponent(b) +
                      (void 0 === c ? "" : ";expires=" + c.toUTCString()) +
                      (e.path ? ";path=" + e.path : "") +
                      (e.domain ? ";domain=" + e.domain : "") +
                      (f ? ";samesite=" + f : "") +
                      (e.secure ? ";secure" : "")
                  );
              },
              getEncodedCookieValueSize: function(a, b, c, f) {
                  return this.getEncodedCookieValue(a, b, c, f).length;
              },
              set: function(a, b, c, f) {
                  r.cookie = this.getEncodedCookieValue(a, b, c, f);
              },
              getJson: function(a) {
                  a = this.get(a);
                  if (!a) return {};
                  try {
                      return g.parseJSON(a) || {};
                  } catch (b) {
                      return {};
                  }
              },
              setJson: function(a, b, c) {
                  this.set(a, JSON.stringify(b), c);
              },
              remove: function(a) {
                  var b = XF.config.cookie;
                  r.cookie =
                      b.prefix +
                      a +
                      "=" +
                      (b.path ? "; path=" + b.path : "") +
                      (b.domain ? "; domain=" + b.domain : "") +
                      (b.secure ? "; secure" : "") +
                      "; expires=Thu, 01-Jan-70 00:00:01 GMT";
              },
              supportsExpiryDate: function() {
                  return !0;
              }
          }),
          (XF.LocalStorage = {
              getKeyName: function(a) {
                  return XF.config.cookie.prefix + a;
              },
              get: function(a) {
                  var b = null;
                  try {
                      b = q.localStorage.getItem(this.getKeyName(a));
                  } catch (f) {}
                  if (null === b) {
                      var c = this.getFallbackValue();
                      c && c.hasOwnProperty(a) && (b = c[a]);
                  }
                  return b;
              },
              getJson: function(a) {
                  a = this.get(a);
                  if (!a) return {};
                  try {
                      return g.parseJSON(a) || {};
                  } catch (b) {
                      return {};
                  }
              },
              set: function(a, b, c) {
                  try {
                      q.localStorage.setItem(this.getKeyName(a), b);
                  } catch (f) {
                      c &&
                          ((c = this.getFallbackValue()),
                          (c[a] = b),
                          this.updateFallbackValue(c));
                  }
              },
              setJson: function(a, b, c) {
                  this.set(a, JSON.stringify(b), c);
              },
              remove: function(a) {
                  try {
                      q.localStorage.removeItem(this.getKeyName(a));
                  } catch (c) {}
                  var b = this.getFallbackValue();
                  b &&
                      b.hasOwnProperty(a) &&
                      (delete b[a], this.updateFallbackValue(b));
              },
              getFallbackValue: function() {
                  var a = XF.Cookie.get("ls");
                  if (a)
                      try {
                          a = g.parseJSON(a);
                      } catch (b) {
                          a = {};
                      }
                  return a || {};
              },
              updateFallbackValue: function(a) {
                  g.isEmptyObject(a)
                      ? XF.Cookie.remove("ls")
                      : XF.Cookie.set("ls", JSON.stringify(a));
              },
              supportsExpiryDate: function() {
                  return !1;
              }
          }),
          (XF.CrossTab = (function() {
              function a(e) {
                  var d = XF.LocalStorage.getKeyName("__crossTab");
                  if (e.key === d) {
                      try {
                          var h = g.parseJSON(e.newValue);
                      } catch (k) {
                          return;
                      }
                      if (
                          h &&
                          h.event &&
                          ((e = h.event), (h = h.data || null), (d = b[e]))
                      ) {
                          f = e;
                          for (e = 0; e < d.length; e++) d[e](h);
                          f = null;
                      }
                  }
              }
              var b = {},
                  c = !1,
                  f;
              return {
                  on: function(e, d) {
                      b[e] || (b[e] = []);
                      b[e].push(d);
                      c || ((c = !0), q.addEventListener("storage", a));
                  },
                  trigger: function(e, d, h) {
                      (!h && f && f == e) ||
                          XF.LocalStorage.setJson("__crossTab", {
                              event: e,
                              data: d,
                              _: new Date() + Math.random()
                          });
                  }
              };
          })()),
          (XF.Breakpoint = (function() {
              function a(d) {
                  for (var h = 0; h < e.length && d != e[h]; h++)
                      if (f == e[h]) return !0;
                  return !1;
              }
              function b(d) {
                  for (var h = !1, k = 0; k < e.length; k++)
                      if (d == e[k]) h = !0;
                      else if (f == e[k]) return h;
                  return !1;
              }
              function c() {
                  var d = q
                      .getComputedStyle(g("html")[0], ":after")
                      .getPropertyValue("content")
                      .replace(/"/g, "");
                  if (f) {
                      if (d != f) {
                          var h = f;
                          f = d;
                          g(r).trigger("breakpoint:change", [h, d]);
                      }
                  } else f = d;
                  return f;
              }
              var f = null,
                  e = ["narrow", "medium", "wide", "full"];
              c();
              g(q).onPassive("resize", c);
              return {
                  current: function() {
                      return f;
                  },
                  refresh: c,
                  isNarrowerThan: a,
                  isAtOrNarrowerThan: function(d) {
                      return f == d || a(d);
                  },
                  isWiderThan: b,
                  isAtOrWiderThan: function(d) {
                      return f == d || b(d);
                  }
              };
          })()),
          (XF.JobRunner = (function() {
              var a = !1,
                  b,
                  c = null,
                  f = 0,
                  e,
                  d = null,
                  h = function() {
                      g.ajax({
                          type: "post",
                          cache: !1,
                          dataType: "json",
                          global: !1
                      }).always(function(v) {
                          v && v.more && setTimeout(h, 100);
                      });
                  },
                  k = function(v) {
                      e = XF.ajax(
                          "post",
                          XF.canonicalizeUrl("job.php"),
                          { only_ids: v },
                          function(y) {
                              y.more && y.ids && y.ids.length
                                  ? (y.status &&
                                        g("#xfAutoBlockingJobStatus").text(
                                            y.status
                                        ),
                                    setTimeout(function() {
                                        k(y.ids);
                                    }, 0))
                                  : (m(), y.moreAuto && setTimeout(h, 100));
                          },
                          { skipDefault: !0 }
                      ).fail(m);
                  },
                  m = function() {
                      d && d.hide();
                      f--;
                      0 > f && (f = 0);
                      0 == f &&
                          (g(r).trigger("job:auto-blocking-complete"), t());
                      e && e.abort();
                      e = null;
                  },
                  l = function() {
                      c && c.hide();
                      a = !1;
                      g(r).trigger("job:manual-complete");
                      t();
                      b && b.abort();
                      b = null;
                  },
                  p = function() {
                      c || (c = n("xfManualJobStatus"));
                      return c;
                  },
                  n = function(v) {
                      v = XF.getOverlayHtml({
                          title: XF.phrase("processing..."),
                          dismissible: !1,
                          html:
                              '<div class="blockMessage"><span id="' +
                              v +
                              '">' +
                              XF.phrase("processing...") +
                              "</span></div>"
                      });
                      return new XF.Overlay(v, {
                          backdropClose: !1,
                          keyboard: !1
                      });
                  },
                  t = function() {
                      x() || g(r).trigger("job:blocking-complete");
                  },
                  x = function() {
                      return a || 0 < f;
                  };
              return {
                  isBlockingJobRunning: x,
                  runAuto: h,
                  runAutoBlocking: function(v, y) {
                      if ("number" === typeof v) v = [v];
                      else if (!Array.isArray(v)) return;
                      v.length &&
                          (f++,
                          d || (d = n("xfAutoBlockingJobStatus")),
                          d.show(),
                          y || (y = XF.phrase("processing...")),
                          g("#xfAutoBlockingJobStatus").text(y),
                          k(v));
                  },
                  runManual: function(v) {
                      var y = XF.config.job.manualUrl;
                      if (y) {
                          if (null === v) w = null;
                          else {
                              var w = w || [];
                              "number" === typeof v
                                  ? w.push(v)
                                  : Array.isArray(v) && w.push.apply(w, v);
                          }
                          if (!a) {
                              a = !0;
                              p().show();
                              var u = function(B) {
                                      b = XF.ajax(
                                          "post",
                                          y,
                                          B ? { only_id: B } : null,
                                          function(A) {
                                              A.jobRunner
                                                  ? (g(
                                                        "#xfManualJobStatus"
                                                    ).text(
                                                        A.jobRunner.status ||
                                                            XF.phrase(
                                                                "processing..."
                                                            )
                                                    ),
                                                    setTimeout(function() {
                                                        u(B);
                                                    }, 0))
                                                  : z();
                                          },
                                          { skipDefault: !0 }
                                      ).fail(l);
                                  },
                                  z = function() {
                                      Array.isArray(w) && 0 == w.length
                                          ? l()
                                          : u(w ? w.shift() : null);
                                  };
                              z();
                          }
                      }
                  },
                  stopManual: l,
                  getManualOverlay: p
              };
          })()),
          (XF.Loader = (function() {
              var a = XF.config.css,
                  b = XF.config.js,
                  c = function(f, e, d) {
                      f = f || [];
                      e = e || [];
                      var h = [],
                          k = [],
                          m;
                      for (m = 0; m < f.length; m++)
                          b.hasOwnProperty(f[m]) || h.push(f[m]);
                      for (m = 0; m < e.length; m++)
                          a.hasOwnProperty(e[m]) || k.push(e[m]);
                      var l = (h.length ? 1 : 0) + (k.length ? 1 : 0),
                          p = function() {
                              l--;
                              0 == l && d && d();
                          };
                      l
                          ? (h.length &&
                                XF.loadScripts(h, function() {
                                    g.each(h, function(n, t) {
                                        b[t] = !0;
                                    });
                                    p();
                                }),
                            k.length &&
                                ((f = XF.config.url.css)
                                    ? ((f = f.replace(
                                          "__SENTINEL__",
                                          k.join(",")
                                      )),
                                      g
                                          .ajax({
                                              type: "GET",
                                              url: f,
                                              cache: !0,
                                              global: !1,
                                              dataType: "text",
                                              success: function(n) {
                                                  var t =
                                                      XF.config.url.basePath;
                                                  t &&
                                                      (n = n.replace(
                                                          /(url\(("|')?)([^"')]+)(("|')?\))/gi,
                                                          function(
                                                              x,
                                                              v,
                                                              y,
                                                              w,
                                                              u,
                                                              z
                                                          ) {
                                                              w.match(
                                                                  /^([a-z]+:|\/)/i
                                                              ) || (w = t + w);
                                                              return v + w + u;
                                                          }
                                                      ));
                                                  g(
                                                      "<style>" + n + "</style>"
                                                  ).appendTo("head");
                                              }
                                          })
                                          .always(function() {
                                              g.each(k, function(n, t) {
                                                  a[t] = !0;
                                              });
                                              p();
                                          }))
                                    : (console.error(
                                          "No CSS URL so cannot dynamically load CSS"
                                      ),
                                      p())))
                          : d && d();
                  };
              return {
                  load: c,
                  loadCss: function(f, e) {
                      c([], f, e);
                  },
                  loadJs: function(f, e) {
                      c(f, [], e);
                  }
              };
          })()),
          (XF.ClassMapper = XF.create({
              _map: {},
              _toExtend: {},
              add: function(a, b) {
                  this._map[a] = b;
              },
              extend: function(a, b) {
                  var c = this.getObjectFromIdentifier(a);
                  c
                      ? ((c = XF.extend(c, b)), (this._map[a] = c))
                      : (this._toExtend[a] || (this._toExtend[a] = []),
                        this._toExtend[a].push(b));
              },
              getObjectFromIdentifier: function(a) {
                  var b = this._map[a],
                      c = this._toExtend[a];
                  if (!b) return null;
                  if ("string" == typeof b) {
                      b = XF.classToConstructor(b);
                      if (c) {
                          for (var f = 0; f < c.length; f++)
                              b = XF.extend(b, c[f]);
                          delete this._toExtend[a];
                      }
                      this._map[a] = b;
                  }
                  return b;
              }
          })),
          (XF.ActionIndicator = (function() {
              var a = 0,
                  b,
                  c = function() {
                      a++;
                      1 == a &&
                          (b ||
                              (b = g(
                                  '<span class="globalAction"><span class="globalAction-bar"></span><span class="globalAction-block"><i></i><i></i><i></i></span></span>'
                              ).appendTo("body")),
                          b.addClassTransitioned("is-active"));
                  },
                  f = function() {
                      a--;
                      0 < a ||
                          ((a = 0),
                          b && b.removeClassTransitioned("is-active"));
                  };
              return {
                  initialize: function() {
                      g(r).on({
                          ajaxStart: c,
                          "xf:action-start": c,
                          ajaxStop: f,
                          "xf:action-stop": f
                      });
                  },
                  show: c,
                  hide: f
              };
          })()),
          (XF.DynamicDate = (function() {
              var a,
                  b,
                  c,
                  f,
                  e,
                  d,
                  h = !1,
                  k,
                  m = function() {
                      k = setInterval(function() {
                          l(r);
                      }, 2e4);
                  },
                  l = function(n) {
                      h || this.initialize();
                      n = g(n).find("time[data-time]");
                      var t = n.length,
                          x = Math.floor(new Date().getTime() / 1e3) - a,
                          v = new Date();
                      v.setHours(0, 0, 0, 0);
                      b + x > e &&
                          (v.getDay(),
                          (e = p(v, 1)),
                          (c = p(v, 0)),
                          (f = p(v, -1)),
                          (d = p(v, -6)));
                      for (var y = 0; y < t; y++) {
                          var w = n[y];
                          var u = g(w);
                          var z = parseInt(w.getAttribute("data-time"), 10);
                          var B = b - z + x;
                          var A = w.xfDynType;
                          -2 > B
                              ? ((B = z - (b + x)),
                                60 > B
                                    ? "futureMoment" != A &&
                                      (u.text(XF.phrase("in_a_moment")),
                                      (w.xfDynType = "futureMoment"))
                                    : 120 > B
                                    ? "futureMinute" != A &&
                                      (u.text(XF.phrase("in_a_minute")),
                                      (w.xfDynType = "futureMinute"))
                                    : 3600 > B
                                    ? ((z = Math.floor(B / 60)),
                                      A !== "futureMinutes" + z &&
                                          (u.text(
                                              XF.phrase("in_x_minutes", {
                                                  "{minutes}": z
                                              })
                                          ),
                                          (w.xfDynType = "futureMinutes" + z)))
                                    : z < e
                                    ? "latertoday" != A &&
                                      (u.text(
                                          XF.phrase("later_today_at_x", {
                                              "{time}": u.attr(
                                                  "data-time-string"
                                              )
                                          })
                                      ),
                                      (w.xfDynType = "latertoday"))
                                    : z < p(v, 2)
                                    ? "tomorrow" != A &&
                                      (u.text(
                                          XF.phrase("tomorrow_at_x", {
                                              "{time}": u.attr(
                                                  "data-time-string"
                                              )
                                          })
                                      ),
                                      (w.xfDynType = "tomorrow"))
                                    : (604800 > B ||
                                          (u.attr("data-full-date")
                                              ? u.text(
                                                    XF.phrase(
                                                        "date_x_at_time_y",
                                                        {
                                                            "{date}": u.attr(
                                                                "data-date-string"
                                                            ),
                                                            "{time}": u.attr(
                                                                "data-time-string"
                                                            )
                                                        }
                                                    )
                                                )
                                              : u.text(
                                                    u.attr("data-date-string")
                                                )),
                                      (w.xfDynType = "future")))
                              : 60 >= B
                              ? "moment" !== A &&
                                (u.text(XF.phrase("a_moment_ago")),
                                (w.xfDynType = "moment"))
                              : 120 >= B
                              ? "minute" !== A &&
                                (u.text(XF.phrase("one_minute_ago")),
                                (w.xfDynType = "minute"))
                              : 3600 > B
                              ? ((z = Math.floor(B / 60)),
                                A !== "minutes" + z &&
                                    (u.text(
                                        XF.phrase("x_minutes_ago", {
                                            "{minutes}": z
                                        })
                                    ),
                                    (w.xfDynType = "minutes" + z)))
                              : z >= c
                              ? "today" !== A &&
                                (u.text(
                                    XF.phrase("today_at_x", {
                                        "{time}": u.attr("data-time-string")
                                    })
                                ),
                                (w.xfDynType = "today"))
                              : z >= f
                              ? "yesterday" !== A &&
                                (u.text(
                                    XF.phrase("yesterday_at_x", {
                                        "{time}": u.attr("data-time-string")
                                    })
                                ),
                                (w.xfDynType = "yesterday"))
                              : z >= d
                              ? "week" !== A &&
                                (u.text(
                                    XF.phrase("day_x_at_time_y", {
                                        "{day}": XF.phrase(
                                            "day" + new Date(1e3 * z).getDay()
                                        ),
                                        "{time}": u.attr("data-time-string")
                                    })
                                ),
                                (w.xfDynType = "week"))
                              : "old" !== A &&
                                (u.attr("data-full-date")
                                    ? u.text(
                                          XF.phrase("date_x_at_time_y", {
                                              "{date}": u.attr(
                                                  "data-date-string"
                                              ),
                                              "{time}": u.attr(
                                                  "data-time-string"
                                              )
                                          })
                                      )
                                    : u.text(u.attr("data-date-string")),
                                (w.xfDynType = "old"));
                      }
                  },
                  p = function(n, t) {
                      return Math.floor(
                          new Date(n.valueOf()).setFullYear(
                              n.getFullYear(),
                              n.getMonth(),
                              n.getDate() + t
                          ) / 1e3
                      );
                  };
              return {
                  initialize: function() {
                      if (!h) {
                          h = !0;
                          var n = XF.config.time;
                          a = XF.getLocalLoadTime();
                          b = n.now;
                          c = n.today;
                          f = n.yesterday;
                          e = n.tomorrow;
                          d = n.week;
                          void 0 !== r.hidden
                              ? (r.hidden || m(),
                                g(r).on("visibilitychange", function() {
                                    r.hidden ? clearInterval(k) : (m(), l(r));
                                }))
                              : m();
                      }
                  },
                  refresh: l
              };
          })()),
          (XF.KeepAlive = (function() {
              var a,
                  b,
                  c = !1,
                  f,
                  e = function() {
                      var l = 3e3 + (Math.floor(241 * Math.random()) + -120);
                      120 > l && (l = 120);
                      f && clearInterval(f);
                      f = setInterval(k, 1e3 * l);
                  },
                  d = 0,
                  h,
                  k = function() {
                      c &&
                          (!1 === q.navigator.onLine &&
                              (d++, 5 >= d && (h = setTimeout(k, 30))),
                          (d = 0),
                          clearTimeout(h),
                          g
                              .ajax({
                                  url: XF.canonicalizeUrl(a),
                                  data: {
                                      _xfResponseType: "json",
                                      _xfToken: XF.config.csrf
                                  },
                                  type: "post",
                                  cache: !1,
                                  dataType: "json",
                                  global: !1
                              })
                              .done(function(l) {
                                  "ok" == l.status &&
                                      (m(l), XF.CrossTab.trigger(b, l));
                              }));
                  },
                  m = function(l) {
                      l.csrf &&
                          ((XF.config.csrf = l.csrf),
                          g("input[name=_xfToken]").val(l.csrf));
                      if ("undefined" !== typeof l.user_id) {
                          var p = g(".js-activeUserChangeMessage");
                          l.user_id == XF.config.userId ||
                              p.length ||
                              XF.addFixedMessage(
                                  XF.phrase("active_user_changed_reload_page"),
                                  { class: "js-activeUserChangeMessage" }
                              );
                          l.user_id == XF.config.userId &&
                              p.length &&
                              p.remove();
                      }
                      e();
                  };
              return {
                  initialize: function() {
                      if (
                          !c &&
                          XF.config.url.keepAlive &&
                          XF.config.url.keepAlive.length
                      ) {
                          c = !0;
                          a = XF.config.url.keepAlive;
                          b = "keepAlive" + XF.stringHashCode(a);
                          e();
                          XF.CrossTab.on(b, m);
                          if (q.performance && q.performance.navigation) {
                              var l = q.performance.navigation.type;
                              (0 != l && 1 != l) ||
                                  XF.CrossTab.trigger(b, {
                                      csrf: XF.config.csrf,
                                      time: XF.config.time.now,
                                      user_id: XF.config.userId
                                  });
                          }
                          XF.Cookie.get("csrf") || k();
                      }
                  },
                  refresh: k
              };
          })()),
          (XF.History = (function() {
              var a = q.history,
                  b = a.state,
                  c = q.location.href,
                  f = [];
              return {
                  initialize: function() {
                      q.addEventListener("popstate", function(e) {
                          e = e.state;
                          for (var d = !1, h = 0; h < f.length; h++)
                              f[h](e, b, c) && (d = !0);
                          d ||
                              c.replace(/#.*$/, "") ===
                                  q.location.href.replace(/#.*$/, "") ||
                              q.location.reload();
                          b = e;
                          c = q.location.href;
                      });
                  },
                  handle: function(e) {
                      f.push(e);
                  },
                  push: function(e, d, h) {
                      a.pushState(e, d, h);
                      b = e;
                      c = q.location.href;
                  },
                  replace: function(e, d, h) {
                      a.replaceState(e, d, h);
                      b = e;
                      c = q.location.href;
                  },
                  go: function(e) {
                      a.go(e);
                  }
              };
          })()),
          (XF.LinkWatcher = (function() {
              var a = function(c) {
                      var f = g(this),
                          e = f.data("proxy-href"),
                          d = f.data("proxy-handler-last");
                      !e ||
                          (d && d == c.timeStamp) ||
                          (f.data("proxy-handler-last", c.timeStamp),
                          g.ajax({
                              url: XF.canonicalizeUrl(e),
                              data: {
                                  _xfResponseType: "json",
                                  referrer: q.location.href.replace(/#.*$/, "")
                              },
                              type: "post",
                              cache: !1,
                              dataType: "json",
                              global: !1
                          }));
                  },
                  b = function(c) {
                      if (
                          XF.config.enableRtnProtect &&
                          !c.isDefaultPrevented()
                      ) {
                          var f = g(this),
                              e = f.attr("href"),
                              d = f.data("blank-handler-last");
                          if (
                              e &&
                              (!e.match(/^[a-z]:/i) || e.match(/^https?:/i)) &&
                              !f.is("[data-fancybox]")
                          ) {
                              if (f.is("[rel~=noopener]")) {
                                  var h = XF.browser;
                                  if (
                                      (h.chrome && 49 <= h.version) ||
                                      (h.mozilla && 52 <= h.version) ||
                                      (h.safari && 11 <= h.version)
                                  )
                                      return;
                              }
                              if (
                                  !(
                                      f.closest("[contenteditable=true]")
                                          .length ||
                                      ((e = XF.canonicalizeUrl(e)),
                                      new RegExp(
                                          "^[a-z]+://" +
                                              location.host +
                                              "(/|$|:)",
                                          "i"
                                      ).test(e) ||
                                          (d && d == c.timeStamp) ||
                                          (f.data(
                                              "blank-handler-last",
                                              c.timeStamp
                                          ),
                                          (h = navigator.userAgent),
                                          (f = -1 !== h.indexOf("MSIE")),
                                          (d =
                                              -1 !== h.indexOf("Safari") &&
                                              -1 == h.indexOf("Chrome")),
                                          (h = -1 !== h.indexOf("Gecko/")),
                                          (c.shiftKey && h) ||
                                              (d && (c.shiftKey || c.altKey)) ||
                                              f))
                                  )
                              ) {
                                  if (d)
                                      (f = g(
                                          '<iframe style="display: none" />'
                                      ).appendTo(r.body)),
                                          (d =
                                              f[0].contentDocument ||
                                              f[0].contentWindow.document),
                                          (d.__href = e),
                                          (e = g("<script />", d)),
                                          (e[0].text =
                                              "window.opener=null;window.parent=null;window.top=null;window.frameElement=null;window.open(document.__href).opener = null;"),
                                          d.body.appendChild(e[0]),
                                          f.remove();
                                  else {
                                      e = q.open(e);
                                      try {
                                          e.opener = null;
                                      } catch (k) {}
                                  }
                                  c.preventDefault();
                              }
                          }
                      }
                  };
              return {
                  initLinkProxy: function() {
                      var c = "a[data-proxy-href]:not(.link--internal)";
                      g(r)
                          .on("click", c, a)
                          .on("focusin", c, function(f) {
                              f = g(this);
                              f.data("proxy-handler") ||
                                  f.data("proxy-handler", !0).click(a);
                          });
                  },
                  initExternalWatcher: function() {
                      g(r)
                          .on("click", "a[target=_blank]", b)
                          .on("focusin", "a[target=_blank]", function(c) {
                              c = g(this);
                              c.data("blank-handler") ||
                                  c.data("blank-handler", !0).click(b);
                          });
                  }
              };
          })()),
          (XF._IgnoredWatcher = XF.create({
              options: {
                  container: "body",
                  ignored: ".is-ignored",
                  link: ".js-showIgnored"
              },
              $container: null,
              authors: [],
              shown: !1,
              __construct: function(a) {
                  this.options = g.extend(!0, {}, this.options, a || {});
                  this.$container = a = g(this.options.container);
                  this.updateState();
                  a.on("click", this.options.link, XF.proxy(this, "show"));
              },
              refresh: function(a) {
                  this.$container.find(a).length &&
                      (this.shown ? this.show() : this.updateState());
              },
              updateState: function() {
                  if (!this.shown) {
                      var a = this.getIgnored(),
                          b = [];
                      if (a.length)
                          if (
                              (a.each(function() {
                                  var f = g(this).data("author");
                                  f && -1 === g.inArray(f, b) && b.push(f);
                              }),
                              b.length)
                          ) {
                              var c = { names: b.join(", ") };
                              this.getLinks().each(function() {
                                  var f = g(this),
                                      e = f.attr("title");
                                  e &&
                                      f
                                          .attr("title", Mustache.render(e, c))
                                          .removeClass("is-hidden");
                              });
                          } else
                              this.getLinks().each(function() {
                                  g(this)
                                      .removeAttr("title")
                                      .removeClass("is-hidden");
                              });
                  }
              },
              getIgnored: function() {
                  return this.$container.find(this.options.ignored);
              },
              getLinks: function() {
                  return this.$container.find(this.options.link);
              },
              show: function() {
                  this.shown = !0;
                  this.getIgnored().removeClass("is-ignored");
                  this.getLinks().addClass("is-hidden");
              },
              initializeHash: function() {
                  if (q.location.hash) {
                      var a = q.location.hash.replace(/[^\w_#-]/g, "");
                      if ("#" !== a) {
                          a = g(a);
                          var b = this.options.ignored;
                          (b = a.is(b) ? a : a.closest(b)) &&
                              b.length &&
                              (b.removeClass("is-ignored"),
                              a.get(0).scrollIntoView(!0));
                      }
                  }
              }
          })),
          (XF.IgnoreWatcher = new XF._IgnoredWatcher()),
          (XF.BrowserWarning = (function() {
              return {
                  display: function() {
                      var a = !1;
                      XF.browser.msie
                          ? (a = !0)
                          : XF.browser.edge &&
                            18 > parseInt(XF.browser.version) &&
                            (a = !0);
                      var b = g(".js-browserWarning");
                      a ? b.show() : b.remove();
                  },
                  hideJsWarning: function() {
                      g(".js-jsWarning").remove();
                  }
              };
          })()),
          (XF.MultiBar = XF.create({
              options: {
                  role: null,
                  focusShow: !1,
                  className: "",
                  fastReplace: !1
              },
              $container: null,
              $multiBar: null,
              shown: !1,
              __construct: function(a, b) {
                  this.options = g.extend(!0, {}, this.options, b || {});
                  this.$multiBar = a instanceof g ? a : g(g.parseHTML(a));
                  this.$multiBar
                      .attr("role", this.options.role || "dialog")
                      .attr("aria-hidden", "true")
                      .on("multibar:hide", XF.proxy(this, "hide"))
                      .on("multibar:show", XF.proxy(this, "show"));
                  this.$container = g('<div class="multiBar-container" />');
                  this.$container
                      .html(this.$multiBar)
                      .data("multibar", this)
                      .addClass(this.options.className);
                  this.$container.xfUniqueId();
                  this.$container.appendTo("body");
                  XF.activate(this.$container);
                  XF.MultiBar.cache[this.$container.attr("id")] = this;
              },
              show: function() {
                  if (!this.shown) {
                      this.shown = !0;
                      this.$multiBar.attr("aria-hidden", "false");
                      g(".p-pageWrapper").addClass("has-multiBar");
                      this.options.fastReplace &&
                          this.$multiBar.css("transition-duration", "0s");
                      var a = this;
                      this.$container.appendTo("body");
                      this.$multiBar.addClassTransitioned(
                          "is-active",
                          function() {
                              if (a.options.focusShow) {
                                  var b = a.$multiBar.find(".js-multiBarClose");
                                  XF.autoFocusWithin(
                                      a.$multiBar.find(".multiBar-content"),
                                      null,
                                      b
                                  );
                              }
                              a.$container.trigger("multibar:shown");
                              XF.layoutChange();
                          }
                      );
                      this.options.fastReplace &&
                          this.$multiBar.css("transition-duration", "");
                      this.$container.trigger("multibar:showing");
                      XF.layoutChange();
                  }
              },
              hide: function() {
                  if (this.shown) {
                      this.shown = !1;
                      this.$multiBar.attr("aria-hidden", "true");
                      var a = this;
                      this.$multiBar.removeClassTransitioned(
                          "is-active",
                          function() {
                              g(".p-pageWrapper").removeClass("has-multiBar");
                              a.$container.trigger("multibar:hidden");
                              XF.layoutChange();
                          }
                      );
                      this.$container.trigger("multibar:hiding");
                      XF.layoutChange();
                  }
              },
              toggle: function(a) {
                  (null === a ? !this.shown : a) ? this.show() : this.hide();
              },
              destroy: function() {
                  var a = this.$container.attr("id"),
                      b = XF.MultiBar.cache;
                  this.$container.remove();
                  b.hasOwnProperty(a) && delete b[a];
              },
              on: function() {
                  this.$container.on.apply(this.$container, arguments);
              },
              getContainer: function() {
                  return this.$container;
              },
              getMultiBar: function() {
                  return this.$multiBar;
              }
          })),
          (XF.MultiBar.cache = {}),
          (XF.showMultiBar = function(a, b) {
              a = new XF.MultiBar(a, b);
              a.show();
              return a;
          }),
          (XF.loadMultiBar = function(a, b, c, f) {
              g.isFunction(c) && (c = { init: c });
              c = g.extend(
                  {
                      cache: !1,
                      beforeShow: null,
                      afterShow: null,
                      onRedirect: null,
                      init: null,
                      show: !0
                  },
                  c || {}
              );
              var e = function(h) {
                  if (c.beforeShow) {
                      var k = g.Event();
                      c.beforeShow(h, k);
                      if (k.isDefaultPrevented()) return;
                  }
                  c.show && h.show();
                  c.afterShow &&
                      ((k = g.Event()),
                      c.afterShow(h, k),
                      k.isDefaultPrevented());
              };
              if (c.cache && XF.loadMultiBar.cache[a])
                  e(XF.loadMultiBar.cache[a]);
              else {
                  var d = function(h) {
                      if (h.redirect)
                          if (c.onRedirect) c.onRedirect(h, d);
                          else
                              XF.ajax("get", h.redirect, function(k) {
                                  d(k);
                              });
                      h.html &&
                          XF.setupHtmlInsert(h.html, function(k, m, l) {
                              var p = new XF.MultiBar(
                                  XF.getMultiBarHtml({
                                      html: k,
                                      title: m.title || m.h1
                                  }),
                                  f
                              );
                              c.init && c.init(p);
                              if (!c.cache)
                                  p.on("multibar:hidden", function() {
                                      p.destroy();
                                  });
                              l();
                              c.cache && (XF.loadMultiBar.cache[a] = p);
                              e(p);
                          });
                  };
                  return XF.ajax("post", a, b, function(h) {
                      d(h);
                  });
              }
          }),
          (XF.loadMultiBar.cache = {}),
          (XF.Overlay = XF.create({
              options: {
                  backdropClose: !0,
                  escapeClose: !0,
                  focusShow: !0,
                  className: ""
              },
              $container: null,
              $overlay: null,
              shown: !1,
              __construct: function(a, b) {
                  this.options = g.extend(!0, {}, this.options, b || {});
                  this.$overlay = a instanceof g ? a : g(g.parseHTML(a));
                  this.$overlay
                      .attr("role", this.options.role || "dialog")
                      .attr("aria-hidden", "true");
                  this.$container = g('<div class="overlay-container" />').html(
                      this.$overlay
                  );
                  this.$container.data("overlay", this).xfUniqueId();
                  var c = this;
                  if (this.options.escapeClose)
                      this.$container.on("keydown.overlay", function(f) {
                          27 === f.which && c.hide();
                      });
                  this.options.backdropClose &&
                      (this.$container.on("mousedown", function(f) {
                          c.$container.data("block-close", !1);
                          g(f.target).is(c.$container) ||
                              c.$container.data("block-close", !0);
                      }),
                      this.$container.on("click", function(f) {
                          g(f.target).is(c.$container) &&
                              (c.$container.data("block-close") || c.hide());
                          c.$container.data("block-close", !1);
                      }));
                  this.options.className &&
                      this.$container.addClass(this.options.className);
                  this.$container.on(
                      "click",
                      ".js-overlayClose",
                      XF.proxy(this, "hide")
                  );
                  this.$container.appendTo("body");
                  XF.activate(this.$container);
                  XF.Overlay.cache[this.$container.attr("id")] = this;
                  this.$overlay.on("overlay:hide", XF.proxy(this, "hide"));
                  this.$overlay.on("overlay:show", XF.proxy(this, "show"));
              },
              show: function() {
                  if (!this.shown) {
                      this.shown = !0;
                      this.$overlay.attr("aria-hidden", "false");
                      var a = this;
                      this.$container
                          .appendTo("body")
                          .addClassTransitioned("is-active", function() {
                              if (a.options.focusShow) {
                                  var b = a.$overlay.find(".js-overlayClose");
                                  XF.autoFocusWithin(
                                      a.$overlay.find(".overlay-content"),
                                      null,
                                      b
                                  );
                              }
                              a.$container.trigger("overlay:shown");
                              XF.layoutChange();
                          });
                      this.$container.trigger("overlay:showing");
                      XF.ModalOverlay.open();
                      XF.layoutChange();
                  }
              },
              hide: function() {
                  if (this.shown) {
                      this.shown = !1;
                      this.$overlay.attr("aria-hidden", "true");
                      var a = this;
                      this.$container.removeClassTransitioned(
                          "is-active",
                          function() {
                              a.$container.trigger("overlay:hidden");
                              XF.ModalOverlay.close();
                              XF.layoutChange();
                          }
                      );
                      this.$container.trigger("overlay:hiding");
                      XF.layoutChange();
                  }
              },
              recalculate: function() {
                  this.shown && XF.Modal.updateScrollbarPadding();
              },
              toggle: function() {
                  this.shown ? this.hide() : this.show();
              },
              destroy: function() {
                  var a = this.$container.attr("id"),
                      b = XF.Overlay.cache;
                  this.$container.remove();
                  b.hasOwnProperty(a) && delete b[a];
              },
              on: function() {
                  this.$container.on.apply(this.$container, arguments);
              },
              getContainer: function() {
                  return this.$container;
              },
              getOverlay: function() {
                  return this.$overlay;
              }
          })),
          (XF.Overlay.cache = {}),
          (XF.ModalOverlay = (function() {
              var a = 0,
                  b = g("body").first();
              return {
                  getOpenCount: function() {
                      return a;
                  },
                  open: function() {
                      XF.Modal.open();
                      a++;
                      1 == a && b.addClass("is-modalOverlayOpen");
                  },
                  close: function() {
                      XF.Modal.close();
                      0 < a &&
                          (a--, 0 == a && b.removeClass("is-modalOverlayOpen"));
                  }
              };
          })()),
          (XF.Modal = (function() {
              var a = 0,
                  b = g("body").first(),
                  c = g("html"),
                  f = function() {
                      var e = "right",
                          d = b.hasClass("is-modalOpen")
                              ? XF.measureScrollBar() + "px"
                              : "";
                      XF.isRtl() &&
                          (XF.browser.chrome ||
                              XF.browser.mozilla ||
                              (e = "left"));
                      c.css("margin-" + e, d);
                  };
              return {
                  getOpenCount: function() {
                      return a;
                  },
                  open: function() {
                      a++;
                      1 == a && (b.addClass("is-modalOpen"), f());
                  },
                  close: function() {
                      0 < a &&
                          (a--, 0 == a && (b.removeClass("is-modalOpen"), f()));
                  },
                  updateScrollbarPadding: f
              };
          })()),
          (XF.showOverlay = function(a, b) {
              a = new XF.Overlay(a, b);
              a.show();
              return a;
          }),
          (XF.loadOverlay = function(a, b, c) {
              g.isFunction(b) && (b = { init: b });
              b = g.extend(
                  {
                      cache: !1,
                      beforeShow: null,
                      afterShow: null,
                      onRedirect: null,
                      init: null,
                      show: !0
                  },
                  b || {}
              );
              var f = function(d) {
                  if (b.beforeShow) {
                      var h = g.Event();
                      b.beforeShow(d, h);
                      if (h.isDefaultPrevented()) return;
                  }
                  b.show && d.show();
                  b.afterShow &&
                      ((h = g.Event()),
                      b.afterShow(d, h),
                      h.isDefaultPrevented());
              };
              if (b.cache && XF.loadOverlay.cache[a])
                  f(XF.loadOverlay.cache[a]);
              else {
                  var e = function(d) {
                      if (d.redirect)
                          if (b.onRedirect) b.onRedirect(d, e);
                          else
                              XF.ajax("get", d.redirect, function(h) {
                                  e(h);
                              });
                      d.html &&
                          XF.setupHtmlInsert(d.html, function(h, k, m) {
                              var l = new XF.Overlay(
                                  XF.getOverlayHtml({
                                      html: h,
                                      title: k.title || k.h1,
                                      url: XF.canonicalizeUrl(a)
                                  }),
                                  c
                              );
                              b.init && b.init(l);
                              if (!b.cache)
                                  l.on("overlay:hidden", function() {
                                      l.destroy();
                                  });
                              m();
                              b.cache && (XF.loadOverlay.cache[a] = l);
                              f(l);
                          });
                  };
                  return XF.ajax("get", a, function(d) {
                      e(d);
                  });
              }
          }),
          (XF.loadOverlay.cache = {}),
          (XF.NavDeviceWatcher = (function() {
              function a(c) {
                  c != b &&
                      (g("html").toggleClass("has-pointer-nav", !c), (b = c));
              }
              var b = !0;
              return {
                  initialize: function() {
                      g(r).onPassive({
                          mousedown: function() {
                              a(!1);
                          },
                          keydown: function(c) {
                              switch (c.key) {
                                  case "Tab":
                                  case "Enter":
                                      a(!0);
                              }
                          }
                      });
                  },
                  toggle: a,
                  isKeyboardNav: function() {
                      return b;
                  }
              };
          })()),
          (XF.ScrollButtons = (function() {
              function a(u) {
                  if (!l) {
                      u = q.pageYOffset || r.documentElement.scrollTop;
                      var z = t;
                      t = u;
                      if (u > z) "down" != x && ((x = "down"), (v = z));
                      else if (u < z) "up" != x && ((x = "up"), (v = z));
                      else return;
                      if (p) {
                          if ("up" !== x || 100 > t) {
                              y && (y.cancel(), (y = null));
                              return;
                          }
                          if (30 > v - u) return;
                      }
                      y ||
                          (y = XF.requestAnimationTimeout(function() {
                              y = null;
                              b();
                              f();
                          }, 200));
                  }
              }
              function b() {
                  n || (w.addClassTransitioned("is-active"), (n = !0));
              }
              function c() {
                  n && (w.removeClassTransitioned("is-active"), (n = !1));
              }
              function f() {
                  e();
                  m = setTimeout(function() {
                      c();
                  }, 3e3);
              }
              function e() {
                  clearTimeout(m);
              }
              function d() {
                  e();
                  b();
              }
              function h() {
                  e();
              }
              function k(u) {
                  u = g(u.target);
                  u.is(".button--scroll") &&
                      0 !== u.closest(".button--scroll").length &&
                      ((l = !0),
                      setTimeout(function() {
                          l = !1;
                      }, 500),
                      c());
              }
              var m = null,
                  l = !1,
                  p = !1,
                  n = !1,
                  t = q.pageYOffset || r.documentElement.scrollTop,
                  x = null,
                  v = null,
                  y,
                  w = null;
              return {
                  initialize: function() {
                      if (w && w.length) return !1;
                      w = g(".js-scrollButtons");
                      if (!w.length) return !1;
                      "up" === w.data("trigger-type") && (p = !0);
                      w.on({
                          "mouseenter focus": d,
                          "mouseleave blur": h,
                          click: k
                      });
                      g(q).onPassive("scroll", a);
                      return !0;
                  },
                  show: b,
                  hide: c,
                  startHideTimer: f,
                  clearHideTimer: e
              };
          })()),
          (XF.KeyboardShortcuts = (function() {
              function a(d) {
                  d = g(d);
                  1 < d.length
                      ? d.each(function() {
                            a(this);
                        })
                      : (d.is("[data-xf-key]") && b(d[0]),
                        d.find("[data-xf-key]").each(function() {
                            b(this);
                        }));
              }
              function b(d) {
                  var h = String(g(d).data("xf-key")),
                      k = h.substr(h.lastIndexOf("+") + 1),
                      m =
                          "#" === k[0]
                              ? k.substr(1)
                              : k.toUpperCase().charCodeAt(0),
                      l = h.toUpperCase().split("+");
                  var p = -1 !== l.indexOf("CTRL");
                  var n = -1 !== l.indexOf("ALT");
                  l = -1 !== l.indexOf("META");
                  (p = 0 + p ? 1 : 0 + n ? 2 : 0 + l ? 4 : 0)
                      ? XF.Keyboard.isStandardKey(m)
                          ? ((e[m] = e[m] || {}), (e[m][p] = d))
                          : console.warn(
                                "It is not possible to specify a keyboard shortcut using this key combination (%s)",
                                h
                            )
                      : (e[k] = d);
              }
              function c(d) {
                  switch (d.key) {
                      case "Escape":
                          XF.MenuWatcher.closeAll();
                          XF.hideTooltips();
                          return;
                      case "Shift":
                      case "Control":
                      case "Alt":
                      case "Meta":
                          return;
                  }
                  if (
                      XF.Keyboard.isShortcutAllowed(r.activeElement) &&
                      (!e.hasOwnProperty(d.key) ||
                          0 !=
                              (0 + d.ctrlKey
                                  ? 1
                                  : 0 + d.altKey
                                  ? 2
                                  : 0 + d.metaKey
                                  ? 4
                                  : 0) ||
                          !f(e[d.key])) &&
                      e.hasOwnProperty(d.which)
                  ) {
                      var h =
                          0 + d.ctrlKey
                              ? 1
                              : 0 + d.altKey
                              ? 2
                              : 0 + d.metaKey
                              ? 4
                              : 0;
                      e[d.which].hasOwnProperty(h) && f(e[d.which][h]);
                  }
              }
              function f(d) {
                  d = g(d).filter(":visible");
                  return d.length
                      ? (XF.NavDeviceWatcher.toggle(!0),
                        XF.isElementVisible(d) || d.get(0).scrollIntoView(!0),
                        d.is(XF.getKeyboardInputs())
                            ? d.autofocus()
                            : d.is("a[href]")
                            ? d.get(0).click()
                            : d.click(),
                        !0)
                      : !1;
              }
              var e = {};
              return {
                  initialize: function() {
                      g(r.body).onPassive("keyup", c);
                  },
                  initializeElements: a
              };
          })()),
          (XF.Keyboard = {
              isShortcutAllowed: function(a) {
                  switch (a.tagName) {
                      case "TEXTAREA":
                      case "SELECT":
                          return !1;
                      case "INPUT":
                          switch (a.type) {
                              case "checkbox":
                              case "radio":
                              case "submit":
                              case "reset":
                                  return !0;
                              default:
                                  return !1;
                          }
                      case "BODY":
                          return !0;
                      default:
                          return XF.browser.msie &&
                              g(a).parents(".fr-element").length
                              ? !1
                              : "true" === a.contentEditable
                              ? !1
                              : !0;
                  }
              },
              isStandardKey: function(a) {
                  return 48 <= a && 90 >= a;
              }
          }),
          (XF.FormInputValidation = (function() {
              function a(d) {
                  d = g(d);
                  1 < d.length
                      ? d.each(function() {
                            a(this);
                        })
                      : d.is("form") && c(d);
              }
              function b() {
                  e.length &&
                      e.each(function() {
                          c(g(this));
                      });
              }
              function c(d) {
                  d.find(":input").on("invalid", { form: d }, f);
              }
              function f(d) {
                  var h = g(this);
                  d = d.data.form;
                  var k = d.find(":invalid").first();
                  h[0] !== k[0] ||
                      XF.isElementVisible(h) ||
                      ((d = d.closest(".overlay-container.is-active")),
                      d.length
                          ? d.scrollTop(
                                h.offset().top -
                                    d.offset().top +
                                    d.scrollTop() -
                                    100
                            )
                          : (h[0].scrollIntoView(), q.scrollBy(0, -100)));
              }
              var e = {};
              return {
                  initialize: function() {
                      e = g("form").not("[novalidate]");
                      b();
                  },
                  initializeElements: a
              };
          })()),
          (XF.NoticeWatcher = (function() {
              return {
                  initialize: function() {
                      g(r).on(
                          "xf:notice-change xf:layout",
                          XF.proxy(this, "checkNotices")
                      );
                      this.checkNotices();
                  },
                  checkNotices: function() {
                      var a = this.getBottomFixerNoticeHeight();
                      g(r)
                          .find("footer.p-footer")
                          .css("margin-bottom", a);
                  },
                  getBottomFixerNoticeHeight: function() {
                      var a = 0;
                      g(r)
                          .find(
                              ".js-bottomFixTarget .notices--bottom_fixer .js-notice"
                          )
                          .each(function() {
                              var b = g(this);
                              b.is(":visible") && (a += b.height());
                          });
                      return a;
                  }
              };
          })()),
          (XF.PWA = (function() {
              function a() {
                  var l = XF.config.serviceWorkerPath;
                  // null === l && (l = "service_worker.js");
                  return l && l.length ? XF.canonicalizeUrl(l) : null;
              }
              function b() {
                  return (
                      navigator.standalone ||
                      q.matchMedia(
                          "(display-mode: standalone), (display-mode: minimal-ui)"
                      ).matches
                  );
              }
              function c() {
                  k &&
                      (XF.ActionIndicator.show(),
                      setTimeout(function() {
                          XF.ActionIndicator.hide();
                      }, 3e4));
              }
              function f() {
                  k = !1;
                  setTimeout(function() {
                      k = !0;
                  }, 2e3);
              }
              function e(l, p) {
                  if (navigator.serviceWorker.controller)
                      if ("string" !== typeof l || "" === l)
                          console.error("Invalid message type:", l);
                      else {
                          if ("undefined" === typeof p) p = {};
                          else if ("object" !== typeof p || null === p) {
                              console.error("Invalid message payload:", p);
                              return;
                          }
                          navigator.serviceWorker.controller.postMessage({
                              type: l,
                              payload: p
                          });
                      }
                  else console.error("There is no active service worker");
              }
              var d = null,
                  h,
                  k = !0,
                  m = {};
              return {
                  initialize: function() {
                      XF.PWA.isSupported() &&
                          (XF.config.skipServiceWorkerRegistration
                              ? (h = new Promise(function(l, p) {
                                    p(
                                        Error(
                                            "Service worker registration has been skipped"
                                        )
                                    );
                                }))
                              : ((h = navigator.serviceWorker.register(a())),
                                h.then(function(l) {
                                    var p = XF.config.cacheKey;
                                    l = l.active ? !1 : !0;
                                    XF.LocalStorage.get("cacheKey") !== p &&
                                        (l || e("updateCache"),
                                        XF.LocalStorage.set("cacheKey", p, !0));
                                }),
                                h.catch(function(l) {
                                    console.error(
                                        "Service worker registration failed:",
                                        l
                                    );
                                }),
                                navigator.serviceWorker
                                    .getRegistrations()
                                    .then(function(l) {
                                        var p = XF.canonicalizeUrl("js/xf/"),
                                            n;
                                        for (n in l)
                                            l[n].scope == p &&
                                                l[n].unregister();
                                    }),
                                navigator.serviceWorker.addEventListener(
                                    "message",
                                    function(l) {
                                        var p = l.data;
                                        if ("object" !== typeof p || null === p)
                                            console.error(
                                                "Invalid message:",
                                                p
                                            );
                                        else if (
                                            ((l = p.type),
                                            (p = p.payload),
                                            "string" !== typeof l || "" === l)
                                        )
                                            console.error(
                                                "Invalid message type:",
                                                l
                                            );
                                        else if (
                                            "object" !== typeof p ||
                                            null === p
                                        )
                                            console.error(
                                                "Invalid message payload:",
                                                p
                                            );
                                        else {
                                            var n = m[l];
                                            "undefined" === typeof n
                                                ? console.error(
                                                      "No handler available for message type:",
                                                      l
                                                  )
                                                : n(p);
                                        }
                                    }
                                ),
                                b() &&
                                    (g(q).on("beforeunload", c),
                                    g(r).on(
                                        "click",
                                        ".js-skipPwaNavIndicator",
                                        f
                                    ))));
                  },
                  isSupported: function() {
                      null === d &&
                          (d = !!("serviceWorker" in navigator && a()));
                      return d;
                  },
                  isRunning: b,
                  inhibitNavigationIndicator: f,
                  getRegistration: function() {
                      return h;
                  },
                  sendMessage: e
              };
          })()),
          (XF.Push = (function() {
              function a(d, h) {
                  XF.PWA.getRegistration()
                      .then(function() {
                          b();
                          d && d();
                      })
                      .catch(function() {
                          h && h();
                      });
              }
              function b() {
                  XF.PWA.getRegistration()
                      .then(function(d) {
                          return d.pushManager.getSubscription();
                      })
                      .then(function(d) {
                          XF.Push.isSubscribed = null !== d;
                          XF.Push.isSubscribed
                              ? (g(r).trigger("push:init-subscribed"),
                                XF.config.userId && f(d)
                                    ? XF.Push.updateUserSubscription(
                                          d,
                                          "update"
                                      )
                                    : (d.unsubscribe(),
                                      XF.Push.updateUserSubscription(
                                          d,
                                          "unsubscribe"
                                      )))
                              : g(r).trigger("push:init-unsubscribed");
                      });
              }
              function c(d) {
                  var h = "=".repeat((4 - (d.length % 4)) % 4);
                  d = (d + h).replace(/\-/g, "+").replace(/_/g, "/");
                  d = q.atob(d);
                  h = new Uint8Array(d.length);
                  for (var k = 0; k < d.length; ++k) h[k] = d.charCodeAt(k);
                  return h;
              }
              function f(d) {
                  d instanceof PushSubscription &&
                      (d = d.options.applicationServerKey);
                  if ("string" === typeof d)
                      return XF.config.pushAppServerKey === d;
                  d.buffer && d.BYTES_PER_ELEMENT && (d = d.buffer);
                  if (!(d instanceof ArrayBuffer))
                      throw Error(
                          "input must be an array buffer or convertable to it"
                      );
                  var h = c(XF.config.pushAppServerKey).buffer,
                      k = h.byteLength;
                  if (k !== d.byteLength) return !1;
                  h = new DataView(h);
                  d = new DataView(d);
                  for (var m = 0; m < k; m++)
                      if (h.getUint8(m) !== d.getUint8(m)) return !1;
                  return !0;
              }
              var e = null;
              return {
                  isSubscribed: null,
                  initialize: function() {
                      XF.Push.isSupported() &&
                          (XF.config.skipPushNotificationSubscription || a());
                  },
                  registerWorker: a,
                  getPushHistoryUserIds: function() {
                      return (
                          XF.LocalStorage.getJson("push_history_user_ids") || {}
                      );
                  },
                  setPushHistoryUserIds: function(d) {
                      XF.LocalStorage.setJson("push_history_user_ids", d || {});
                  },
                  hasUserPreviouslySubscribed: function(d) {
                      return XF.Push.getPushHistoryUserIds().hasOwnProperty(
                          d || XF.config.userId
                      );
                  },
                  addUserToPushHistory: function(d) {
                      var h = XF.Push.getPushHistoryUserIds();
                      h[d || XF.config.userId] = !0;
                      XF.Push.setPushHistoryUserIds(h);
                  },
                  removeUserFromPushHistory: function(d) {
                      var h = XF.Push.getPushHistoryUserIds();
                      delete h[d || XF.config.userId];
                      XF.Push.setPushHistoryUserIds(h);
                  },
                  handleUnsubscribeAction: function(d, h) {
                      XF.Push.isSubscribed &&
                          XF.PWA.getRegistration()
                              .then(function(k) {
                                  return k.pushManager.getSubscription();
                              })
                              .then(function(k) {
                                  if (k) return (e = k), k.unsubscribe();
                              })
                              .catch(function(k) {
                                  console.error("Error unsubscribing", k);
                                  h && h();
                              })
                              .then(function() {
                                  e &&
                                      XF.Push.updateUserSubscription(
                                          e,
                                          "unsubscribe"
                                      );
                                  XF.Push.isSubscribed = !1;
                                  d && d();
                              });
                  },
                  handleSubscribeAction: function(d, h, k) {
                      XF.Push.isSubscribed ||
                          Notification.requestPermission().then(function(m) {
                              if ("granted" !== m)
                                  console.error("Permission was not granted");
                              else {
                                  var l = XF.Push.base64ToUint8(
                                      XF.config.pushAppServerKey
                                  );
                                  XF.PWA.getRegistration().then(function(p) {
                                      p.pushManager
                                          .subscribe({
                                              userVisibleOnly: !0,
                                              applicationServerKey: l
                                          })
                                          .then(function(n) {
                                              XF.Push.updateUserSubscription(
                                                  n,
                                                  "insert"
                                              );
                                              XF.Push.isSubscribed = !0;
                                              n = {
                                                  body: XF.phrase(
                                                      "push_enable_notification_body"
                                                  ),
                                                  dir: XF.isRtl()
                                                      ? "rtl"
                                                      : "ltr"
                                              };
                                              XF.config.publicMetadataLogoUrl &&
                                                  (n.icon =
                                                      XF.config.publicMetadataLogoUrl);
                                              XF.config.publicPushBadgeUrl &&
                                                  (n.badge =
                                                      XF.config.publicPushBadgeUrl);
                                              d ||
                                                  p.showNotification(
                                                      XF.phrase(
                                                          "push_enable_notification_title"
                                                      ),
                                                      n
                                                  );
                                              XF.config.userId &&
                                                  XF.Push.addUserToPushHistory();
                                              h && h();
                                          })
                                          .catch(function(n) {
                                              console.error(
                                                  "Failed to subscribe the user: ",
                                                  n
                                              );
                                              k && k();
                                          });
                                  });
                              }
                          });
                  },
                  handleToggleAction: function(d, h, k, m) {
                      XF.Push.isSubscribed
                          ? XF.Push.handleUnsubscribeAction(d, h)
                          : XF.Push.handleSubscribeAction(!1, k, m);
                  },
                  updateUserSubscription: function(d, h) {
                      if (
                          "update" !== h ||
                          !XF.Cookie.get("push_subscription_updated")
                      ) {
                          var k = d.getKey("p256dh"),
                              m = d.getKey("auth"),
                              l = (PushManager.supportedContentEncodings || [
                                  "aesgcm"
                              ])[0];
                          g.ajax({
                              url: XF.canonicalizeUrl(
                                  "index.php?misc/update-push-subscription"
                              ),
                              type: "post",
                              data: {
                                  endpoint: d.endpoint,
                                  key: k
                                      ? btoa(
                                            String.fromCharCode.apply(
                                                null,
                                                new Uint8Array(k)
                                            )
                                        )
                                      : null,
                                  token: m
                                      ? btoa(
                                            String.fromCharCode.apply(
                                                null,
                                                new Uint8Array(m)
                                            )
                                        )
                                      : null,
                                  encoding: l,
                                  unsubscribed: "unsubscribe" === h ? 1 : 0,
                                  _xfResponseType: "json",
                                  _xfToken: XF.config.csrf
                              },
                              cache: !1,
                              dataType: "json",
                              global: !1
                          }).always(function() {
                              "update" === h &&
                                  XF.Cookie.set(
                                      "push_subscription_updated",
                                      "1"
                                  );
                          });
                      }
                  },
                  isSupported: function() {
                      return (
                          XF.PWA.isSupported() &&
                          XF.config.enablePush &&
                          XF.config.pushAppServerKey &&
                          "PushManager" in q &&
                          "Notification" in q
                      );
                  },
                  base64ToUint8: c,
                  isExpectedServerKey: f
              };
          })()),
          (XF.ExpandableContent = (function() {
              function a(b) {
                  g(b)
                      .find(".js-expandWatch:not(.is-expanded)")
                      .each(function() {
                          var c = g(this),
                              f = c.find(".js-expandContent")[0];
                          if (f) {
                              var e,
                                  d = 0,
                                  h = function() {
                                      var n = f.scrollHeight,
                                          t = f.offsetHeight;
                                      0 == n || 0 == t
                                          ? 2e3 < d ||
                                            (e && (clearTimeout(e), (d += 200)),
                                            (e = setTimeout(h, d)))
                                          : n > t + 1
                                          ? c.addClass("is-expandable")
                                          : c.removeClass("is-expandable");
                                  };
                              h();
                              if (
                                  !c.data("expand-check-triggered") &&
                                  (c.data("expand-check-triggered", !0),
                                  c.find("img").one("load", h),
                                  q.MutationObserver)
                              ) {
                                  var k,
                                      m = !0,
                                      l = function() {
                                          m = !1;
                                          h();
                                          setTimeout(function() {
                                              m = !0;
                                          }, 100);
                                      };
                                  var p = new MutationObserver(function(n) {
                                      c.hasClass("is-expanded")
                                          ? p.disconnect()
                                          : m &&
                                            (k && clearTimeout(k),
                                            (k = setTimeout(l, 200)));
                                  });
                                  p.observe(this, {
                                      attributes: !0,
                                      childList: !0,
                                      subtree: !0
                                  });
                              }
                          }
                      });
              }
              return {
                  watch: function() {
                      g(r).on("click", ".js-expandLink", function(b) {
                          g(b.target)
                              .closest(".js-expandWatch")
                              .addClassTransitioned(
                                  "is-expanded",
                                  XF.layoutChange
                              );
                      });
                      g(q).onPassive("resize", function() {
                          a(r);
                      });
                      g(r).on("embed:loaded", function() {
                          a(r);
                      });
                  },
                  checkSizing: a
              };
          })()),
          (XF.UnfurlLoader = (function() {
              function a() {
                  function e(h) {
                      var k = null === d ? h : h.substring(d);
                      var m = k.indexOf("\n");
                      -1 !== m &&
                          ((k = k.substring(0, m)),
                          (d = null === d ? k.length : d + k.length),
                          d++,
                          XF.UnfurlLoader.handleResponse(JSON.parse(k)),
                          d < h.length && e(h));
                  }
                  if (b.length && !c) {
                      var d = null;
                      c = !0;
                      XF.ajax(
                          "post",
                          XF.canonicalizeUrl("unfurl.php"),
                          { result_ids: b },
                          function(h) {
                              e(h);
                          },
                          {
                              skipDefault: !0,
                              dataType: "text",
                              xhrFields: {
                                  onprogress: function(h) {
                                      h = h.currentTarget.response;
                                      h.length && e(h);
                                  }
                              }
                          }
                      ).always(function() {
                          b = [];
                          c = !1;
                          d = null;
                          f && ((b = f), (f = []), (c = !1), setTimeout(a, 0));
                      });
                  }
              }
              var b = [],
                  c = !1,
                  f = [];
              return {
                  activateContainer: function(e) {
                      e = g(e).find(".js-unfurl");
                      e.length &&
                          (e.each(function() {
                              var d = g(this);
                              if (
                                  !1 === d.data("pending") ||
                                  d.data("pending-seen")
                              )
                                  return !0;
                              d.data("pending-seen", !0);
                              d = d.data("result-id");
                              c ? f.push(d) : b.push(d);
                          }),
                          a());
                  },
                  unfurl: a,
                  handleResponse: function(e) {
                      var d = g(
                          '.js-unfurl[data-result-id="' + e.result_id + '"]'
                      );
                      d.length &&
                          (e.success
                              ? XF.setupHtmlInsert(e.html, function(h, k, m) {
                                    d.replaceWith(h);
                                })
                              : ((e = d.find(".js-unfurl-title a")),
                                e
                                    .text(d.data("url"))
                                    .addClass("bbCodePlainUnfurl")
                                    .removeClass("fauxBlockLink-blockLink"),
                                d.replaceWith(e)));
                  }
              };
          })()),
          (XF.Event = (function() {
              var a = new XF.ClassMapper(),
                  b = {},
                  c = function(e, d, h) {
                      e = g(e);
                      var k = e.data("xf-" + d).split(" ") || [],
                          m = e.data("xf-" + d + "-handlers") || {},
                          l;
                      for (l = 0; l < k.length; l++) {
                          var p = k[l];
                          if (p.length) {
                              if (!m[p]) {
                                  var n = a.getObjectFromIdentifier(p);
                                  if (!n) {
                                      console.error(
                                          "Could not find %s handler for %s",
                                          d,
                                          p
                                      );
                                      continue;
                                  }
                                  var t = e.data("xf-" + p) || {};
                                  m[p] = new n(e, t);
                              }
                              if (h && !1 === m[p]._onEvent(h)) break;
                          }
                      }
                      e.data("xf-" + d + "-handlers", m);
                      return m;
                  },
                  f = XF.create({
                      initialized: !1,
                      eventType: "click",
                      eventNameSpace: null,
                      $target: null,
                      options: {},
                      __construct: function(e, d) {
                          this.$target = e;
                          this.options = XF.applyDataOptions(
                              this.options,
                              e.data(),
                              d
                          );
                          this.eventType = this.eventType.toLowerCase();
                          if (!this.eventNameSpace)
                              throw Error(
                                  "Please provide an eventNameSpace for your extended " +
                                      this.eventType +
                                      " handler class"
                              );
                          this._init();
                      },
                      _init: function() {
                          var e = new g.Event(
                                  "xf-" +
                                      this.eventType +
                                      ":before-init." +
                                      this.eventNameSpace
                              ),
                              d = !1;
                          this.$target.trigger(e, [this]);
                          e.isDefaultPrevented() ||
                              ((d = this.init()),
                              this.$target.trigger(
                                  "xf-" +
                                      this.eventType +
                                      ":after-init." +
                                      this.eventNameSpace,
                                  [this, d]
                              ));
                          this.initialized = !0;
                          return d;
                      },
                      _onEvent: function(e) {
                          var d = new g.Event(
                              "xf-" +
                                  this.eventType +
                                  ":before-" +
                                  this.eventType +
                                  "." +
                                  this.eventNameSpace
                          );
                          this.$target.trigger(d, [this]);
                          if (!d.isDefaultPrevented()) {
                              if ("function" == typeof this[this.eventType])
                                  d = this[this.eventType](e);
                              else if ("function" == typeof this.onEvent)
                                  d = this.onEvent(e);
                              else
                                  return (
                                      console.error(
                                          "You must provide a %1$s(e) method for your %1$s event handler",
                                          this.eventType,
                                          this.eventNameSpace
                                      ),
                                      e.preventDefault(),
                                      !1
                                  );
                              this.$target.trigger(
                                  "xf-" +
                                      this.eventType +
                                      ":after-" +
                                      this.eventType +
                                      "." +
                                      this.eventNameSpace,
                                  [this, d, e]
                              );
                          }
                          return null;
                      },
                      init: function() {
                          console.error(
                              "This is the abstract init method for XF.%s, which must be overridden.",
                              this.eventType,
                              this.eventNameSpace
                          );
                      }
                  });
              return {
                  watch: function(e) {
                      function d(h, k) {
                          k || (k = h.currentTarget);
                          if (!k || !k.getAttribute) return !1;
                          k = g(k);
                          return (k.is("a") &&
                              !k.data("click-allow-modifier") &&
                              (h.ctrlKey ||
                                  h.shiftKey ||
                                  h.altKey ||
                                  h.metaKey ||
                                  1 < h.which)) ||
                              k.closest("[contenteditable=true]").length
                              ? !1
                              : !0;
                      }
                      e = String(e).toLowerCase();
                      b.hasOwnProperty(e) ||
                          ((b[e] = !0),
                          g(r).on(e, "[data-xf-" + e + "]", function(h) {
                              var k = h.currentTarget;
                              if (d(h, k)) {
                                  var m = g(k).data("xf-pointer-type");
                                  h.xfPointerType = h.pointerType || m || "";
                                  c(k, e, h);
                              }
                          }),
                          g(r).on(
                              "pointerdown",
                              "[data-xf-" + e + "]",
                              function(h) {
                                  var k = h.currentTarget;
                                  d(h, k) &&
                                      g(k).data(
                                          "xf-pointer-type",
                                          h.pointerType
                                      );
                              }
                          ));
                  },
                  initElement: c,
                  getElementHandler: function(e, d, h) {
                      var k = e.data("xf-" + h + "-handlers");
                      k || (k = XF.Event.initElement(e[0], h));
                      return k && k[d] ? k[d] : null;
                  },
                  register: function(e, d, h) {
                      XF.Event.watch(e);
                      a.add(d, h);
                  },
                  extend: function(e, d) {
                      a.extend(e, d);
                  },
                  newHandler: function(e) {
                      return XF.extend(f, e);
                  },
                  AbstractHandler: f
              };
          })()),
          (XF.Click = (function() {
              return {
                  watch: function() {
                      return XF.Event.watch("click");
                  },
                  initElement: function(a, b) {
                      return XF.Event.initElement(a, "click", b);
                  },
                  getElementHandler: function(a, b) {
                      return XF.Event.getElementHandler(a, b, "click");
                  },
                  register: function(a, b) {
                      XF.Event.watch("click");
                      return XF.Event.register("click", a, b);
                  },
                  extend: function(a, b) {
                      return XF.Event.extend(a, b);
                  },
                  newHandler: function(a) {
                      return XF.Event.newHandler(a);
                  }
              };
          })()),
          (XF.Element = (function() {
              var a = new XF.ClassMapper(),
                  b = function(d, h, k) {
                      var m = d.data("xf-element-handlers") || {};
                      if (m[h]) return m[h];
                      var l = a.getObjectFromIdentifier(h);
                      if (!l) return null;
                      k = new l(d, k || {});
                      m[h] = k;
                      d.data("xf-element-handlers", m);
                      k.init();
                      return k;
                  },
                  c = function(d) {
                      d instanceof g && (d = d[0]);
                      if (d && d.getAttribute) {
                          var h = d.getAttribute("data-xf-init");
                          if (h) {
                              h = h.split(" ");
                              var k = h.length;
                              d = g(d);
                              for (var m, l = 0; l < k; l++)
                                  (m = h[l]) && b(d, m, d.data("xf-" + m));
                          }
                      }
                  },
                  f = function(d) {
                      d = g(d);
                      1 < d.length
                          ? d.each(function() {
                                f(this);
                            })
                          : (d.is("[data-xf-init]") && c(d[0]),
                            d.find("[data-xf-init]").each(function() {
                                c(this);
                            }));
                  },
                  e = XF.create({
                      $target: null,
                      options: {},
                      __construct: function(d, h) {
                          this.$target = d;
                          this.options = XF.applyDataOptions(
                              this.options,
                              d.data(),
                              h
                          );
                      },
                      init: function() {
                          console.error(
                              "This is the abstract init method for XF.Element, which should be overridden."
                          );
                      },
                      getOption: function(d) {
                          return this.options[d];
                      }
                  });
              return {
                  register: function(d, h) {
                      a.add(d, h);
                  },
                  extend: function(d, h) {
                      a.extend(d, h);
                  },
                  initialize: f,
                  initializeElement: c,
                  applyHandler: b,
                  getHandler: function(d, h) {
                      var k = d.data("xf-element-handlers");
                      void 0 === k &&
                          (c(d), (k = d.data("xf-element-handlers")));
                      return k && k[h] ? k[h] : null;
                  },
                  newHandler: function(d) {
                      return XF.extend(e, d);
                  },
                  AbstractHandler: e
              };
          })()),
          (XF.AutoCompleteResults = XF.create({
              selectedResult: 0,
              $results: !1,
              $scrollWatchers: null,
              resultsVisible: !1,
              resizeBound: !1,
              headerHtml: null,
              options: {},
              __construct: function(a) {
                  this.options = g.extend(
                      {
                          onInsert: null,
                          clickAttacher: null,
                          beforeInsert: null,
                          insertMode: "text",
                          displayTemplate: "{{{icon}}}{{{text}}}",
                          wrapperClasses: ""
                      },
                      a
                  );
              },
              isVisible: function() {
                  return this.resultsVisible;
              },
              hideResults: function() {
                  this.resultsVisible = !1;
                  this.$results && this.$results.hide();
                  this.stopScrollWatching();
              },
              stopScrollWatching: function() {
                  this.$scrollWatchers &&
                      (this.$scrollWatchers.off("scroll.autocomplete"),
                      (this.$scrollWatchers = null));
              },
              addHeader: function(a) {
                  this.headerHtml = a;
              },
              showResults: function(a, b, c, f) {
                  var e;
                  if (b) {
                      this.resultsVisible = !1;
                      this.$results
                          ? this.$results.hide().empty()
                          : ((this.$results = g("<ul />")
                                .css({ position: "absolute", display: "none" })
                                .addClass(
                                    "autoCompleteList " +
                                        this.options.wrapperClasses
                                )
                                .attr("role", "listbox")
                                .appendTo(r.body)),
                            XF.setRelativeZIndex(this.$results, c, 1));
                      a = new RegExp(
                          "(" + XF.regexQuote(XF.htmlspecialchars(a)) + ")",
                          "i"
                      );
                      for (e in b)
                          if (b.hasOwnProperty(e)) {
                              var d = b[e];
                              var h = g("<li />")
                                  .css("cursor", "pointer")
                                  .attr("unselectable", "on")
                                  .attr("role", "option")
                                  .mouseenter(
                                      XF.proxy(this, "resultMouseEnter")
                                  );
                              this.options.clickAttacher
                                  ? this.options.clickAttacher(
                                        h,
                                        XF.proxy(this, "resultClick")
                                    )
                                  : h.click(XF.proxy(this, "resultClick"));
                              var k = { icon: "", text: "", desc: "" };
                              if ("string" == typeof d) {
                                  var m = d;
                                  k.text = XF.htmlspecialchars(d);
                              } else if (
                                  ((m = d.text),
                                  (k.text = XF.htmlspecialchars(d.text)),
                                  "undefined" !== typeof d.desc &&
                                      (k.desc = XF.htmlspecialchars(d.desc)),
                                  "undefined" !== typeof d.icon
                                      ? (k.icon = g(
                                            '<img class="autoCompleteList-icon" />'
                                        ).attr(
                                            "src",
                                            XF.htmlspecialchars(d.icon)
                                        ))
                                      : "undefined" !== typeof d.iconHtml &&
                                        (k.icon = g(
                                            '<span class="autoCompleteList-icon" />'
                                        ).html(d.iconHtml)),
                                  k.icon && (k.icon = k.icon[0].outerHTML),
                                  d.extraParams)
                              ) {
                                  var l = d.extraParams,
                                      p;
                                  for (p in l)
                                      if (l.hasOwnProperty(p)) {
                                          var n = p.match(/Html$/),
                                              t = n
                                                  ? p.replace(/Html$/, "")
                                                  : p;
                                          n = n
                                              ? l[p]
                                              : XF.htmlspecialchars(l[p]);
                                          k[t] = n;
                                      }
                              }
                              h.data("insert-text", m);
                              h.data("insert-html", d.html || "");
                              k.text = k.text.replace(a, "<strong>$1</strong>");
                              k.desc = k.desc.replace(a, "<strong>$1</strong>");
                              h.html(
                                  Mustache.render(
                                      this.options.displayTemplate,
                                      k
                                  )
                              ).appendTo(this.$results);
                          }
                      if (this.$results.children().length) {
                          this.selectResult(0, !0);
                          this.headerHtml &&
                              ((h = g("<li />")
                                  .addClass("menu-header menu-header--small")
                                  .attr("unselectable", "on")
                                  .html(this.headerHtml)),
                              h.prependTo(this.$results));
                          if (!this.resizeBound)
                              g(q).onPassive(
                                  "resize",
                                  XF.proxy(this, "hideResults")
                              );
                          this.$results.css({
                              top: "",
                              left: "",
                              right: "",
                              bottom: ""
                          });
                          var x = this.$results,
                              v = function(y) {
                                  g.isFunction(y) && (y = y(x, c));
                                  if (!y) {
                                      var w = c.offset();
                                      y = {
                                          top: w.top + c.outerHeight(),
                                          left: w.left
                                      };
                                      XF.isRtl() &&
                                          ((y.right =
                                              g("html").width() -
                                              w.left -
                                              c.outerWidth()),
                                          (y.left = "auto"));
                                  }
                                  return y;
                              };
                          this.stopScrollWatching();
                          (b = c.parents().filter(function() {
                              switch (g(this).css("overflow-x")) {
                                  case "scroll":
                                  case "auto":
                                      return !0;
                                  default:
                                      return !1;
                              }
                          })) &&
                              b.length &&
                              (b.on("scroll.autocomplete", function() {
                                  x.css(v(f));
                              }),
                              (this.$scrollWatchers = b));
                          this.$results.css(v(f)).show();
                          this.resultsVisible = !0;
                      }
                  } else this.hideResults();
              },
              resultClick: function(a) {
                  a.stopPropagation();
                  this.insertResult(
                      this.getResultText(a.currentTarget),
                      a.currentTarget,
                      a
                  );
                  this.hideResults();
              },
              resultMouseEnter: function(a) {
                  this.selectResult(g(a.currentTarget).index(), !0);
              },
              selectResult: function(a, b) {
                  if (this.$results) {
                      var c = (this.selectedResult = b
                          ? a
                          : this.selectedResult + a);
                      a = this.$results.children();
                      a.each(function(f) {
                          f == c
                              ? g(this).addClass("is-selected")
                              : g(this).removeClass("is-selected");
                      });
                      if (0 > c || c >= a.length) this.selectedResult = -1;
                  }
              },
              insertSelectedResult: function(a) {
                  var b,
                      c = !1;
                  if (!this.resultsVisible) return !1;
                  0 <= this.selectedResult &&
                      (b = this.$results.children().get(this.selectedResult)) &&
                      ((c = this.getResultText(b)),
                      this.options.beforeInsert &&
                          (c = this.options.beforeInsert(c, b)),
                      this.insertResult(c, b, a),
                      (c = !0));
                  this.hideResults();
                  return c;
              },
              insertResult: function(a, b, c) {
                  if (this.options.onInsert) this.options.onInsert(a, b, c);
              },
              getResultText: function(a) {
                  switch (this.options.insertMode) {
                      case "text":
                          var b = g(a).data("insert-text");
                          break;
                      case "html":
                          b = g(a).data("insert-html");
                  }
                  return b;
              }
          })),
          (XF.AutoCompleter = XF.create({
              options: {
                  url: null,
                  method: "GET",
                  idleWait: 200,
                  minLength: 2,
                  at: "@",
                  keepAt: !0,
                  insertMode: "text",
                  displayTemplate: "{{{icon}}}{{{text}}}",
                  beforeInsert: null
              },
              $input: null,
              ed: null,
              results: null,
              visible: !1,
              idleTimer: null,
              pendingQuery: "",
              __construct: function(a, b, c) {
                  this.options = g.extend(!0, {}, this.options, b);
                  this.$input = a;
                  this.ed = c;
                  this.options.url
                      ? (("string" != typeof this.options.at ||
                            1 < this.options.at.length) &&
                            console.error(
                                "The 'at' option should be a single character string."
                            ),
                        this.init())
                      : console.error(
                            "No URL option passed in to XF.AutoCompleter."
                        );
              },
              init: function() {
                  var a = this,
                      b = {
                          onInsert: function(c) {
                              a.insertResult(c);
                          },
                          beforeInsert: this.options.beforeInsert,
                          insertMode: this.options.insertMode,
                          displayTemplate: this.options.displayTemplate
                      };
                  this.ed &&
                      (b.clickAttacher = function(c, f) {
                          a.ed.events.bindClick(c, c, f);
                      });
                  this.results = new XF.AutoCompleteResults(b);
                  this.ed
                      ? (this.ed.events.on(
                            "keydown",
                            XF.proxy(this, "keydown"),
                            !0
                        ),
                        this.ed.events.on("keyup", XF.proxy(this, "keyup"), !0),
                        this.ed.events.on("click blur", XF.proxy(this, "blur")),
                        g(this.ed.$wp).onPassive(
                            "scroll",
                            XF.proxy(this, "blur")
                        ))
                      : (this.$input.on("keydown", XF.proxy(this, "keydown")),
                        this.$input.on("keyup", XF.proxy(this, "keyup")),
                        this.$input.on("click blur", XF.proxy(this, "blur")),
                        g(r).onPassive("scroll", XF.proxy(this, "blur")));
              },
              keydown: function(a) {
                  if (this.visible)
                      switch (a.which) {
                          case 40:
                              return (
                                  this.results.selectResult(1),
                                  a.preventDefault(),
                                  !1
                              );
                          case 38:
                              return (
                                  this.results.selectResult(-1),
                                  a.preventDefault(),
                                  !1
                              );
                          case 27:
                              return this.hide(), a.preventDefault(), !1;
                          case 13:
                              if (this.visible)
                                  return (
                                      this.results.insertSelectedResult(a),
                                      a.preventDefault(),
                                      !1
                                  );
                      }
              },
              keyup: function(a) {
                  if (this.visible)
                      switch (a.which) {
                          case 40:
                          case 38:
                          case 13:
                              return;
                      }
                  this.hide();
                  this.idleTimer && clearTimeout(this.idleTimer);
                  this.idleTimer = setTimeout(
                      XF.proxy(this, "lookForMatch"),
                      this.options.idleWait
                  );
              },
              blur: function() {
                  this.visible && setTimeout(XF.proxy(this, "hide"), 250);
              },
              lookForMatch: function() {
                  var a = this.getCurrentMatchInfo();
                  a ? this.foundMatch(a.query) : this.hide();
              },
              getCurrentMatchInfo: function() {
                  if (this.ed) {
                      var a = this.ed.selection.ranges(0);
                      if (!a || !a.collapsed) return null;
                      var b = a.endContainer;
                      if (!b || 3 !== b.nodeType) return null;
                      var c = b;
                      b = b.nodeValue.substring(0, a.endOffset);
                  } else {
                      b = this.$input;
                      b.autofocus();
                      a = b.getSelection();
                      if (!a || 1 >= a.end) return !1;
                      b = b.val().substring(0, a.end);
                  }
                  var f = b.lastIndexOf(this.options.at);
                  if (-1 === f) return null;
                  if (0 === f || b.substr(f - 1, 1).match(/(\s|[\](,]|--)/)) {
                      var e = b.substr(f + 1);
                      if (!e.match(/\s/) || 15 >= e.length)
                          return {
                              text: b,
                              textNode: c,
                              start: f,
                              query: e.replace(
                                  new RegExp(String.fromCharCode(160), "g"),
                                  " "
                              ),
                              range: a
                          };
                  }
                  return null;
              },
              foundMatch: function(a) {
                  this.pendingQuery !== a &&
                      ((this.pendingQuery = a),
                      a.length >= this.options.minLength &&
                          "[" !== a.substr(0, 1) &&
                          this.getPendingQueryOptions());
              },
              getPendingQueryOptions: function() {
                  XF.ajax(
                      this.options.method,
                      this.options.url,
                      { q: this.pendingQuery },
                      XF.proxy(this, "handlePendingQueryOptions"),
                      { global: !1, error: !1 }
                  );
              },
              handlePendingQueryOptions: function(a) {
                  var b = this.getCurrentMatchInfo();
                  a.q &&
                      b &&
                      a.q === b.query &&
                      (a.results && a.results.length
                          ? this.show(a.q, a.results)
                          : this.hide());
              },
              insertResult: function(a) {
                  this.hide();
                  var b = this.getCurrentMatchInfo();
                  if (b) {
                      var c = b.start + 1,
                          f = b.range;
                      if (this.ed) {
                          this.ed.selection.save();
                          XF.EditorHelpers.focus(this.ed);
                          f = b.textNode;
                          var e = f.nodeValue,
                              d = f.splitText(this.options.keepAt ? c : c - 1);
                          d.textContent = e.substr(c + b.query.length);
                          a =
                              "html" === this.options.insertMode
                                  ? g.parseHTML(a + "\u00a0")
                                  : r.createTextNode(a + "\u00a0");
                          g(d).before(a);
                          f.parentNode.normalize();
                          this.ed.selection.restore();
                      } else
                          (d = this.$input),
                              d.autofocus(),
                              -1 !== c &&
                                  (d.setSelection(b.start, f.end),
                                  d.replaceSelectedText(
                                      (this.options.keepAt
                                          ? this.options.at
                                          : "") +
                                          a +
                                          " ",
                                      "collapseToEnd"
                                  ));
                  }
              },
              show: function(a, b) {
                  var c = this.getCurrentMatchInfo(),
                      f = this.$input,
                      e = f.dimensions(),
                      d = this;
                  if (c)
                      if (((this.visible = !0), this.ed)) {
                          var h = c.range;
                          this.results.showResults(a, b, f, function(k) {
                              if (!h || !h.getBoundingClientRect)
                                  return (
                                      (k = h.startContainer),
                                      {
                                          top:
                                              (3 === k.nodeType
                                                  ? g(k.parentNode)
                                                  : g(k)
                                              ).dimensions().bottom + 3,
                                          left: e.left + 5
                                      }
                                  );
                              var m = h.cloneRange();
                              m.setStart(c.textNode, c.start);
                              m.setEnd(c.textNode, c.start + 1);
                              m = m.getBoundingClientRect();
                              return d.getResultPositionForSelection(
                                  m.left,
                                  m.bottom,
                                  h.getBoundingClientRect().left,
                                  k,
                                  e
                              );
                          });
                      } else
                          this.results.showResults(a, b, f, function(k) {
                              for (
                                  var m = g("<div />"),
                                      l = q.getComputedStyle(f[0]),
                                      p,
                                      n = "",
                                      t = 0;
                                  t < l.length;
                                  t++
                              )
                                  (p = l[t]),
                                      (n +=
                                          p +
                                          ": " +
                                          l.getPropertyValue(p) +
                                          "; ");
                              m[0].style.cssText = n;
                              m.css({
                                  position: "absolute",
                                  height: "",
                                  width: f.outerWidth(),
                                  opacity: 0,
                                  top: 0,
                                  left: "-9999px"
                              });
                              m[0].textContent = f.val();
                              m.appendTo(r.body);
                              n = r.createRange();
                              n.setStart(m[0].firstChild, c.start);
                              n.setEnd(m[0].firstChild, c.start + 1);
                              t = n.getBoundingClientRect();
                              var x = m.dimensions();
                              l = e.left + (t.left - x.left);
                              p = e.top + (t.bottom - x.top);
                              n.setStart(
                                  m[0].firstChild,
                                  c.start + 1 + c.query.length
                              );
                              n.setEnd(
                                  m[0].firstChild,
                                  c.start + 1 + c.query.length
                              );
                              t = n.getBoundingClientRect();
                              n = e.left + (t.left - x.left);
                              m.remove();
                              return d.getResultPositionForSelection(
                                  l,
                                  p,
                                  n,
                                  k,
                                  e
                              );
                          });
              },
              getResultPositionForSelection: function(a, b, c, f, e) {
                  f = f.width();
                  b = b + g(q).scrollTop() + 3;
                  a + f > e.right && (a = c - f);
                  a < e.left && (a = e.left);
                  return { top: b, left: a };
              },
              hide: function() {
                  this.visible &&
                      ((this.visible = !1), this.results.hideResults());
              }
          })),
          (XF.pageDisplayTime = Date.now()),
          g(XF.onPageLoad),
          g(q).on("pageshow", function() {
              if (!XF.pageDisplayTime || Date.now() > XF.pageDisplayTime)
                  XF.pageDisplayTime = Date.now();
          }));
})(window.jQuery, window, document);

("use strict");
!(function(e, l, m, u) {
    XF.AttributionClick = XF.Event.newHandler({
        eventType: "click",
        eventNameSpace: "XFAttributionClick",
        options: { contentSelector: null },
        init: function() {},
        click: function(a) {
            var b = this.options.contentSelector,
                c = e(b);
            c.length &&
                (a.preventDefault(),
                XF.smoothScroll(c, b, XF.config.speed.normal));
        }
    });
    XF.LikeClick = XF.Event.newHandler({
        eventType: "click",
        eventNameSpace: "XFLikeClick",
        options: { likeList: null, container: null },
        processing: !1,
        container: null,
        init: function() {
            this.options.container &&
                (this.$container = XF.findRelativeIf(
                    this.options.container,
                    this.$target
                ));
        },
        click: function(a) {
            a.preventDefault();
            if (!this.processing) {
                this.processing = !0;
                a = this.$target.attr("href");
                var b = this;
                XF.ajax("POST", a, {}, XF.proxy(this, "handleAjax"), {
                    skipDefaultSuccess: !0
                }).always(function() {
                    setTimeout(function() {
                        b.processing = !1;
                    }, 250);
                });
            }
        },
        handleAjax: function(a) {
            var b = this.$target;
            b.trigger(
                "xf-" +
                    this.eventType +
                    ":before-handleAjax." +
                    this.eventNameSpace,
                [this, a]
            );
            a.addClass && b.addClass(a.addClass);
            a.removeClass && b.removeClass(a.removeClass);
            if (a.text) {
                var c = b.find(".label");
                c.length || (c = b);
                c.text(a.text);
            }
            a.hasOwnProperty("isLiked") &&
                (b.toggleClass("is-liked", a.isLiked),
                this.$container &&
                    this.$container.toggleClass("is-liked", a.isLiked));
            var d = this.options.likeList
                ? XF.findRelativeIf(this.options.likeList, b)
                : e([]);
            "undefined" !== typeof a.html &&
                d.length &&
                (a.html.content
                    ? XF.setupHtmlInsert(a.html, function(f, g) {
                          d.html(f).addClassTransitioned("is-active");
                      })
                    : d.removeClassTransitioned("is-active", function() {
                          d.empty();
                      }));
            b.trigger(
                "xf-" +
                    this.eventType +
                    ":after-handleAjax." +
                    this.eventNameSpace,
                [this, a]
            );
        }
    });
    XF.PreviewClick = XF.Event.newHandler({
        eventType: "click",
        eventNameSpace: "XFPreviewClick",
        options: {},
        init: function() {
            console.warn(
                "XF.PreviewClick is disabled. Use the built in editor preview tab"
            );
        },
        click: function(a) {
            a.preventDefault();
        }
    });
    XF.handleSwitchResponse = function(a, b, c) {
        if (b.switchKey) {
            var d = a.data("sk-" + b.switchKey),
                f = !1;
            if (d) {
                for (
                    var g, h;
                    (g = d.match(
                        /(\s*,)?\s*(addClass|removeClass|titleAttr):([^,]+)(,|$)/
                    ));

                )
                    if (
                        ((d = d.substring(g[0].length)),
                        (h = e.trim(g[3])),
                        h.length)
                    )
                        switch (g[2]) {
                            case "addClass":
                                a.addClass(h);
                                break;
                            case "removeClass":
                                a.removeClass(h);
                                break;
                            case "titleAttr":
                                f = "sync" == h;
                        }
                d = e.trim(d);
                d.length && !b.text && (b.text = d);
            }
        }
        b.addClass && a.addClass(b.addClass);
        b.removeClass && a.removeClass(b.removeClass);
        b.text &&
            ((d = a.find(a.data("label"))),
            d.length || (d = a),
            d.text(b.text),
            f &&
                a
                    .attr("title", b.text)
                    .removeAttr("data-original-title")
                    .trigger("tooltip:refresh"));
        if (b.message) {
            var k = c && b.redirect;
            XF.flashMessage(b.message, k ? 1e3 : 3e3, function() {
                k && XF.redirect(b.redirect);
            });
        }
    };
    XF.ScrollToClick = XF.Event.newHandler({
        eventType: "click",
        eventNameSpace: "XFScrollToClick",
        options: { target: null, silent: !1, hash: null, speed: 300 },
        $scroll: null,
        init: function() {
            var a,
                b = this.options.hash,
                c = this.$target.attr("href");
            this.options.target &&
                (a = XF.findRelativeIf(this.options.target, this.$target));
            if (!a || !a.length)
                if (c && c.length && "#" == c.charAt(0)) a = e(c);
                else if (this.options.silent) return;
            if (a && a.length)
                if (((this.$scroll = a), !0 === b || "true" === b))
                    (a = a.attr("id")),
                        (this.options.hash = a && a.length ? a : null);
                else {
                    if (!1 === b || "false" === b) this.options.hash = null;
                }
            else console.error("No scroll target could be found");
        },
        click: function(a) {
            this.$scroll &&
                (a.preventDefault(),
                XF.smoothScroll(
                    this.$scroll,
                    this.options.hash,
                    this.options.speed
                ));
        }
    });
    XF.SwitchClick = XF.Event.newHandler({
        eventType: "click",
        eventNameSpace: "XFSwitchClick",
        options: { redirect: !1, overlayOnHtml: !0, label: ".js-label" },
        processing: !1,
        overlay: null,
        init: function() {
            this.$target.data("label", this.options.label);
        },
        click: function(a) {
            a.preventDefault();
            if (!this.processing) {
                this.processing = !0;
                a = this.$target.attr("href");
                var b = this;
                XF.ajax("POST", a, {}, XF.proxy(this, "handleAjax"), {
                    skipDefaultSuccess: !0
                }).always(function() {
                    setTimeout(function() {
                        b.processing = !1;
                    }, 250);
                });
            }
        },
        handleAjax: function(a) {
            var b = this.$target,
                c = e.Event("switchclick:complete"),
                d = this;
            b.trigger(c, a, this);
            c.isDefaultPrevented() ||
                (a.html && a.html.content && this.options.overlayOnHtml
                    ? XF.setupHtmlInsert(a.html, function(f, g) {
                          d.overlay && d.overlay.hide();
                          f = XF.getOverlayHtml({
                              html: f,
                              title: g.h1 || g.title
                          });
                          f.find("form").on(
                              "ajax-submit:response",
                              XF.proxy(d, "handleOverlayResponse")
                          );
                          d.overlay = XF.showOverlay(f);
                      })
                    : (this.applyResponseActions(a),
                      this.overlay &&
                          (this.overlay.hide(), (this.overlay = null))));
        },
        handleOverlayResponse: function(a, b) {
            "ok" == b.status && (a.preventDefault(), this.handleAjax(b));
        },
        applyResponseActions: function(a) {
            XF.handleSwitchResponse(this.$target, a, this.options.redirect);
        }
    });
    XF.SwitchOverlayClick = XF.Event.newHandler({
        eventType: "click",
        eventNameSpace: "XFSwitchOverlayClick",
        options: { redirect: !1 },
        overlay: null,
        init: function() {},
        click: function(a) {
            a.preventDefault();
            this.overlay
                ? this.overlay.show()
                : ((a = this.$target.attr("href")),
                  XF.loadOverlay(a, {
                      cache: !1,
                      init: XF.proxy(this, "setupOverlay")
                  }));
        },
        setupOverlay: function(a) {
            this.overlay = a;
            a.getOverlay()
                .find("form")
                .on(
                    "ajax-submit:response",
                    XF.proxy(this, "handleOverlaySubmit")
                );
            var b = this;
            a.on("overlay:hidden", function() {
                b.overlay = null;
            });
            return a;
        },
        handleOverlaySubmit: function(a, b) {
            "ok" == b.status &&
                (a.preventDefault(),
                (a = this.overlay) && a.hide(),
                XF.handleSwitchResponse(
                    this.$target,
                    b,
                    this.options.redirect
                ));
        }
    });
    XF.AlertsList = XF.Element.newHandler({
        options: {},
        processing: !1,
        init: function() {
            var a = XF.findRelativeIf(
                "< .menu-content | .js-alertsMarkRead",
                this.$target
            );
            if (a.length) a.on("click", XF.proxy(this, "markAllReadClick"));
            this.$target
                .find(".js-alertToggle")
                .on("click", this.$target, XF.proxy(this, "markReadClick"));
        },
        _makeAjaxRequest: function(a, b, c) {
            if (!this.processing) {
                this.processing = !0;
                var d = this;
                XF.ajax("POST", a, c || {}, b, {
                    skipDefaultSuccess: !0
                }).always(function() {
                    setTimeout(function() {
                        d.processing = !1;
                    }, 250);
                });
            }
        },
        markAllReadClick: function(a) {
            a.preventDefault();
            this._makeAjaxRequest(
                e(a.target).attr("href"),
                XF.proxy(this, "handleMarkAllReadAjax")
            );
        },
        markReadClick: function(a) {
            a.preventDefault();
            a = e(a.currentTarget);
            var b = a.closest(".js-alert"),
                c = b.hasClass("is-unread");
            b = b.data("alert-id");
            this._makeAjaxRequest(
                a.attr("href"),
                XF.proxy(this, "handleMarkReadAjax", b),
                { unread: c ? 0 : 1 }
            );
        },
        handleMarkAllReadAjax: function(a) {
            a.message && XF.flashMessage(a.message, 3e3);
            var b = this;
            this.$target.find(".js-alert").each(function() {
                b.toggleReadStatus(e(this), !1);
            });
        },
        handleMarkReadAjax: function(a, b) {
            b.message && XF.flashMessage(b.message, 3e3);
            a = this.$target.find('.js-alert[data-alert-id="' + a + '"]');
            this.toggleReadStatus(a, !0);
        },
        toggleReadStatus: function(a, b) {
            var c = a.hasClass("is-unread"),
                d = a.find(".js-alertToggle"),
                f = XF.Element.getHandler(d, "tooltip"),
                g = d.data("content");
            c
                ? (a.removeClass("is-unread"), (g = d.data("unread")))
                : b && (a.addClass("is-unread"), (g = d.data("read")));
            f.tooltip.setContent(g);
        }
    });
    XF.Draft = XF.Element.newHandler({
        options: {
            draftAutosave: 60,
            draftName: "message",
            draftUrl: null,
            saveButton: ".js-saveDraft",
            deleteButton: ".js-deleteDraft",
            actionIndicator: ".draftStatus"
        },
        lastActionContent: null,
        autoSaveRunning: !1,
        init: function() {
            if (this.options.draftUrl) {
                var a = this;
                this.$target.on(this.options.saveButton, "click", function(c) {
                    c.preventDefault();
                    a.triggerSave();
                });
                this.$target.on(this.options.deleteButton, "click", function(
                    c
                ) {
                    c.preventDefault();
                    a.triggerDelete();
                });
                var b = XF.proxy(this, "syncState");
                this.syncState();
                setTimeout(b, 500);
                this.$target.on("draft:sync", b);
                setInterval(
                    XF.proxy(this, "triggerSave"),
                    1e3 * this.options.draftAutosave
                );
            } else console.error("No draft URL specified.");
        },
        triggerSave: function() {
            if (!XF.isRedirecting) {
                var a = e.Event("draft:beforesave");
                this.$target.trigger(a);
                a.isDefaultPrevented() ||
                    this._executeDraftAction(this.getSaveData());
            }
        },
        triggerDelete: function() {
            this.lastActionContent = this.getSaveData();
            this._sendDraftAction("delete=1");
        },
        _executeDraftAction: function(a) {
            if (a != this.lastActionContent) {
                if (this.autoSaveRunning) return !1;
                this.lastActionContent = a;
                this._sendDraftAction(a);
            }
        },
        _sendDraftAction: function(a) {
            this.autoSaveRunning = !0;
            var b = this;
            return XF.ajax(
                "post",
                this.options.draftUrl,
                a,
                XF.proxy(this, "completeAction"),
                { skipDefault: !0, skipError: !0, global: !1 }
            ).always(function() {
                b.autoSaveRunning = !1;
            });
        },
        completeAction: function(a) {
            var b = e.Event("draft:complete");
            this.$target.trigger(b, a);
            if (!b.isDefaultPrevented() && !1 !== a.draft.saved) {
                var c = this.$target.find(this.options.actionIndicator);
                c.removeClass("is-active")
                    .text(a.complete)
                    .addClass("is-active");
                setTimeout(function() {
                    c.removeClass("is-active");
                }, 2e3);
            }
        },
        syncState: function() {
            this.lastActionContent = this.getSaveData();
        },
        getSaveData: function() {
            var a = this.$target;
            a.trigger("draft:beforesync");
            return a
                .serialize()
                .replace(/(^|&)_xfToken=[^&]+(?=&|$)/g, "")
                .replace(/^&+/, "");
        }
    });
    XF.DraftTrigger = XF.Element.newHandler({
        options: { delay: 2500 },
        draftHandler: null,
        timer: null,
        init: function() {
            if (XF.isElementWithinDraftForm(this.$target)) {
                var a = this.$target.closest("form");
                if ((this.draftHandler = XF.Element.getHandler(a, "draft")))
                    this.$target.on("keyup", XF.proxy(this, "keyup"));
            }
        },
        keyup: function(a) {
            clearTimeout(this.timer);
            var b = this;
            this.timer = setTimeout(function() {
                b.draftHandler.triggerSave();
            }, this.options.delay);
        }
    });
    XF.FocusTrigger = XF.Element.newHandler({
        options: { display: null, activeClass: "is-active" },
        init: function() {
            if (this.$target.attr("autofocus")) this.trigger();
            else this.$target.one("focusin", XF.proxy(this, "trigger"));
        },
        trigger: function() {
            var a = this.options.display;
            a &&
                ((a = XF.findRelativeIf(a, this.$target)),
                a.length && a.addClassTransitioned(this.options.activeClass));
        }
    });
    XF.PollBlock = XF.Element.newHandler({
        options: {},
        init: function() {
            this.$target.on(
                "ajax-submit:response",
                XF.proxy(this, "afterSubmit")
            );
        },
        afterSubmit: function(a, b) {
            if (!b.errors && !b.exception) {
                a.preventDefault();
                b.redirect && XF.redirect(b.redirect);
                var c = this;
                XF.setupHtmlInsert(b.html, function(d, f) {
                    d.hide();
                    d.insertAfter(c.$target);
                    c.$target.xfFadeUp(null, function() {
                        c.$target.remove();
                        d.xfFadeDown();
                    });
                });
            }
        }
    });
    XF.Preview = XF.Element.newHandler({
        options: { previewUrl: null, previewButton: "button.js-previewButton" },
        previewing: null,
        init: function() {
            var a = this.$target,
                b = XF.findRelativeIf(this.options.previewButton, a);
            if (this.options.previewUrl)
                if (b.length) b.on({ click: XF.proxy(this, "preview") });
                else console.warn("Preview form has no preview button: %o", a);
            else console.warn("Preview form has no data-preview-url: %o", a);
        },
        preview: function(a) {
            a.preventDefault();
            if (this.previewing) return !1;
            this.previewing = !0;
            (a = XF.Element.getHandler(this.$target, "draft")) &&
                a.triggerSave();
            var b = this;
            XF.ajax(
                "post",
                this.options.previewUrl,
                this.$target.serializeArray(),
                function(c) {
                    c.html &&
                        XF.setupHtmlInsert(c.html, function(d, f, g) {
                            XF.overlayMessage(f.title, d);
                        });
                }
            ).always(function() {
                b.previewing = !1;
            });
        }
    });
    XF.ShareButtons = XF.Element.newHandler({
        options: {
            buttons: ".shareButtons-button",
            iconic: ".shareButtons--iconic",
            pageUrl: null,
            pageTitle: null,
            pageDesc: null,
            pageImage: null
        },
        pageUrl: null,
        pageTitle: null,
        pageDesc: null,
        pageImage: null,
        init: function() {
            var a = this.options.buttons,
                b = this.options.iconic;
            this.$target
                .on("focus mouseenter", a, XF.proxy(this, "focus"))
                .on("click", a, XF.proxy(this, "click"));
            "string" == typeof b && (b = this.$target.is(b));
            this.$target.find(a).each(function() {
                var c = e(this);
                b &&
                    XF.Element.applyHandler(c, "element-tooltip", {
                        element: "> span"
                    });
                c.data("clipboard") &&
                    navigator.clipboard &&
                    c.removeClass("is-hidden");
            });
        },
        setupPageData: function() {
            this.options.pageTitle && this.options.pageTitle.length
                ? (this.pageTitle = this.options.pageTitle)
                : ((this.pageTitle = e('meta[property="og:title"]').attr(
                      "content"
                  )),
                  this.pageTitle || (this.pageTitle = e("title").text()));
            if (this.options.pageUrl && this.options.pageUrl.length)
                this.pageUrl = this.options.pageUrl;
            else {
                var a = this.$target.closest(".overlay");
                a.length && (this.pageUrl = a.data("url"));
                this.pageUrl ||
                    (this.pageUrl = e('meta[property="og:url"]').attr(
                        "content"
                    ));
                this.pageUrl || (this.pageUrl = l.location.href);
            }
            this.options.pageDesc && this.options.pageDesc.length
                ? (this.pageDesc = this.options.pageDesc)
                : ((this.pageDesc = e('meta[property="og:description"]').attr(
                      "content"
                  )),
                  this.pageDesc ||
                      (this.pageDesc =
                          e("meta[name=description]").attr("content") || ""));
            this.options.pageImage && this.options.pageImage.length
                ? (this.pageImage = this.options.pageImage)
                : ((this.pageImage = e('meta[property="og:image"]').attr(
                      "content"
                  )),
                  this.pageImage ||
                      (this.pageImage = XF.config.publicMetadataLogoUrl || ""));
        },
        focus: function(a) {
            var b = e(a.currentTarget);
            if (!b.attr("href") && !b.is(".shareButtons-button--share")) {
                this.pageUrl || this.setupPageData();
                var c = b.data("href");
                if (!c) {
                    if (b.data("clipboard")) return;
                    console.error(
                        "No data-href or data-clipboard on share button %o",
                        a.currentTarget
                    );
                }
                c = c
                    .replace("{url}", encodeURIComponent(this.pageUrl))
                    .replace("{title}", encodeURIComponent(this.pageTitle))
                    .replace("{desc}", encodeURIComponent(this.pageDesc))
                    .replace("{image}", encodeURIComponent(this.pageImage));
                b.attr("href", c);
            }
        },
        click: function(a) {
            var b = e(a.currentTarget),
                c = b.attr("href"),
                d = b.data("popup-width") || 600,
                f = b.data("popup-height") || 400;
            b.is(".shareButtons-button--share") ||
                a.altKey ||
                a.ctrlKey ||
                a.metaKey ||
                a.shiftKey ||
                (b.data("clipboard")
                    ? (a.preventDefault(),
                      (a = b
                          .data("clipboard")
                          .replace("{url}", this.pageUrl)
                          .replace("{title}", this.pageTitle)
                          .replace("{desc}", this.pageDesc)
                          .replace("{image}", this.pageImage)),
                      navigator.clipboard.writeText(a).then(function() {
                          XF.flashMessage(
                              XF.phrase("link_copied_to_clipboard"),
                              3e3
                          );
                      }))
                    : c &&
                      c.match(/^https?:/i) &&
                      (a.preventDefault(),
                      l.open(
                          c,
                          "share",
                          "toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=" +
                              d +
                              ",height=" +
                              f +
                              ",left=" +
                              (screen.width - d) / 2 +
                              ",top=" +
                              (screen.height - f) / 2
                      )));
        }
    });
    XF.ShareInput = XF.Element.newHandler({
        options: {
            button: ".js-shareButton",
            input: ".js-shareInput",
            successText: ""
        },
        $button: null,
        $input: null,
        init: function() {
            this.$button = this.$target.find(this.options.button);
            this.$input = this.$target.find(this.options.input);
            navigator.clipboard && this.$button.removeClass("is-hidden");
            this.$button.on("click", XF.proxy(this, "buttonClick"));
            this.$input.on("click", XF.proxy(this, "inputClick"));
        },
        buttonClick: function(a) {
            var b = this;
            navigator.clipboard.writeText(this.$input.val()).then(function() {
                XF.flashMessage(
                    b.options.successText
                        ? b.options.successText
                        : XF.phrase("text_copied_to_clipboard"),
                    3e3
                );
            });
        },
        inputClick: function(a) {
            this.$input.select();
        }
    });
    XF.WebShare = XF.Element.newHandler({
        options: {
            fetch: !1,
            url: null,
            title: null,
            text: null,
            hide: null,
            hideContainerEls: !0
        },
        url: null,
        title: null,
        text: null,
        fetchUrl: null,
        init: function() {
            this.isSupported() &&
                (this.options.fetch && (this.fetchUrl = this.options.fetch),
                this.hideSpecified(),
                this.hideContainerElements(),
                this.setupShareData(),
                this.$target
                    .removeClass("is-hidden")
                    .on("click", XF.proxy(this, "click")));
        },
        isSupported: function() {
            var a = XF.browser.os;
            return (
                "share" in navigator &&
                "https:" == l.location.protocol &&
                ("android" == a || "ios" == a)
            );
        },
        hideSpecified: function() {
            if (this.options.hide) {
                var a = e(this.options.hide);
                a && a.length && a.addClass("is-hidden");
            }
        },
        hideContainerElements: function() {
            if (this.options.hideContainerEls) {
                var a = this.$target.parents(".block, .blockMessage");
                a.length &&
                    (a
                        .find(".shareButtons")
                        .removeClass("shareButtons--iconic"),
                    a.find(".block-minorHeader").hide(),
                    a.find(".shareButtons-label").hide());
            }
        },
        setupShareData: function() {
            this.fetchUrl ||
                (this.options.url
                    ? (this.url = this.options.url)
                    : ((this.url = e('meta[property="og:url"]').attr(
                          "content"
                      )),
                      this.url || (this.url = l.location.href)),
                this.options.title
                    ? (this.title = this.options.title)
                    : ((this.title = e('meta[property="og:title"]').attr(
                          "content"
                      )),
                      this.title || (this.title = e("title").text())),
                this.options.text
                    ? (this.text = this.options.text)
                    : ((this.text = e('meta[property="og:description"]').attr(
                          "content"
                      )),
                      this.text ||
                          (this.text =
                              e("meta[name=description]").attr("content") ||
                              "")));
        },
        click: function(a) {
            a.preventDefault();
            if (this.fetchUrl) {
                var b = this;
                XF.ajax(
                    "get",
                    this.fetchUrl,
                    { web_share: !0 },
                    function(c) {
                        "ok" === c.status
                            ? (b.setShareOptions(c), b.share())
                            : XF.redirect(b.options.url);
                    },
                    { skipDefault: !0, skipError: !0, global: !1 }
                );
            } else this.share();
        },
        share: function() {
            navigator.share(this.getShareOptions()).catch(function(a) {});
        },
        setShareOptions: function(a) {
            this.url = a.contentUrl;
            this.title = a.contentTitle;
            this.text = a.contentDesc || a.contentTitle;
            this.fetchUrl = null;
        },
        getShareOptions: function() {
            var a = { url: this.url, title: "", text: "" };
            this.title && (a.title = this.title);
            a.text = this.text ? this.text : a.title;
            return a;
        }
    });
    XF.CopyToClipboard = XF.Element.newHandler({
        options: { copyText: "", copyTarget: "", success: "" },
        copyText: null,
        init: function() {
            navigator.clipboard && this.$target.removeClass("is-hidden");
            if (this.options.copyText) this.copyText = this.options.copyText;
            else if (this.options.copyTarget) {
                var a = e(this.options.copyTarget);
                a.is('input[type="text"], textarea')
                    ? (this.copyText = a.val())
                    : (this.copyText = a.text());
            }
            if (this.copyText)
                this.$target.on("click", XF.proxy(this, "click"));
            else console.error("No text to copy to clipboard");
        },
        click: function() {
            var a = this;
            navigator.clipboard.writeText(this.copyText).then(function() {
                if (a.options.success) XF.flashMessage(a.options.success, 3e3);
                else {
                    var b = XF.phrase("text_copied_to_clipboard");
                    a.copyText.match(/^[a-z0-9-]+:\/\/[^\s"<>{}`]+$/i) &&
                        (b = XF.phrase("link_copied_to_clipboard"));
                    XF.flashMessage(b, 3e3);
                }
            });
        }
    });
    XF.PushToggle = XF.Element.newHandler({
        options: {},
        isSubscribed: !1,
        cancellingSub: null,
        init: function() {
            XF.Push.isSupported()
                ? "denied" === Notification.permission
                    ? (this.updateButton(XF.phrase("push_blocked_label"), !1),
                      console.error("Notification.permission === denied"))
                    : this.registerWorker()
                : (this.updateButton(XF.phrase("push_not_supported_label"), !1),
                  console.error("XF.Push.isSupported() returned false"));
        },
        registerWorker: function() {
            var a = this;
            XF.Push.registerWorker(
                function() {
                    a.$target.on("click", XF.proxy(a, "buttonClick"));
                    e(m).on("push:init-subscribed", function() {
                        a.updateButton(XF.phrase("push_disable_label"), !0);
                    });
                    e(m).on("push:init-unsubscribed", function() {
                        a.updateButton(XF.phrase("push_enable_label"), !0);
                    });
                },
                function() {
                    a.updateButton(XF.phrase("push_not_supported_label"), !1);
                    console.error(
                        "navigator.serviceWorker.register threw an error."
                    );
                }
            );
        },
        buttonClick: function(a) {
            var b = this;
            XF.Push.handleToggleAction(
                function() {
                    b.updateButton(XF.phrase("push_enable_label"), !0);
                    XF.Cookie.set("push_notice_dismiss", "1");
                    XF.config.userId && XF.Push.removeUserFromPushHistory();
                },
                !1,
                function() {
                    b.updateButton(XF.phrase("push_disable_label"), !0);
                },
                function() {
                    b.updateButton(XF.phrase("push_not_supported_label"), !1);
                }
            );
        },
        updateButton: function(a, b) {
            this.$target.find(".button-text").text(a);
            b
                ? this.$target.removeClass("is-disabled")
                : this.$target.addClass("is-disabled");
        }
    });
    XF.PushCta = XF.Element.newHandler({
        options: {},
        init: function() {
            XF.config.skipPushNotificationCta ||
                (XF.Push.isSupported() &&
                    "denied" !== Notification.permission &&
                    this.registerWorker());
        },
        registerWorker: function() {
            var a = this;
            XF.Push.registerWorker(function() {
                e(m).on("push:init-unsubscribed", function() {
                    if (XF.Push.hasUserPreviouslySubscribed())
                        try {
                            XF.Push.handleSubscribeAction(!0);
                        } catch (b) {
                            XF.Push.removeUserFromPushHistory();
                        }
                    else
                        a.getDismissCookie() ||
                            a.$target
                                .closest(".js-enablePushContainer")
                                .xfFadeDown(
                                    XF.config.speed.fast,
                                    XF.proxy(a, "initLinks")
                                );
                });
            });
        },
        initLinks: function() {
            var a = this.$target;
            a.find(".js-enablePushLink").on(
                "click",
                XF.proxy(this, "linkClick")
            );
            a.siblings(".js-enablePushDismiss").on(
                "click",
                XF.proxy(this, "dismissClick")
            );
        },
        linkClick: function(a) {
            a.preventDefault();
            this.hidePushContainer();
            this.setDismissCookie(!0, 432e5);
            XF.Push.handleSubscribeAction(!1);
        },
        dismissClick: function(a) {
            a.preventDefault();
            e(a.currentTarget).hide();
            this.$target
                .closest(".js-enablePushContainer")
                .addClass("notice--accent")
                .removeClass("notice--primary");
            this.$target.find(".js-initialMessage").hide();
            a = this.$target.find(".js-dismissMessage");
            a.show();
            a.find(".js-dismissTemp").on(
                "click",
                XF.proxy(this, "dismissTemp")
            );
            a.find(".js-dismissPerm").on(
                "click",
                XF.proxy(this, "dismissPerm")
            );
        },
        dismissTemp: function(a) {
            a.preventDefault();
            this.hidePushContainer();
            this.setDismissCookie(!1);
        },
        dismissPerm: function(a) {
            a.preventDefault();
            this.hidePushContainer();
            this.setDismissCookie(!0);
        },
        setDismissCookie: function(a, b) {
            a
                ? (b || (b = 31536e7),
                  XF.Cookie.set(
                      "push_notice_dismiss",
                      "1",
                      new Date(Date.now() + b)
                  ))
                : XF.Cookie.set("push_notice_dismiss", "1");
        },
        getDismissCookie: function() {
            return XF.Cookie.get("push_notice_dismiss");
        },
        hidePushContainer: function() {
            this.$target
                .closest(".js-enablePushContainer")
                .xfFadeUp(XF.config.speed.fast);
        }
    });
    XF.Reaction = XF.Element.newHandler({
        options: { delay: 200, reactionList: null },
        $tooltipHtml: null,
        trigger: null,
        tooltip: null,
        href: null,
        loading: !1,
        init: function() {
            if (this.$target.is("a") && this.$target.attr("href")) {
                this.href = this.$target.attr("href");
                var a = e("#xfReactTooltipTemplate");
                a.length &&
                    ((this.$tooltipHtml = e(e.parseHTML(a.html()))),
                    (this.tooltip = new XF.TooltipElement(
                        XF.proxy(this, "getContent"),
                        { extraClass: "tooltip--reaction", html: !0 }
                    )),
                    (this.trigger = new XF.TooltipTrigger(
                        this.$target,
                        this.tooltip,
                        {
                            maintain: !0,
                            delayIn: this.options.delay,
                            trigger: "hover focus touchhold",
                            onShow: XF.proxy(this, "onShow"),
                            onHide: XF.proxy(this, "onHide")
                        }
                    )),
                    this.trigger.init());
                this.$target.on("click", XF.proxy(this, "actionClick"));
            }
        },
        getContent: function() {
            var a = this.href;
            a = a.replace(/(\?|&)reaction_id=[^&]*(&|$)/, "$1reaction_id=");
            this.$tooltipHtml.find(".reaction").each(function() {
                var b = e(this),
                    c = b.data("reaction-id");
                b.attr("href", c ? a + parseInt(c, 10) : !1);
            });
            this.$tooltipHtml
                .find('[data-xf-init~="tooltip"]')
                .attr("data-delay-in", 50)
                .attr("data-delay-out", 50);
            this.$tooltipHtml.on(
                "click",
                ".reaction",
                XF.proxy(this, "actionClick")
            );
            return this.$tooltipHtml;
        },
        onShow: function() {
            var a = XF.Reaction.activeTooltip;
            a && a !== this && a.hide();
            XF.Reaction.activeTooltip = this;
        },
        onHide: function() {
            XF.Reaction.activeTooltip === this &&
                (XF.Reaction.activeTooltip = null);
            this.$target.removeData("tooltip:taphold");
        },
        show: function() {
            this.trigger && this.trigger.show();
        },
        hide: function() {
            this.trigger && this.trigger.hide();
        },
        actionClick: function(a) {
            a.preventDefault();
            if (
                this.$target.data("tooltip:taphold") &&
                this.$target.is(a.currentTarget)
            )
                this.$target.removeData("tooltip:taphold");
            else if (!this.loading) {
                this.loading = !0;
                var b = this;
                XF.ajax(
                    "post",
                    e(a.currentTarget).attr("href"),
                    XF.proxy(this, "actionComplete")
                ).always(function() {
                    setTimeout(function() {
                        b.loading = !1;
                    }, 250);
                });
            }
        },
        actionComplete: function(a) {
            if (a.html) {
                var b = this.$target,
                    c = b.data("reaction-id"),
                    d = a.reactionId,
                    f = a.linkReactionId,
                    g = this;
                XF.setupHtmlInsert(a.html, function(k, n, p) {
                    g.hide();
                    n = k.find(".js-reaction");
                    p = k.find(".js-reactionText");
                    var t = b.find(".js-reaction"),
                        r = b.find(".js-reactionText"),
                        q = b.attr("href");
                    f &&
                        ((q = q.replace(
                            /(\?|&)reaction_id=\d+(?=&|$)/,
                            "$1reaction_id=" + f
                        )),
                        b.attr("href", q));
                    d
                        ? (b.addClass("has-reaction"),
                          b.removeClass("reaction--imageHidden"),
                          c || (c = 1),
                          b.removeClass("reaction--" + c),
                          b.addClass("reaction--" + d),
                          b.data("reaction-id", d))
                        : (b.removeClass("has-reaction"),
                          b.addClass("reaction--imageHidden"),
                          c &&
                              (b.removeClass("reaction--" + c),
                              b.addClass("reaction--" + k.data("reaction-id")),
                              b.data("reaction-id", 0)));
                    t.replaceWith(n);
                    r && p && r.replaceWith(p);
                });
                var h = this.options.reactionList
                    ? XF.findRelativeIf(this.options.reactionList, b)
                    : e([]);
                "undefined" !== typeof a.reactionList &&
                    h.length &&
                    (a.reactionList.content
                        ? XF.setupHtmlInsert(a.reactionList, function(k, n) {
                              h.html(k).addClassTransitioned("is-active");
                          })
                        : h.removeClassTransitioned("is-active", function() {
                              h.empty();
                          }));
            }
        }
    });
    XF.Reaction.activeTooltip = null;
    XF.BookmarkClick = XF.Event.newHandler({
        eventType: "click",
        eventNameSpace: "XFBookmarkClick",
        processing: !1,
        href: null,
        tooltip: null,
        trigger: null,
        $tooltipHtml: null,
        clickE: null,
        init: function() {
            this.href = this.$target.attr("href");
            this.tooltip = new XF.TooltipElement(
                XF.proxy(this, "getTooltipContent"),
                { extraClass: "tooltip--bookmark", html: !0, loadRequired: !0 }
            );
            this.trigger = new XF.TooltipTrigger(this.$target, this.tooltip, {
                maintain: !0,
                trigger: ""
            });
            this.trigger.init();
        },
        click: function(a) {
            if (
                !(
                    0 < a.button ||
                    a.ctrlKey ||
                    a.shiftKey ||
                    a.metaKey ||
                    a.altKey
                )
            )
                if (
                    (a.preventDefault(),
                    (this.clickE = a),
                    this.$target.hasClass("is-bookmarked"))
                )
                    this.trigger.clickShow(a);
                else if (!this.processing) {
                    this.processing = !0;
                    var b = this;
                    XF.ajax(
                        "POST",
                        this.href,
                        { tooltip: 1 },
                        XF.proxy(this, "handleSwitchClick"),
                        { skipDefaultSuccess: !0 }
                    ).always(function() {
                        setTimeout(function() {
                            b.processing = !1;
                        }, 250);
                    });
                }
        },
        handleSwitchClick: function(a) {
            var b = this,
                c = function() {
                    XF.handleSwitchResponse(b.$target, a);
                    b.trigger.clickShow(b.clickE);
                };
            a.html
                ? XF.setupHtmlInsert(a.html, function(d, f, g) {
                      b.tooltip.requiresLoad() &&
                          ((b.$tooltipHtml = d), b.tooltip.setLoadRequired(!1));
                      c();
                  })
                : c();
        },
        getTooltipContent: function(a) {
            if (this.$tooltipHtml && !this.tooltip.requiresLoad())
                return (
                    this.initializeTooltip(this.$tooltipHtml), this.$tooltipHtml
                );
            var b = this,
                c = { skipDefault: !0, skipError: !0, global: !1 };
            this.trigger.wasClickTriggered() && (c.global = !0);
            XF.ajax(
                "get",
                this.href,
                { tooltip: 1 },
                function(d) {
                    b.tooltipLoaded(d, a);
                },
                c
            );
        },
        tooltipLoaded: function(a, b) {
            var c = this;
            XF.setupHtmlInsert(a.html, function(d, f, g) {
                c.initializeTooltip(d);
                b(d);
            });
        },
        initializeTooltip: function(a) {
            a.find("form").on(
                "ajax-submit:response",
                XF.proxy(this, "handleOverlaySubmit")
            );
        },
        handleOverlaySubmit: function(a, b) {
            "ok" == b.status &&
                (a.preventDefault(),
                this.trigger && this.trigger.hide(),
                XF.handleSwitchResponse(this.$target, b),
                "bookmarkremoved" == b.switchKey && a.currentTarget.reset());
        }
    });
    XF.BookmarkLabelFilter = XF.Element.newHandler({
        options: { target: null, showAllLinkTarget: null },
        loading: !1,
        $filterTarget: null,
        $showAllLinkTarget: null,
        init: function() {
            this.$filterTarget = XF.findRelativeIf(
                this.options.target,
                this.$target
            );
            if (this.$filterTarget.length) {
                this.options.showAllLinkTarget &&
                    (this.$showAllLinkTarget = XF.findRelativeIf(
                        this.options.showAllLinkTarget,
                        this.$target
                    ));
                var a = this;
                this.$target.on(
                    "select2:select",
                    XF.proxy(this, "loadResults")
                );
                this.$target.on("select2:unselect", function(b) {
                    a.loadResults();
                });
            } else console.error("No filter target found.");
        },
        loadResults: function() {
            if (!this.loading) {
                this.loading = !0;
                var a = this.$target.find(".js-labelFilter").val(),
                    b = this;
                XF.ajax(
                    "get",
                    XF.canonicalizeUrl("index.php?account/bookmarks-popup"),
                    { label: a },
                    function(c) {
                        c.html &&
                            (b.$showAllLinkTarget &&
                                c.showAllUrl &&
                                b.$showAllLinkTarget.attr("href", c.showAllUrl),
                            XF.setupHtmlInsert(c.html, function(d, f) {
                                b.$target
                                    .find(".js-tokenSelect")
                                    .select2("close");
                                b.$filterTarget.empty();
                                b.$filterTarget.append(d);
                            }));
                    }
                ).always(function() {
                    b.loading = !1;
                });
            }
        }
    });
    XF.ContentVote = XF.Element.newHandler({
        options: { contentId: null },
        processing: !1,
        init: function() {
            this.$target.on(
                "click",
                "[data-vote]",
                XF.proxy(this, "voteClick")
            );
        },
        voteClick: function(a) {
            a.preventDefault();
            a = e(a.currentTarget);
            if (!a.hasClass("is-disabled") && !this.processing) {
                this.processing = !0;
                a = a.attr("href");
                var b = this;
                XF.ajax("POST", a, {}, XF.proxy(this, "handleAjax"), {
                    skipDefaultSuccess: !1
                }).always(function() {
                    setTimeout(function() {
                        b.processing = !1;
                    }, 250);
                });
            }
        },
        handleAjax: function(a) {
            this.updateData(a);
            if (this.options.contentId) {
                var b = e(
                        '.js-contentVote[data-content-id="' +
                            this.options.contentId +
                            '"]'
                    ),
                    c = this,
                    d = this.$target;
                b.each(function() {
                    if (d[0] !== this) {
                        var f = e(this);
                        f.is('[data-xf-init~="content-vote"]')
                            ? XF.Element.getHandler(
                                  f,
                                  "content-vote"
                              ).updateData(a)
                            : c.updateDisplay(f, a);
                    }
                });
            }
        },
        updateData: function(a) {
            this.updateDisplay(this.$target, a);
        },
        updateDisplay: function(a, b) {
            var c = a.find(".js-voteCount");
            a.find(".is-voted").removeClass("is-voted");
            b.vote
                ? (a.find('[data-vote="' + b.vote + '"]').addClass("is-voted"),
                  a.addClass("is-voted"))
                : a.removeClass("is-voted");
            c.fadeOut("fast", function() {
                c.attr("data-score", b.voteScore).text(b.voteScoreShort);
                0 < b.voteScore
                    ? c.removeClass("is-negative").addClass("is-positive")
                    : 0 > b.voteScore
                    ? c.removeClass("is-positive").addClass("is-negative")
                    : c.removeClass("is-positive").removeClass("is-negative");
                c.fadeIn("fast");
            });
        }
    });
    XF.InstallPrompt = XF.Element.newHandler({
        options: { button: "| .js-installPromptButton" },
        $button: null,
        bipEvent: null,
        init: function() {
            if (
                (this.$button = XF.findRelativeIf(
                    this.options.button,
                    this.$target
                )) &&
                this.$button.length
            ) {
                var a = e(l);
                a.on(
                    "beforeinstallprompt",
                    XF.proxy(this, "beforeInstallPrompt")
                );
                a.on("appinstalled", XF.proxy(this, "appInstalled"));
                this.$button.on("click", XF.proxy(this, "buttonClick"));
            } else
                console.error(
                    "No install button found for %o",
                    this.$target[0]
                );
        },
        beforeInstallPrompt: function(a) {
            a.preventDefault();
            this.bipEvent = a.originalEvent;
            this.$target.show();
        },
        appInstalled: function(a) {
            this.$target.hide();
        },
        buttonClick: function() {
            this.bipEvent
                ? this.bipEvent.prompt()
                : console.error("No beforeinstallprompt event was captured");
        }
    });
    XF.Event.register("click", "attribution", "XF.AttributionClick");
    XF.Event.register("click", "like", "XF.LikeClick");
    XF.Event.register("click", "preview-click", "XF.PreviewClick");
    XF.Event.register("click", "scroll-to", "XF.ScrollToClick");
    XF.Event.register("click", "switch", "XF.SwitchClick");
    XF.Event.register("click", "switch-overlay", "XF.SwitchOverlayClick");
    XF.Element.register("alerts-list", "XF.AlertsList");
    XF.Element.register("draft", "XF.Draft");
    XF.Element.register("draft-trigger", "XF.DraftTrigger");
    XF.Element.register("focus-trigger", "XF.FocusTrigger");
    XF.Element.register("poll-block", "XF.PollBlock");
    XF.Element.register("preview", "XF.Preview");
    XF.Element.register("share-buttons", "XF.ShareButtons");
    XF.Element.register("share-input", "XF.ShareInput");
    XF.Element.register("web-share", "XF.WebShare");
    XF.Element.register("copy-to-clipboard", "XF.CopyToClipboard");
    XF.Element.register("push-toggle", "XF.PushToggle");
    XF.Element.register("push-cta", "XF.PushCta");
    XF.Element.register("reaction", "XF.Reaction");
    XF.Element.register("bookmark-click", "XF.BookmarkClick");
    XF.Element.register("bookmark-label-filter", "XF.BookmarkLabelFilter");
    XF.Element.register("content-vote", "XF.ContentVote");
    XF.Element.register("install-prompt", "XF.InstallPrompt");
})(jQuery, window, document);

("use strict");
!(function(e, p, q) {
    XF.SubmitClick = XF.Event.newHandler({
        eventNameSpace: "XFSubmitClick",
        options: {
            target: null,
            container: null,
            timeout: 500,
            uncheckedValue: "0",
            disable: null
        },
        $input: null,
        $form: null,
        init: function() {
            var a = this.$target;
            if (
                a.is("label") &&
                ((a = a.find("input:radio, input:checkbox")), !a.length)
            )
                return;
            this.$input = a;
            a = a.closest("form");
            this.$form = a.length ? a : null;
        },
        click: function(a) {
            var b = this.$input,
                c = this.$form,
                d = this.options.target,
                g = this.options.container;
            if (b)
                if (d) {
                    var f = this.options.uncheckedValue;
                    setTimeout(function() {
                        var h = {};
                        g
                            ? (h = b
                                  .closest(g)
                                  .find("input, select, textarea")
                                  .serializeArray())
                            : (h[b.attr("name")] = b.prop("checked")
                                  ? b.attr("value")
                                  : f);
                        XF.ajax("POST", d, h);
                    }, 0);
                } else
                    c
                        ? ((a = c.data("submit-click-timer")) &&
                              clearTimeout(a),
                          c.one("ajax-submit:complete", function(h, k, m) {
                              if (k.errors)
                                  b.prop(
                                      "checked",
                                      b.prop("checked") ? "" : "checked"
                                  );
                              else if (
                                  "checkbox" == b.attr("type") &&
                                  null !== b.closest("tr.dataList-row")
                              )
                                  b.closest("tr.dataList-row")[
                                      b.prop("checked")
                                          ? "removeClass"
                                          : "addClass"
                                  ]("dataList-row--disabled");
                          }),
                          (a = setTimeout(function() {
                              c.submit();
                          }, this.options.timeout)),
                          c.data("submit-click-timer", a))
                        : console.error("No target or form to submit on click");
        }
    });
    XF.AjaxSubmit = XF.Element.newHandler({
        options: {
            redirect: !0,
            skipOverlayRedirect: !1,
            forceFlashMessage: !1,
            resetComplete: !1,
            hideOverlay: !0,
            disableSubmit: ".button, :submit, :reset, [data-disable-submit]",
            jsonName: null,
            jsonOptIn: null,
            replace: null,
            showReplacement: !0
        },
        submitPending: !1,
        $submitButton: null,
        init: function() {
            var a = this.$target;
            a.is("form")
                ? (a.on({
                      submit: XF.proxy(this, "submit"),
                      keyup: XF.proxy(this, "cmdEnterKey"),
                      "draft:beforesave": XF.proxy(this, "draftCheck")
                  }),
                  a.on(
                      "click",
                      "input[type=submit], button:not([type]), button[type=submit]",
                      XF.proxy(this, "submitButtonClicked")
                  ))
                : console.error("%o is not a form", a[0]);
        },
        submit: function(a) {
            var b = this.$submitButton,
                c = this.$target,
                d = "multipart/form-data" == c.attr("enctype");
            if (d) {
                if (this.options.jsonName) {
                    a.preventDefault();
                    console.error(
                        "JSON serialized forms do not support the file upload-style enctype."
                    );
                    XF.alert(
                        XF.phrase(
                            "oops_we_ran_into_some_problems_more_details_console"
                        )
                    );
                    return;
                }
                if (!p.FormData) return;
            }
            if (
                !(
                    (this.$submitButton &&
                        this.$submitButton.data("prevent-ajax")) ||
                    XF.debug.disableAjaxSubmit
                )
            )
                if (this.submitPending) a && a.preventDefault();
                else {
                    var g = { skipDefault: !0 };
                    d && (g.timeout = 0);
                    var f = e.Event("ajax-submit:before"),
                        h = {
                            form: c,
                            handler: this,
                            method: c.attr("method") || "get",
                            action: c.attr("action"),
                            submitButton: b,
                            preventSubmit: !1,
                            successCallback: XF.proxy(this, "submitResponse"),
                            ajaxOptions: g
                        };
                    c.trigger(f, h);
                    if (h.preventSubmit) return !1;
                    if (f.isDefaultPrevented()) return !0;
                    a && a.preventDefault();
                    var k = this;
                    setTimeout(function() {
                        k.submitPending = !0;
                        var m = XF.getDefaultFormData(
                            c,
                            b,
                            k.options.jsonName,
                            k.options.jsonOptIn
                        );
                        k.disableButtons();
                        XF.ajax(
                            h.method,
                            h.action,
                            m,
                            h.successCallback,
                            h.ajaxOptions
                        ).always(function() {
                            k.$submitButton = null;
                            setTimeout(function() {
                                k.submitPending = !1;
                                k.enableButtons();
                            }, 300);
                            f = e.Event("ajax-submit:always");
                            c.trigger(f, c, k);
                        });
                    }, 0);
                }
        },
        disableButtons: function() {
            this.$target.find(this.options.disableSubmit).prop("disabled", !0);
        },
        enableButtons: function() {
            this.$target.find(this.options.disableSubmit).prop("disabled", !1);
        },
        submitResponse: function(a, b, c) {
            if ("object" != typeof a) XF.alert("Response was not JSON.");
            else {
                b = this.$target;
                c = this.$submitButton;
                var d = e.Event("ajax-submit:response");
                b.trigger(d, a, this);
                if (!d.isDefaultPrevented()) {
                    d = e.Event("ajax-submit:error");
                    var g = !1,
                        f = !1,
                        h = a.redirect && this.options.redirect,
                        k = b.closest(".overlay");
                    (k.length && this.options.hideOverlay) || (k = null);
                    h && this.options.skipOverlayRedirect && k && (h = !1);
                    c &&
                        c.attr("data-ajax-redirect") &&
                        (h = c.data("ajax-redirect"));
                    if (a.errorHtml)
                        b.trigger(d, a, this),
                            d.isDefaultPrevented() ||
                                XF.setupHtmlInsert(a.errorHtml, function(l, n) {
                                    n =
                                        n.h1 ||
                                        n.title ||
                                        XF.phrase(
                                            "oops_we_ran_into_some_problems"
                                        );
                                    XF.overlayMessage(n, l);
                                }),
                            (g = !0);
                    else if (a.errors)
                        b.trigger(d, a, this),
                            d.isDefaultPrevented() || XF.alert(a.errors),
                            (g = !0);
                    else if (a.exception) XF.alert(a.exception);
                    else if ("ok" == a.status && a.message)
                        h
                            ? this.options.forceFlashMessage
                                ? (XF.flashMessage(a.message, 1e3, function() {
                                      XF.redirect(a.redirect);
                                  }),
                                  (f = !0))
                                : XF.redirect(a.redirect)
                            : (XF.flashMessage(a.message, 3e3), (f = !0)),
                            k && k.trigger("overlay:hide");
                    else if (a.html) {
                        var m = this;
                        XF.setupHtmlInsert(a.html, function(l, n, r) {
                            if (m.options.replace && m.doSubmitReplace(l, r))
                                return !1;
                            k && k.trigger("overlay:hide");
                            l = XF.getOverlayHtml({
                                html: l,
                                title: n.h1 || n.title
                            });
                            XF.showOverlay(l);
                        });
                    } else
                        "ok" == a.status &&
                            (h && XF.redirect(a.redirect),
                            k && k.trigger("overlay:hide"));
                    !f &&
                        a.flashMessage &&
                        XF.flashMessage(a.flashMessage, 3e3);
                    a.errors && d.isDefaultPrevented();
                    d = e.Event("ajax-submit:complete");
                    b.trigger(d, a, this);
                    d.isDefaultPrevented() ||
                        (this.options.resetComplete && !g && b[0].reset());
                }
            }
        },
        doSubmitReplace: function(a, b) {
            var c = this.options.replace;
            if (!c) return !1;
            var d = c.split(" with ");
            c = e.trim(d[0]);
            d = d[1] ? e.trim(d[1]) : c;
            if ("self" == c || this.$target.is(c)) var g = this.$target;
            else
                (g = this.$target.find(c).first()),
                    g.length || (g = e(c).first());
            if (!g.length)
                return (
                    console.error("Could not find old selector '" + c + "'"), !1
                );
            var f = a.is(d) ? a : a.find(d).first();
            if (!f.length)
                return (
                    console.error("Could not find new selector '" + d + "'"), !1
                );
            this.options.showReplacement
                ? (f.hide().insertAfter(g),
                  g.xfFadeUp(null, function() {
                      g.remove();
                      f.length && (XF.activate(f), b(!1));
                      f.xfFadeDown(null, XF.layoutChange);
                  }))
                : (f.insertAfter(g),
                  g.remove(),
                  f.length && (XF.activate(f), b(!1)),
                  XF.layoutChange());
            return !0;
        },
        submitButtonClicked: function(a) {
            this.$submitButton = e(a.currentTarget);
        },
        draftCheck: function(a) {
            this.submitPending && a.preventDefault();
        }
    });
    XF.ChangeSubmit = XF.Element.newHandler({
        options: { watch: ":input:not(button)", submitDelay: 0 },
        formInitialized: !1,
        hasChanges: !1,
        hasPendingChanges: !1,
        hasUnsavedChanges: !1,
        $clickOnSuccessfulSave: null,
        delayTimeout: null,
        init: function() {
            var a = this;
            this.$target
                .on("change", this.options.watch, XF.proxy(this, "change"))
                .on("focus", this.options.watch, function() {
                    a.clearSubmitTimeout();
                })
                .on("blur", this.options.watch, function(b) {
                    a.hasPendingChanges && a.scheduleSubmit();
                })
                .on("click", "[type=reset]", XF.proxy(this, "revert"))
                .on("submit", function() {
                    a.hasPendingChanges = !1;
                })
                .on("ajax-submit:complete", function(b, c) {
                    if ("ok" === c.status) {
                        a.hasUnsavedChanges = !1;
                        var d = a.$clickOnSuccessfulSave;
                        d &&
                            ((a.$clickOnSuccessfulSave = null),
                            setTimeout(function() {
                                d.click();
                            }, 100));
                    }
                });
            this.$target.find("[data-force-change-submit]").click(function(b) {
                a.hasUnsavedChanges &&
                    (b.stopPropagation(),
                    b.stopImmediatePropagation(),
                    (a.$clickOnSuccessfulSave = e(b.target)),
                    a.triggerSubmit());
            });
        },
        initForm: function() {
            this.formInitialized ||
                ((this.formInitialized = !0),
                XF.Element.applyHandler(this.$target, "ajax-submit", {
                    redirect: !1,
                    forceFlashMessage: !1
                }),
                (XF.Element.getHandler(
                    this.$target,
                    "ajax-submit"
                ).options.redirect = !1));
        },
        change: function(a) {
            this.initForm();
            this.hasUnsavedChanges = this.hasChanges = !0;
            this.$clickOnSuccessfulSave = null;
            this.validateGroup(e(a.target).data("group")) &&
                ((this.hasPendingChanges = !0), this.scheduleSubmit());
        },
        clearSubmitTimeout: function() {
            this.delayTimeout && clearTimeout(this.delayTimeout);
            this.delayTimeout = null;
        },
        scheduleSubmit: function() {
            var a = this.options.submitDelay;
            0 < a
                ? (this.clearSubmitTimeout(),
                  (this.delayTimeout = setTimeout(
                      XF.proxy(this, "triggerSubmit"),
                      a
                  )))
                : this.triggerSubmit();
        },
        triggerSubmit: function() {
            this.clearSubmitTimeout();
            this.$target.trigger("submit");
        },
        validateGroup: function(a) {
            if (!a) return !0;
            var b = !0;
            this.$target.find("[data-group='" + a + "']").each(function() {
                if (e(this).data("required") && "" === e(this).val())
                    return (b = !1);
            });
            return b;
        },
        revert: function(a) {
            a.preventDefault();
            this.hasChanges &&
                ((this.hasChanges = !1),
                this.$target.trigger("reset"),
                this.triggerSubmit());
        }
    });
    XF.AutoComplete = XF.Element.newHandler({
        loadTimer: null,
        loadVal: "",
        results: null,
        options: {
            single: !1,
            multiple: ",",
            acurl: "",
            minLength: 2,
            queryKey: "q",
            extraFields: "",
            extraParams: {},
            jsonContainer: "results",
            autosubmit: !1
        },
        init: function() {
            var a = this.$target;
            this.options.autosubmit && (this.options.single = !0);
            this.options.acurl ||
                (this.options.acurl = XF.getAutoCompleteUrl());
            this.results = new XF.AutoCompleteResults({
                onInsert: XF.proxy(this, "addValue")
            });
            a.attr("autocomplete", "off").on({
                keydown: XF.proxy(this, "keydown"),
                keyup: XF.proxy(this, "keyup"),
                "blur click": XF.proxy(this, "blur"),
                paste: function() {
                    setTimeout(function() {
                        a.trigger("keydown");
                    }, 0);
                }
            });
            a.closest("form").submit(XF.proxy(this, "hideResults"));
        },
        keydown: function(a) {
            if (this.results.isVisible()) {
                var b = this.results,
                    c = function() {
                        a.preventDefault();
                        return !1;
                    };
                switch (a.key) {
                    case "ArrowDown":
                        return b.selectResult(1), c();
                    case "ArrowUp":
                        return b.selectResult(-1), c();
                    case "Escape":
                        return b.hideResults(), c();
                    case "Enter":
                        return b.insertSelectedResult(a), c();
                }
            }
        },
        keyup: function(a) {
            if (this.results.isVisible())
                switch (a.key) {
                    case "ArrowDown":
                    case "ArrowUp":
                    case "Enter":
                        return;
                }
            this.loadTimer && clearTimeout(this.loadTimer);
            this.loadTimer = setTimeout(XF.proxy(this, "load"), 200);
        },
        blur: function(a) {
            clearTimeout(this.loadTimer);
            setTimeout(XF.proxy(this, "hideResults"), 250);
            this.xhr && (this.xhr.abort(), (this.xhr = !1));
        },
        load: function() {
            var a = this.loadVal,
                b = this.options.extraParams;
            this.loadTimer && clearTimeout(this.loadTimer);
            this.loadVal = this.getPartialValue();
            "" == this.loadVal
                ? this.hideResults()
                : this.loadVal == a ||
                  this.loadVal.length < this.options.minLength ||
                  ((b[this.options.queryKey] = this.loadVal),
                  "" != this.options.extraFields &&
                      e(this.options.extraFields).each(function() {
                          b[this.name] = e(this).val();
                      }),
                  this.xhr && this.xhr.abort(),
                  (this.xhr = XF.ajax(
                      "get",
                      this.options.acurl,
                      b,
                      XF.proxy(this, "showResults"),
                      { error: !1 }
                  )));
        },
        hideResults: function() {
            this.results.hideResults();
        },
        showResults: function(a) {
            this.xhr && (this.xhr = !1);
            this.options.jsonContainer &&
                a &&
                (a = a[this.options.jsonContainer]);
            this.results.showResults(this.getPartialValue(), a, this.$target);
        },
        addValue: function(a) {
            if (this.options.single) this.$target.val(a);
            else {
                var b = this.getFullValues();
                "" != a &&
                    (b.length && (a = " " + a),
                    b.push(a + this.options.multiple + " "));
                this.$target.val(b.join(this.options.multiple));
            }
            this.$target.trigger("change").trigger("auto-complete:insert", {
                inserted: e.trim(a),
                current: this.$target.val()
            });
            this.options.autosubmit
                ? this.$target.closest("form").submit()
                : this.$target.autofocus();
        },
        getFullValues: function() {
            var a = this.$target.val();
            if ("" == a) return [];
            if (this.options.single) return [a];
            var b = a.lastIndexOf(this.options.multiple);
            if (-1 == b) return [];
            a = a.substr(0, b);
            return a.split(this.options.multiple);
        },
        getPartialValue: function() {
            var a = this.$target.val();
            if (this.options.single) return e.trim(a);
            var b = a.lastIndexOf(this.options.multiple);
            return -1 == b
                ? e.trim(a)
                : e.trim(a.substr(b + this.options.multiple.length));
        }
    });
    XF.UserMentioner = XF.Element.newHandler({
        options: {},
        handler: null,
        init: function() {
            this.handler = new XF.AutoCompleter(this.$target, {
                url: XF.getAutoCompleteUrl()
            });
        }
    });
    XF.EmojiCompleter = XF.Element.newHandler({
        options: { insertTemplate: "${text}" },
        handler: null,
        init: function() {
            if (XF.config.shortcodeToEmoji) {
                var a = {
                    url: XF.canonicalizeUrl("index.php?misc/find-emoji"),
                    at: ":",
                    keepAt: !1,
                    insertMode: "text",
                    displayTemplate:
                        '<div class="contentRow"><div class="contentRow-figure contentRow-figure--emoji">{{{icon}}}</div><div class="contentRow-main contentRow-main--close">{{{text}}}<div class="contentRow-minor contentRow-minor--smaller">{{{desc}}}</div></div></div>',
                    beforeInsert: function(b) {
                        XF.logRecentEmojiUsage(b);
                        return b;
                    }
                };
                this.handler = new XF.AutoCompleter(this.$target, a);
            }
        }
    });
    XF.AutoSubmit = XF.Element.newHandler({
        options: { hide: !0, progress: !0 },
        init: function() {
            this.$target.submit();
            this.options.hide && this.$target.find(":submit").hide();
            this.options.progress && e(q).trigger("xf:action-start");
        }
    });
    XF.ChangedFieldNotifier = XF.Element.newHandler({
        options: { hide: !0, progress: !0 },
        init: function() {
            this.$target.find("input, select, textarea").each(function() {
                var a = e(this);
                a.data("orig-val", a.val());
                a.change(function() {
                    a.toggleClass("is-changed", a.val() != a.data("orig-val"));
                });
            });
        }
    });
    XF.CheckAll = XF.Element.newHandler({
        options: { container: "< form", match: "input:checkbox" },
        $container: null,
        updating: !1,
        init: function() {
            this.$container = XF.findRelativeIf(
                this.options.container,
                this.$target
            );
            var a = this;
            this.$container.on("click", this.options.match, function(b) {
                a.updating || e(b.target).is(a.$target) || a.updateState();
            });
            this.$target
                .closest("form")
                .on("selectplus:redrawSelected", XF.proxy(this, "updateState"));
            this.updateState();
            this.$target.click(XF.proxy(this, "click"));
        },
        click: function(a) {
            this.updating = !0;
            this.getCheckBoxes()
                .prop("checked", a.target.checked)
                .triggerHandler("click");
            this.updating = !1;
        },
        updateState: function() {
            var a = this.getCheckBoxes(),
                b = 0 < a.length;
            a.each(function() {
                if (!e(this).prop("checked")) return (b = !1);
            });
            this.$target.prop("checked", b);
        },
        getCheckBoxes: function() {
            return this.$container
                .find(this.options.match)
                .not(this.$target)
                .filter(":enabled");
        }
    });
    XF.SelectPlus = XF.Element.newHandler({
        options: {
            spCheckbox: null,
            spContainer: ".js-spContainer",
            activeClass: "is-spActive",
            checkedClass: "is-spChecked",
            hoverClass: "is-spHovered",
            spMultiBarUrl: null,
            spDebug: !0
        },
        $containers: null,
        $checkboxes: null,
        $multiBar: null,
        isActive: !1,
        isShifted: !1,
        lastSelected: null,
        lastEntered: null,
        init: function() {
            this.$checkboxes = this.$target.find(
                this.options.spCheckbox
                    ? this.options.spCheckbox
                    : "input:checkbox"
            );
            this.$containers = this.$checkboxes.closest(
                this.options.spContainer
            );
            this.debug(
                "init; containers: %o, checkboxes: %o",
                this.$containers.length,
                this.$checkboxes.length
            );
            if (this.$containers.length != this.$checkboxes.length)
                console.error(
                    "There must be an equal number of checkboxes and containers"
                );
            else {
                this.$checkboxes
                    .on("click", XF.proxy(this, "checkboxClick"))
                    .closest("label")
                    .hover(
                        XF.proxy(this, "checkboxEnter"),
                        XF.proxy(this, "checkboxExit")
                    );
                e(q).onPassive({
                    keydown: XF.proxy(this, "keydown"),
                    keyup: XF.proxy(this, "keyup")
                });
                var a = this;
                this.$containers.on("mousedown", function(b) {
                    if (
                        a.isActive &&
                        (b.ctrlKey || b.shiftKey) &&
                        (b.preventDefault(),
                        -1 !== navigator.userAgent.indexOf("MSIE"))
                    ) {
                        this.onselectstart = function() {
                            return !1;
                        };
                        var c = this;
                        p.setTimeout(function() {
                            c.onselectstart = null;
                        }, 0);
                    }
                });
                this.setActive();
                this.redrawSelected();
            }
        },
        checkboxClick: function(a) {
            if (!this.ignoreClick) {
                this.debug(
                    "checkboxClick; delegateTarget: %o",
                    a.delegateTarget
                );
                var b = this.$checkboxes.index(a.delegateTarget);
                a.delegateTarget.checked &&
                this.isShifted &&
                null !== this.lastSelected
                    ? ((this.ignoreClick = !0),
                      this.getShiftItems(this.$checkboxes, b)
                          .not(":checked")
                          .trigger("click"),
                      (this.ignoreClick = !1))
                    : (this.lastSelected = a.delegateTarget.checked ? b : null);
                this.setActive(a.delegateTarget.checked);
                this.redrawSelected();
            }
        },
        checkboxExit: function(a) {
            this.lastEntered = null;
        },
        checkboxEnter: function(a) {
            this.isActive &&
                ((this.lastEntered = this.$checkboxes.index(
                    e(a.delegateTarget)
                        .find("input:checkbox")
                        .eq(0)
                )),
                this.isShifted && this.redrawHover());
        },
        keydown: function(a) {
            "Shift" == a.key &&
                XF.Keyboard.isShortcutAllowed(q.activeElement) &&
                ((this.isShifted = !0), this.redrawHover());
        },
        keyup: function(a) {
            "Shift" == a.key &&
                this.isShifted &&
                ((this.isShifted = !1), this.redrawHover());
        },
        getShiftItems: function(a, b) {
            return null !== b && null !== this.lastSelected
                ? ((a = a.slice(
                      Math.min(b, this.lastSelected),
                      Math.max(b, this.lastSelected) + 1
                  )),
                  this.debug("shiftItems: %o", a),
                  a)
                : e();
        },
        setActive: function(a) {
            var b = this.isActive;
            this.isActive = a
                ? !0
                : 0 < this.$checkboxes.filter(":checked").length;
            this.deployMultiBar();
            this.isActive != b &&
                (this.debug("setActive: %s", this.isActive),
                this.$target
                    .trigger(
                        this.isActive
                            ? "selectplus:activate"
                            : "selectplus:deactivate",
                        [this]
                    )
                    .toggleClassTransitioned(
                        this.options.activeClass,
                        this.isActive
                    ),
                e(q.body).toggleClassTransitioned(
                    "is-spDocTriggered",
                    this.isActive
                ));
        },
        redrawSelected: function() {
            this.$target.trigger("selectplus:redraw-selected", [this]);
            var a = this;
            this.$checkboxes.each(function(b) {
                var c = e(this),
                    d = c.is(":checked");
                b = a.$containers.eq(b);
                b.toggleClassTransitioned(a.options.checkedClass, d);
                c.data("check-state") != d &&
                    b.trigger("selectplus:toggle-item", [this, d]);
                c.data("check-state", d);
            });
        },
        redrawHover: function() {
            this.$target.trigger("selectplus:redraw-hover", [this]);
            if (
                null !== this.lastSelected &&
                null !== this.lastEntered &&
                this.isShifted
            ) {
                var a = this.getShiftItems(this.$containers, this.lastEntered);
                this.debug(
                    "redrawHover: lastSelected: %s, lastEntered: %s",
                    this.lastSelected,
                    this.lastEntered
                );
                this.$containers
                    .not(a)
                    .toggleClass(this.options.hoverClass, !1);
                a.toggleClassTransitioned(this.options.hoverClass, !0);
            } else
                this.$containers.toggleClassTransitioned(
                    this.options.hoverClass,
                    !1
                );
        },
        deployMultiBar: function() {
            if (this.isActive && this.options.spMultiBarUrl) {
                var a = this;
                XF.loadMultiBar(
                    this.options.spMultiBarUrl,
                    this.$checkboxes.serializeArray(),
                    {
                        cache: !1,
                        init: function(b) {
                            a.MultiBar && a.MultiBar.destroy();
                            a.MultiBar = b;
                        }
                    },
                    { fastReplace: a.MultiBar ? !0 : !1 }
                );
            } else !this.active && this.MultiBar && this.MultiBar.hide();
        },
        debug: function() {
            this.options.spDebug &&
                ((arguments[0] = "SelectPlus:" + arguments[0]),
                console.log.apply(null, arguments));
        }
    });
    XF.DescLoader = XF.Element.newHandler({
        options: { descUrl: null },
        $container: null,
        changeTimer: null,
        xhr: null,
        init: function() {
            if (this.options.descUrl) {
                var a = this.$target.parent().find(".js-descTarget");
                a.length
                    ? ((this.$container = a),
                      this.$target.on("change", XF.proxy(this, "change")))
                    : console.error(
                          "Target element must have a .js-descTarget sibling"
                      );
            } else console.error("Element must have a data-desc-url value");
        },
        change: function() {
            this.changeTimer && clearTimeout(this.changeTimer);
            this.xhr && (this.xhr.abort(), (this.xhr = null));
            this.changeTimer = setTimeout(XF.proxy(this, "onTimer"), 200);
        },
        onTimer: function() {
            var a = this.$target.val();
            a
                ? (this.xhr = XF.ajax(
                      "post",
                      this.options.descUrl,
                      { id: a },
                      XF.proxy(this, "onLoad")
                  ))
                : this.$container.xfFadeUp(XF.config.speed.fast);
        },
        onLoad: function(a) {
            var b = this.$container;
            a.description
                ? XF.setupHtmlInsert(a.description, function(c, d, g) {
                      b.xfFadeUp(XF.config.speed.fast, function() {
                          b.html(c);
                          b.xfFadeDown(XF.config.speed.normal);
                      });
                  })
                : b.xfFadeUp(XF.config.speed.fast);
            this.xhr = null;
        }
    });
    XF.Disabler = XF.Element.newHandler({
        options: {
            container: "< li | ul, ol, dl",
            controls: "input, select, textarea, button, .js-attachmentUpload",
            hide: !1,
            instant: !1,
            optional: !1,
            invert: !1,
            autofocus: !0
        },
        $container: null,
        init: function() {
            this.$container = XF.findRelativeIf(
                this.options.container,
                this.$target
            );
            this.$container.length ||
                this.options.optional ||
                console.error("Could not find the disabler control container");
            var a = this.$target,
                b = a.closest("form");
            if (b.length) b.on("reset", XF.proxy(this, "formReset"));
            if (a.is(":radio")) {
                var c = b,
                    d = a.attr("name");
                b.length || (c = e(q.body));
                c.on(
                    "click",
                    'input:radio[name="' + d + '"]',
                    XF.proxy(this, "click")
                );
            } else if (a.is("option")) {
                var g = this;
                a.closest("select").on("change", function(f) {
                    f = e(this);
                    var h = XF.Element.getHandler(
                        f.find("option:selected").first(),
                        "disabler"
                    );
                    (!f
                        .find("option:selected")
                        .first()
                        .is(g.$target) &&
                        h &&
                        h.getOption("container") === g.options.container) ||
                        g.recalculate(!1);
                });
            } else a.click(XF.proxy(this, "click"));
            a.on(
                "control:enabled control:disabled",
                XF.proxy(this, "recalculateAfter")
            );
            this.$container.one(
                "editor:init",
                XF.proxy(this, "recalculateAfter")
            );
            this.recalculate(!0);
        },
        click: function(a, b) {
            this.recalculateAfter(!1, b && b.triggered);
        },
        formReset: function(a) {
            this.recalculateAfter(!1, !0);
        },
        recalculateAfter: function(a, b) {
            var c = this;
            setTimeout(function() {
                c.recalculate(a, b);
            }, 0);
        },
        recalculate: function(a, b) {
            var c = this.$container,
                d = this.$target,
                g = c.find(this.options.controls).not(d),
                f = a || this.options.instant ? 0 : XF.config.speed.fast,
                h = this,
                k = function() {
                    !b &&
                        h.options.autofocus &&
                        c
                            .find(
                                "input:not([type=hidden], [type=file]), textarea, select, button"
                            )
                            .not(d)
                            .first()
                            .autofocus();
                };
            d.is(":enabled") &&
            ((d.is(":checked") && !this.options.invert) ||
                (this.options.invert && !d.is(":checked")))
                ? (c.prop("disabled", !1).removeClass("is-disabled"),
                  g
                      .prop("disabled", !1)
                      .removeClass("is-disabled")
                      .each(function(m, l) {
                          m = e(l);
                          m.is("select.is-readonly") && m.prop("disabled", !0);
                      })
                      .trigger("control:enabled"),
                  this.options.hide
                      ? (a
                            ? c.show()
                            : c.slideDown(f, function() {
                                  XF.layoutChange();
                                  k();
                              }),
                        c.trigger("toggle:shown"),
                        XF.layoutChange())
                      : a || k())
                : (this.options.hide &&
                      (a ? c.hide() : c.slideUp(f, XF.layoutChange),
                      c.trigger("toggle:hidden"),
                      XF.layoutChange()),
                  c.prop("disabled", !0).addClass("is-disabled"),
                  g
                      .prop("disabled", !0)
                      .addClass("is-disabled")
                      .trigger("control:disabled")
                      .each(function(m, l) {
                          m = e(l);
                          l = m.data("disabled");
                          null !== l && "undefined" != typeof l && m.val(l);
                      }));
        }
    });
    XF.FieldAdder = XF.Element.newHandler({
        options: {
            incrementFormat: null,
            formatCaret: !0,
            removeClass: null,
            cloneInit: !1,
            remaining: -1
        },
        $clone: null,
        cloned: !1,
        created: !1,
        init: function() {
            this.$target
                .find("input:not(:checkbox), select, textarea")
                .each(function() {
                    var b = e(this);
                    b.is("select")
                        ? b.find("option").each(function() {
                              e(this).prop("selected", this.defaultSelected);
                          })
                        : b.val(
                              b.data("default-value") || this.defaultValue || ""
                          );
                });
            this.options.cloneInit && (this.$clone = this.$target.clone());
            var a = this;
            this.$target.on("keypress change paste input", function(b) {
                e(b.target).prop("readonly") ||
                    a.cloned ||
                    ((a.cloned = !0),
                    a.$clone || (a.$clone = a.$target.clone()),
                    a.$target.off(b),
                    a.create());
            });
        },
        create: function() {
            if (
                !this.created &&
                ((this.created = !0), 0 != this.options.remaining)
            ) {
                var a = this.options.incrementFormat,
                    b = this.options.formatCaret ? "^" : "";
                if (this.options.incrementFormat) {
                    var c = new RegExp(
                        b + XF.regexQuote(a).replace("\\{counter\\}", "(\\d+)")
                    );
                    this.$clone
                        .find("input, select, textarea")
                        .each(function() {
                            var d = e(this),
                                g = d.attr("name");
                            g = g.replace(c, function(f, h) {
                                return a.replace(
                                    "{counter}",
                                    parseInt(h, 10) + 1
                                );
                            });
                            d.attr("name", g);
                        });
                }
                0 < this.options.remaining &&
                    this.$clone.attr(
                        "data-remaining",
                        this.options.remaining - 1
                    );
                this.$clone.find("input, select, textarea").each(function() {
                    var d = e(this);
                    d.is("select")
                        ? d.find("option").each(function() {
                              e(this).prop("selected", this.defaultSelected);
                          })
                        : "string" === typeof this.defaultValue &&
                          d.val(this.defaultValue);
                });
                this.$clone.insertAfter(this.$target);
                this.options.removeClass &&
                    this.$target.removeClass(this.options.removeClass);
                XF.activate(this.$clone);
                XF.layoutChange();
            }
        }
    });
    XF.FormSubmitRow = XF.Element.newHandler({
        options: {
            container: ".block-container",
            fixedChild: ".formSubmitRow-main",
            stickyClass: "is-sticky",
            topOffset: 100,
            minWindowHeight: 281
        },
        $container: null,
        $fixedParent: null,
        $fixEl: null,
        fixElHeight: 0,
        winHeight: 0,
        containerTop: 0,
        containerBorderLeftWidth: 0,
        topOffset: 0,
        elBottom: 0,
        state: "normal",
        windowTooSmall: !1,
        init: function() {
            if (XF.config.enableFormSubmitSticky) {
                var a = this.$target,
                    b = a.closest(this.options.container);
                b.length
                    ? ((this.$container = b),
                      (this.topOffset = this.options.topOffset),
                      (this.$fixEl = a.find(this.options.fixedChild)),
                      e(p)
                          .on("scroll", XF.proxy(this, "onScroll"))
                          .on("resize", XF.proxy(this, "recalcAndUpdate")),
                      (b = XF.getFixedOffsetParent(a)),
                      b.is("html") ||
                          ((this.$fixedParent = b),
                          b.on("scroll", XF.proxy(this, "onScroll"))),
                      e(q.body).on(
                          "xf:layout",
                          XF.proxy(this, "recalcAndUpdate")
                      ),
                      a.height() ||
                          setTimeout(XF.proxy(this, "recalcAndUpdate"), 250),
                      this.recalcAndUpdate())
                    : console.error("Cannot float submit row, no container");
            }
        },
        recalc: function() {
            var a = this.$target;
            this.winHeight = e(p).height();
            this.elBottom = this.getTargetTop() + a.height();
            this.fixElHeight = this.$fixEl.height();
            this.containerTop = XF.getFixedOffset(this.$container).top;
            this.containerBorderLeftWidth = parseInt(
                this.$container.css("border-left-width"),
                10
            );
        },
        recalcAndUpdate: function() {
            this.state = "normal";
            this.resetTarget();
            this.recalc();
            this.update();
        },
        getTargetTop: function() {
            var a = this.$target.offset().top;
            return this.$fixedParent ? a - this.$fixedParent.offset().top : a;
        },
        getScrollTop: function() {
            return this.$fixedParent
                ? this.$fixedParent.scrollTop()
                : e(p).scrollTop();
        },
        update: function() {
            var a =
                XF.browser.ios || XF.browser.android
                    ? p.innerHeight
                    : this.winHeight;
            if (a < this.options.minWindowHeight)
                "normal" != this.state &&
                    (this.resetTarget(), (this.state = "normal"));
            else {
                var b = XF.NoticeWatcher.getBottomFixerNoticeHeight() || 0;
                0 < this.$container.closest(".overlay").length && (b = 0);
                a = this.getScrollTop() + a - b;
                if (a >= this.elBottom)
                    "normal" != this.state &&
                        (this.resetTarget(), (this.state = "normal"));
                else {
                    var c =
                        this.containerTop + this.topOffset + this.fixElHeight;
                    a <= c
                        ? c >= this.elBottom ||
                          "absolute" == this.state ||
                          ((a = this.$container.offset()),
                          "stuck" == this.state
                              ? ((b = this.$fixEl.parent()),
                                "static" == b.css("position") &&
                                    (b = b.offsetParent()))
                              : (b = this.$fixEl.offsetParent()),
                          (b = b.offset()),
                          this.$fixEl.css({
                              position: "absolute",
                              top: a.top - b.top + this.topOffset,
                              right: "auto",
                              bottom: "auto",
                              left:
                                  a.left -
                                  b.left +
                                  this.containerBorderLeftWidth,
                              width: this.$container.width()
                          }),
                          this.setTargetSticky(!0),
                          (this.state = "absolute"))
                        : "stuck" != this.state &&
                          ((a = this.$container.offset()),
                          this.$fixEl.css({
                              position: "",
                              top: "",
                              right: "",
                              bottom: b,
                              left: a.left + this.containerBorderLeftWidth,
                              width: this.$container.width()
                          }),
                          this.setTargetSticky(!0),
                          (this.state = "stuck"));
                }
            }
        },
        resetTarget: function() {
            this.$fixEl.css({
                position: "",
                top: "",
                right: "",
                bottom: "",
                left: "",
                width: ""
            });
            this.setTargetSticky(!1);
        },
        setTargetSticky: function(a) {
            this.$target
                .toggleClass(this.options.stickyClass, a)
                .css("height", this.$fixEl.height());
        },
        onScroll: function() {
            this.update();
        }
    });
    XF.GuestUsername = XF.Element.newHandler({
        init: function() {
            var a = this.$target;
            a.val(XF.LocalStorage.get("guestUsername"));
            a.on("keyup", XF.proxy(this, "change"));
        },
        change: function() {
            var a = this.$target;
            a.val().length
                ? XF.LocalStorage.set("guestUsername", a.val(), !0)
                : XF.LocalStorage.remove("guestUsername");
        }
    });
    XF.MinLength = XF.Element.newHandler({
        options: {
            minLength: 0,
            allowEmpty: !1,
            disableSubmit: !0,
            toggleTarget: null
        },
        met: null,
        $form: null,
        $toggleTarget: null,
        init: function() {
            var a = this;
            this.$form = this.$target.closest("form");
            this.$toggleTarget = this.options.toggleTarget
                ? XF.findRelativeIf(this.options.toggleTarget, this.$target)
                : e([]);
            this.$target.on("change keypress keydown paste", function() {
                setTimeout(XF.proxy(a, "checkLimits"), 0);
            });
            this.options.allowEmpty ||
                0 != this.options.minLength ||
                (this.options.minLength = 1);
            this.checkLimits();
        },
        checkLimits: function() {
            var a = e.trim(this.$target.val()).length,
                b = this.options;
            a = a >= b.minLength || (0 == a && b.allowEmpty);
            a !== this.met &&
                ((this.met = a)
                    ? (b.disableSubmit &&
                          this.$form
                              .find(":submit")
                              .prop("disabled", !1)
                              .removeClass("is-disabled"),
                      this.$toggleTarget.hide())
                    : (b.disableSubmit &&
                          this.$form
                              .find(":submit")
                              .prop("disabled", !0)
                              .addClass("is-disabled"),
                      this.$toggleTarget.show()));
        }
    });
    XF.TextAreaHandler = XF.Element.newHandler({
        options: { autoSize: !0, keySubmit: !0, singleLine: null },
        initialized: !1,
        init: function() {
            this.options.autoSize &&
                (this.$target[0].scrollHeight
                    ? this.setupAutoSize()
                    : (this.$target.one(
                          "focus control:enabled control:disabled",
                          XF.proxy(this, "setupDelayed")
                      ),
                      this.$target.onWithin(
                          "toggle:shown overlay:shown tab:shown quick-edit:shown",
                          XF.proxy(this, "setupDelayed")
                      )),
                this.$target.on("autosize", XF.proxy(this, "update")));
            if (this.options.keySubmit || this.options.singleLine)
                this.$target.on("keydown", XF.proxy(this, "keySubmit"));
        },
        setupAutoSize: function() {
            this.initialized ||
                ((this.initialized = !0),
                autosize(this.$target),
                this.$target.on("autosize:resized", function() {
                    XF.layoutChange();
                }));
        },
        setupDelayed: function() {
            if (this.initialized) this.update();
            else {
                var a = this,
                    b = function() {
                        a.setupAutoSize();
                        XF.layoutChange();
                    };
                this.$target[0].scrollHeight ? b() : setTimeout(b, 100);
            }
        },
        update: function() {
            this.initialized
                ? autosize.update(this.$target[0])
                : this.setupDelayed();
        },
        keySubmit: function(a) {
            if (
                "Enter" == a.key &&
                (this.options.singleLine ||
                    (this.options.keySubmit &&
                        (XF.isMac() ? a.metaKey : a.ctrlKey)))
            ) {
                switch (String(this.options.singleLine).toLowerCase()) {
                    case "next":
                        this.$target.focusNext();
                        break;
                    case "blur":
                        this.$target.blur();
                        break;
                    default:
                        this.$target.closest("form").submit();
                }
                a.preventDefault();
                return !1;
            }
        }
    });
    XF.TextEdit = XF.Event.newHandler({
        eventType: "focus",
        eventNameSpace: "XFTextEdit",
        options: { editUrl: null, escapeRevert: !0 },
        processing: !1,
        init: function() {
            null === this.options.editUrl
                ? console.warn("TextEdit must specify data-edit-url")
                : (this.options.escapeRevert &&
                      (this.$target.data("original-text", this.$target.val()),
                      this.$target.onPassive(
                          "keyup",
                          XF.proxy(this, "keyEscape")
                      )),
                  this.$target.on("change", XF.proxy(this, "save")));
        },
        focus: function(a) {},
        save: function(a) {
            if (!this.processing) {
                this.processing = !0;
                var b = this;
                a = {};
                a[this.$target.attr("name")] = this.$target.val();
                XF.ajax(
                    "POST",
                    this.options.editUrl,
                    a,
                    XF.proxy(this, "success")
                ).always(function() {
                    setTimeout(function() {
                        b.processing = !1;
                    }, 250);
                });
            }
        },
        success: function(a) {
            a = a[this.$target.attr("name")];
            this.$target.val(a).data("original-text", a);
        },
        keyEscape: function(a) {
            "Escape" == a.key &&
                this.$target.val(this.$target.data("original-text"));
        }
    });
    XF.PermissionMatrix = XF.Element.newHandler({
        options: {
            inputSelector: 'input[type="radio"]',
            parentSelector: "dl.formRow",
            classPrefix: "formRow--permissionType-",
            permissionType: "user"
        },
        values: ["allow", "unset", "deny", "content_allow", "reset"],
        currentClass: null,
        init: function() {
            this.$parentRow = this.$target.closest(this.options.parentSelector);
            this.$target
                .find(this.options.inputSelector)
                .on("click", XF.proxy(this, "update"));
            this.update();
        },
        update: function() {
            this.currentClass && this.$parentRow.removeClass(this.currentClass);
            var a = this.$target
                .find(this.options.inputSelector + ":checked")
                .val();
            -1 < e.inArray(a, this.values) &&
                ((this.currentClass =
                    this.options.classPrefix +
                    this.options.permissionType +
                    "-" +
                    a),
                this.$parentRow.addClass(this.currentClass));
        }
    });
    XF.MultiCheck = XF.Event.newHandler({
        eventNameSpace: "XFMultiCheck",
        options: { target: null, values: "allow,unset,deny" },
        $target: null,
        values: null,
        currentValue: null,
        init: function() {
            this.$target = e(this.options.target);
            this.values = this.options.values.split(",");
            var a = this.$target
                .filter(":checked")
                .first()
                .val();
            this.currentValue =
                0 < e.inArray(a, this.values)
                    ? this.values[-1]
                    : this.values[0];
        },
        click: function(a) {
            var b = this.values[e.inArray(this.currentValue, this.values) + 1];
            void 0 === b && (b = this.values[0]);
            this.$target.each(function() {
                e(this).val() == b &&
                    e(this)
                        .prop("checked", !0)
                        .trigger("click");
            });
            this.currentValue = b;
        }
    });
    XF.NumberBox = XF.Element.newHandler({
        options: {
            textInput: ".js-numberBoxTextInput",
            buttonSmaller: !1,
            step: null
        },
        $textInput: null,
        holdTimeout: null,
        holdInterval: null,
        init: function() {
            var a = this.$target,
                b = a.find(this.options.textInput);
            if (b.length) {
                this.$textInput = b;
                a.addClass("inputGroup--joined");
                var c = a.find(".js-up");
                a = a.find(".js-down");
                c.length || (c = this.createButton("up"));
                a.length || (a = this.createButton("down"));
                this.setupButton(c, b);
                this.setupButton(a, c);
                if (!this.supportsStepFunctions())
                    b.on("keydown", XF.proxy(this, "stepFallback"));
            } else console.error("Cannot initialize, no text input.");
        },
        createButton: function(a) {
            a = e("<button />")
                .attr("type", "button")
                .attr("tabindex", "-1")
                .addClass("inputGroup-text")
                .addClass("inputNumber-button")
                .addClass("inputNumber-button--" + a)
                .addClass("js-" + a)
                .attr("data-dir", a)
                .attr("title", XF.phrases["number_button_" + a] || a)
                .attr("aria-label", XF.phrases["number_button_" + a] || a);
            this.$textInput.prop("disabled") &&
                a.addClass("is-disabled").prop("disabled", !0);
            this.options.buttonSmaller &&
                a.addClass("inputNumber-button--smaller");
            return a;
        },
        setupButton: function(a, b) {
            a.on("focus", XF.proxy(this, "buttonFocus"))
                .on("click", XF.proxy(this, "buttonClick"))
                .on("mousedown touchstart", XF.proxy(this, "buttonMouseDown"))
                .on(
                    "mouseleave mouseup touchend",
                    XF.proxy(this, "buttonMouseUp")
                )
                .on("touchend", function(c) {
                    c.preventDefault();
                    e(this).click();
                })
                .insertAfter(b);
        },
        buttonFocus: function(a) {
            return !1;
        },
        buttonClick: function(a) {
            this.step(e(a.target).data("dir"));
        },
        step: function(a) {
            var b = this.$textInput,
                c = "step" + a.charAt(0).toUpperCase() + a.slice(1);
            if (!b.prop("readonly"))
                if (this.supportsStepFunctions())
                    try {
                        "" === b.val() && b.val(b.attr("min") || 0),
                            b[0][c](),
                            b.trigger("change").trigger("input");
                    } catch (d) {}
                else this.stepFallback(a);
        },
        stepFallback: function(a) {
            if (!this.$textInput.prop("readonly")) {
                if ("object" === typeof a && a.keyCode) {
                    var b = a;
                    switch (b.keyCode) {
                        case 38:
                            a = "up";
                            b.preventDefault();
                            break;
                        case 40:
                            a = "down";
                            b.preventDefault();
                            break;
                        default:
                            return;
                    }
                }
                b = this.$textInput;
                var c = b.val(),
                    d = "down" === a ? -1 : 1;
                a = b.attr("min") || null;
                var g = b.attr("max") || null,
                    f = this.options.step || b.attr("step") || 1,
                    h = "any" == f;
                h && (f = 1);
                f = parseFloat(f);
                d = parseFloat(c) + f * d;
                if (Math.round(d) !== d) {
                    var k = 0;
                    c = c.split(".");
                    h
                        ? (k = c[1] ? c[1].length : 0)
                        : Math.floor(f) !== f &&
                          (k = f.toString().split(".")[1].length || 0);
                    d = d.toFixed(k);
                }
                null !== a && d < a && (d = a);
                null !== g && d > g && (d = g);
                isNaN(d) && (d = 0);
                b.val(d);
                b.trigger("change").trigger("input");
            }
        },
        buttonMouseDown: function(a) {
            this.buttonMouseUp(a);
            this.holdTimeout = setTimeout(
                XF.proxy(function() {
                    this.holdInterval = setInterval(
                        XF.proxy(function() {
                            this.step(e(a.target).data("dir"));
                        }, this),
                        75
                    );
                }, this),
                500
            );
        },
        buttonMouseUp: function(a) {
            clearTimeout(this.holdTimeout);
            clearInterval(this.holdInterval);
        },
        supportsStepFunctions: function() {
            var a = this.$textInput;
            return XF.browser.msie ||
                XF.browser.edge ||
                a.prop("disabled") ||
                a.prop("readonly") ||
                this.$target.data("step") ||
                "any" === a.attr("step")
                ? !1
                : "function" === typeof a[0].stepUp &&
                      "function" === typeof a[0].stepDown;
        }
    });
    XF.PasswordHideShow = XF.Element.newHandler({
        options: { showText: null, hideText: null },
        $password: null,
        $checkbox: null,
        $label: null,
        init: function() {
            this.$password = this.$target.find(".js-password");
            var a = this.$target.find(".js-hideShowContainer");
            this.$checkbox = a.find('input[type="checkbox"]');
            this.$label = a.find(".iconic-label");
            this.$checkbox.on("change", XF.proxy(this, "toggle"));
        },
        toggle: function(a) {
            a = this.$password;
            var b = this.$label;
            this.$checkbox.is(":checked")
                ? (a.attr("type", "text"), b.html(this.options.hideText))
                : (a.attr("type", "password"), b.html(this.options.showText));
        }
    });
    XF.InputValidator = XF.Element.newHandler({
        options: {
            delay: 500,
            onBlur: !0,
            trim: !0,
            validateEmpty: !1,
            validationUrl: null,
            errorTarget: null
        },
        timeout: null,
        $errorElement: null,
        validatedValue: null,
        init: function() {
            if (this.options.validationUrl) {
                var a = this.options.errorTarget
                    ? XF.findRelativeIf(this.options.errorTarget, this.$target)
                    : this.$target.parent().find(".js-validationError");
                if (a.length) {
                    this.$errorElement = a;
                    if (this.options.delay)
                        this.$target.on("input", XF.proxy(this, "onInput"));
                    if (this.options.onBlur)
                        this.$target.on(
                            "blur",
                            XF.proxy(this, "performValidation")
                        );
                } else console.error("Unable to locate error element.");
            } else
                console.error("Element must have a data-validation-url value");
        },
        onInput: function(a) {
            this.timeout && clearTimeout(this.timeout);
            this.timeout = setTimeout(
                XF.proxy(this, "performValidation"),
                this.options.delay
            );
        },
        performValidation: function(a) {
            this.timeout && (clearTimeout(this.timeout), (this.timeout = null));
            a = this.getEffectiveInputValue();
            if (a !== this.validatedValue)
                if ("" !== a || this.options.validateEmpty)
                    (this.validatedValue = a),
                        XF.ajax(
                            "POST",
                            XF.canonicalizeUrl(this.options.validationUrl),
                            { field: this.$target.attr("name"), content: a },
                            XF.proxy(this, "handleResponse")
                        );
                else {
                    var b = this.$errorElement;
                    b.removeClassTransitioned("is-active", function() {
                        b.empty();
                    });
                }
        },
        getEffectiveInputValue: function() {
            var a = this.$target.val();
            this.options.trim && (a = e.trim(a));
            return a;
        },
        handleResponse: function(a) {
            if (
                !a.validatedValue ||
                a.validatedValue === this.getEffectiveInputValue()
            ) {
                var b = a.inputErrors;
                if (!a.inputValid && b) {
                    if ("object" == typeof b)
                        if (1 === b.length) var c = b[0];
                        else
                            (c = "<ul>"),
                                e.each(b, function(g, f) {
                                    c += "<li>" + f + "</li>";
                                }),
                                (c += "</ul>");
                    else c = b;
                    this.$errorElement
                        .html(c)
                        .addClassTransitioned("is-active");
                } else {
                    a.inputValid ||
                        console.error("Data is not valid, but no errors");
                    var d = this.$errorElement;
                    d.removeClassTransitioned("is-active", function() {
                        d.empty();
                    });
                }
            }
        }
    });
    XF.CheckboxSelectDisabler = XF.Element.newHandler({
        options: { select: null },
        $selects: null,
        $checkboxes: null,
        init: function() {
            (this.$selects = XF.findRelativeIf(
                this.options.select,
                this.$target
            )) && this.$selects.length
                ? ((this.$checkboxes = this.$target
                      .find(":checkbox")
                      .on("click", XF.proxy(this, "update"))),
                  this.update())
                : console.warn(
                      "No select element(s) found using %s",
                      this.options.select
                  );
        },
        update: function() {
            var a = this.$selects,
                b = [];
            this.$checkboxes.each(function() {
                var c = this.checked;
                a.find('option[value="' + this.value + '"]').each(function() {
                    var d = e(this),
                        g = d.is(":selected"),
                        f = d.prop("disabled"),
                        h = d.closest("select"),
                        k = !1;
                    f === c && (d.prop("disabled", !c), (k = !0));
                    !c &&
                        g &&
                        (d.prop("selected", !1),
                        h.attr("multiple") ||
                            h
                                .find("option:enabled")
                                .first()
                                .prop("selected", !0),
                        (k = !0));
                    k && b.push(h[0]);
                });
            });
            b.length && e(e.uniqueSort(b)).trigger("select:refresh");
        }
    });
    XF.focusNext = function(a) {
        !a instanceof e && (a = e(a));
        var b = e("a, button, :input, [tabindex]");
        a = b.index(a) + 1;
        b.eq(a >= b.length ? 0 : a).focus();
    };
    XF.AssetUpload = XF.Element.newHandler({
        options: { asset: "" },
        $path: null,
        $upload: null,
        init: function() {
            this.$path = this.$target.find(".js-assetPath");
            this.$upload = this.$target.find(".js-uploadAsset");
            this.$upload.on("change", XF.proxy(this, "changeFile"));
        },
        changeFile: function(a) {
            if ("" != e(a.target).val()) {
                var b = new FormData();
                b.append("upload", a.target.files[0]);
                b.append("type", this.options.asset);
                XF.ajax(
                    "post",
                    XF.canonicalizeUrl("admin.php?assets/upload"),
                    b,
                    XF.proxy(this, "ajaxResponse")
                );
            }
        },
        ajaxResponse: function(a) {
            a.errors ||
                a.exception ||
                (a.path && this.$path.val(a.path), this.$upload.val(""));
        }
    });
    XF.Event.register("click", "submit", "XF.SubmitClick");
    XF.Event.register("click", "multi-check", "XF.MultiCheck");
    XF.Event.register("focus", "text-edit", "XF.TextEdit");
    XF.Element.register("ajax-submit", "XF.AjaxSubmit");
    XF.Element.register("auto-complete", "XF.AutoComplete");
    XF.Element.register("user-mentioner", "XF.UserMentioner");
    XF.Element.register("emoji-completer", "XF.EmojiCompleter");
    XF.Element.register("auto-submit", "XF.AutoSubmit");
    XF.Element.register("changed-field-notifier", "XF.ChangedFieldNotifier");
    XF.Element.register("check-all", "XF.CheckAll");
    XF.Element.register("select-plus", "XF.SelectPlus");
    XF.Element.register("desc-loader", "XF.DescLoader");
    XF.Element.register("disabler", "XF.Disabler");
    XF.Element.register("field-adder", "XF.FieldAdder");
    XF.Element.register("form-submit-row", "XF.FormSubmitRow");
    XF.Element.register("guest-username", "XF.GuestUsername");
    XF.Element.register("min-length", "XF.MinLength");
    XF.Element.register("textarea-handler", "XF.TextAreaHandler");
    XF.Element.register("permission-matrix", "XF.PermissionMatrix");
    XF.Element.register("number-box", "XF.NumberBox");
    XF.Element.register(
        "checkbox-select-disabler",
        "XF.CheckboxSelectDisabler"
    );
    XF.Element.register("password-hide-show", "XF.PasswordHideShow");
    XF.Element.register("change-submit", "XF.ChangeSubmit");
    XF.Element.register("input-validator", "XF.InputValidator");
    XF.Element.register("asset-upload", "XF.AssetUpload");
})(jQuery, window, document);

("use strict");
!(function(f, m, q) {
    XF._baseInserterOptions = {
        after: null,
        append: null,
        before: null,
        prepend: null,
        replace: null,
        removeOldSelector: !0,
        animateReplace: !0,
        scrollTarget: null,
        href: null,
        afterLoad: null
    };
    XF.InserterClick = XF.Event.newHandler({
        eventNameSpace: "XFInserterClick",
        options: f.extend(!0, {}, XF._baseInserterOptions),
        inserter: null,
        init: function() {
            this.inserter = new XF.Inserter(this.$target, this.options);
        },
        click: function(a) {
            this.inserter.onEvent(a);
        }
    });
    XF.InserterFocus = XF.Element.newHandler({
        options: f.extend(!0, {}, XF._baseInserterOptions),
        inserter: null,
        init: function() {
            this.inserter = new XF.Inserter(this.$target, this.options);
            this.$target.one("focus", XF.proxy(this.inserter, "onEvent"));
        }
    });
    XF.Inserter = XF.create({
        options: f.extend(!0, {}, XF._baseInserterOptions),
        $target: null,
        href: null,
        loading: !1,
        __construct: function(a, b) {
            this.$target = a;
            this.options = f.extend(!0, {}, this.options, b);
            (a =
                this.options.href ||
                this.$target.data("inserter-href") ||
                this.$target.attr("href"))
                ? (this.href = a)
                : console.error("Target must have href");
        },
        onEvent: function(a, b) {
            a.preventDefault();
            if (!this.loading) {
                this.loading = !0;
                a = f(this.options.replace);
                a.length && a.addClassTransitioned("is-active");
                var c = this;
                XF.ajax(
                    "get",
                    this.href,
                    b || {},
                    XF.proxy(this, "onLoad")
                ).always(function() {
                    c.loading = !1;
                });
            }
        },
        onLoad: function(a) {
            if (a.html) {
                var b = this,
                    c = this.options,
                    d = c.scrollTarget,
                    e = c.afterLoad,
                    g;
                d && (g = XF.findRelativeIf(d, this.$target));
                XF.setupHtmlInsert(a.html, function(h, k, l) {
                    b._applyChange(h, c.after, XF.proxy(b, "_applyAfter"));
                    b._applyChange(h, c.append, XF.proxy(b, "_applyAppend"));
                    b._applyChange(h, c.before, XF.proxy(b, "_applyBefore"));
                    b._applyChange(h, c.prepend, XF.proxy(b, "_applyPrepend"));
                    b._applyChange(h, c.replace, XF.proxy(b, "_applyReplace"));
                    l(!0);
                    e && e(a);
                    return !1;
                });
                XF.layoutChange();
                g && g.length && g[0].scrollIntoView(!0);
            }
        },
        _applyChange: function(a, b, c) {
            if (b && b.length) {
                b = b.split(",");
                for (var d, e, g, h = 0; h < b.length; h++)
                    (d = b[h].split(" with ")),
                        (e = f.trim(d[0])),
                        (g = d[1] ? f.trim(d[1]) : e),
                        e.length &&
                            g.length &&
                            ((d = f(e).first()),
                            (g = a.is(g) ? a : a.find(g).first()),
                            c(e, d, g));
            }
        },
        _applyAfter: function(a, b, c) {
            b.length &&
                c.length &&
                (c.insertAfter(b),
                XF.activate(c),
                this._removeOldSelector(a, b));
        },
        _applyAppend: function(a, b, c) {
            b.length &&
                c.length &&
                ((a = c.children()), a.appendTo(b), XF.activate(a));
        },
        _applyBefore: function(a, b, c) {
            b.length &&
                c.length &&
                (c.insertBefore(b),
                XF.activate(c),
                this._removeOldSelector(a, b));
        },
        _applyPrepend: function(a, b, c) {
            b.length &&
                c.length &&
                ((a = c.children()), a.prependTo(b), XF.activate(a));
        },
        _applyReplace: function(a, b, c) {
            b.length &&
                ((a = this.options.animateReplace),
                XF.isIOS() && (a = !1),
                c.length && (a && c.hide(), c.insertAfter(b)),
                a
                    ? b.xfFadeUp(null, function() {
                          b.remove();
                          c.length && XF.activate(c);
                          c.xfFadeDown(null, XF.layoutChange);
                      })
                    : (b.remove(), c.length && XF.activate(c)));
        },
        _removeOldSelector: function(a, b) {
            if (this.options.removeOldSelector) {
                var c;
                (c = a.match(/^\.([a-z0-9_-]+)/i)) && b.removeClass(c[1]);
            }
        }
    });
    XF.MenuClick = XF.Event.newHandler({
        eventNameSpace: "XFMenuClick",
        options: {
            menu: null,
            targetOpenClass: "is-menuOpen",
            openClass: "is-active",
            completeClass: "is-complete",
            zIndexRef: null,
            menuPosRef: null,
            arrowPosRef: null,
            directionThreshold: 0.6
        },
        $menu: null,
        $menuPosRef: null,
        menuRef: null,
        $arrowPosRef: null,
        arrowRef: null,
        scrollFunction: null,
        isPotentiallyFixed: !1,
        menuIsUp: !1,
        menuWidth: 0,
        menuHeight: 0,
        init: function() {
            this.options.menu &&
                (this.$menu = XF.findRelativeIf(
                    this.options.menu,
                    this.$target
                ));
            (this.$menu && this.$menu.length) ||
                (this.$menu = this.$target.nextAll("[data-menu]").first());
            if (this.$menu.length) {
                this.$arrowPosRef = this.$menuPosRef = this.$target;
                if (this.options.menuPosRef) {
                    var a = XF.findRelativeIf(
                        this.options.menuPosRef,
                        this.$target
                    );
                    if (
                        a.length &&
                        ((this.$menuPosRef = a), this.options.arrowPosRef)
                    ) {
                        var b = XF.findRelativeIf(
                            this.options.arrowPosRef,
                            this.$target
                        );
                        b.closest(a).length && (this.$arrowPosRef = b);
                    }
                }
                this.$target.attr("aria-controls", this.$menu.xfUniqueId());
                this.$menu.find(".menu-arrow").length ||
                    this.$menu.prepend('<span class="menu-arrow" />');
                var c = this;
                this.$menu
                    .data("menu-trigger", this)
                    .on("click", "[data-menu-closer]", function() {
                        c.close();
                    })
                    .on({
                        "menu:open": function() {
                            c.open(XF.Feature?.has("touchevents"));
                        },
                        "menu:close": function() {
                            c.close();
                        },
                        "menu:reposition": function() {
                            c.isOpen() && c.reposition();
                        },
                        keydown: XF.proxy(this, "keyboardEvent")
                    });
                a = this.$menu.closest(".tooltip");
                if (a.length) a.on("tooltip:hidden", XF.proxy(this, "close"));
                if ((a = this.$menu.data("menu-builder")))
                    if (XF.MenuBuilder[a])
                        XF.MenuBuilder[a](this.$menu, this.$target, this);
                    else console.error("No menu builder " + a + " found");
            } else console.error("No menu found for %o", this.$target[0]);
        },
        click: function(a) {
            if (
                !(a.ctrlKey || a.shiftKey || a.altKey) ||
                !this.$target.attr("href")
            ) {
                var b = XF.isEventTouchTriggered(a),
                    c = !0;
                !b && this.isOpen() && (c = !1);
                c && a.preventDefault();
                this.toggle(b, XF.NavDeviceWatcher.isKeyboardNav());
            }
        },
        isOpen: function() {
            return this.$target.hasClass(this.options.targetOpenClass);
        },
        toggle: function(a) {
            this.isOpen() ? this.close() : this.open(a);
        },
        open: function(a) {
            var b = this.$menu,
                c = this.$target,
                d = this.$menuPosRef,
                e = 0;
            if (!this.isOpen() && !b.hasClass("is-disabled")) {
                b.appendTo("body");
                this.updateMenuDimensions();
                this.updatePositionReferences();
                var g = this;
                this.$target.hasFixableParent() &&
                    ((this.scrollFunction = function() {
                        c.is(":hidden") ? g.close() : g.repositionFixed(!0);
                    }),
                    b.addClass("menu--potentialFixed"),
                    f(m).onPassive("scroll", this.scrollFunction));
                if (this.options.zIndexRef) {
                    var h = XF.findRelativeIf(this.options.zIndexRef, c);
                    h.length && (e = XF.getElEffectiveZIndex(h));
                }
                XF.setRelativeZIndex(b, c, 0, e);
                XF.MenuWatcher.onOpen(b, a);
                this.reposition();
                c.attr("aria-expanded", "true").addClassTransitioned(
                    this.options.targetOpenClass
                );
                b.attr("aria-hidden", "false").addClassTransitioned(
                    this.options.openClass,
                    XF.proxy(function() {
                        b.addClassTransitioned(this.options.completeClass);
                    }, this)
                );
                d.addClassTransitioned(this.options.targetOpenClass);
                this.$target.trigger("menu:opened", [b]);
                b.trigger("menu:opened");
                if (!XF.isIOS() || !this.isPotentiallyFixed)
                    b.on("menu:complete", function() {
                        setTimeout(function() {
                            XF.autoFocusWithin(
                                b,
                                "[autofocus], [data-menu-autofocus]"
                            );
                        }, 10);
                    });
                if (b.data("href")) {
                    if (!b.data("menu-loading")) {
                        b.data("menu-loading", !0);
                        var k = b.data("nocache") ? !1 : !0;
                        XF.ajax(
                            "get",
                            b.data("href"),
                            {},
                            function(l) {
                                k && b.data("href", !1);
                                l.html &&
                                    XF.setupHtmlInsert(l.html, function(
                                        n,
                                        p,
                                        r
                                    ) {
                                        (p = b.data("load-target"))
                                            ? b
                                                  .find(p)
                                                  .first()
                                                  .empty()
                                                  .html(n)
                                            : b.html(n);
                                        g.$target.trigger("menu:loaded", [
                                            n,
                                            b
                                        ]);
                                        g.updateMenuDimensions();
                                        r();
                                        setTimeout(
                                            XF.proxy(g, "reposition"),
                                            0
                                        );
                                        g.$target.trigger("menu:complete", [b]);
                                        b.trigger("menu:complete");
                                    });
                            },
                            { cache: k }
                        ).always(function() {
                            b.data("menu-loading", !1);
                        });
                    }
                } else
                    this.$target.trigger("menu:complete", [b]),
                        b.trigger("menu:complete");
            }
        },
        reposition: function(a, b) {
            if (!this.$menu.data("ios-scroll-timeout") || a) {
                this.updatePositionReferences();
                this.$menu.css({
                    visibility: "hidden",
                    display: "block",
                    position: "",
                    top: "",
                    bottom: "",
                    left: "",
                    right: ""
                });
                a = f(m).viewport();
                var c = {};
                c = this.getHorizontalPosition(a, c);
                c = this.getVerticalPosition(a, c, b);
                c.display = "";
                c.visibility = "";
                this.$menu.css(c);
            }
        },
        repositionFixed: function(a) {
            var b = this.$menu;
            if (a && XF.isIOS()) {
                a = b.data("ios-scroll-timeout");
                var c = this;
                clearTimeout(a);
                a = setTimeout(function() {
                    b.removeData("ios-scroll-timeout");
                    c.reposition();
                }, 300);
                b.data("ios-scroll-timeout", a);
            } else {
                this.updatePositionReferences();
                var d = this.$target.data("menu-h");
                a = b.data("menu-reset-timer");
                if (
                    d &&
                    this.menuRef.left == d[0] &&
                    this.menuRef.width == d[1]
                ) {
                    d = f(m).viewport();
                    var e = this.$target.hasFixedParent()
                            ? "fixed"
                            : "absolute",
                        g = { top: parseInt(b.css("top"), 10) };
                    this.menuIsUp = this.$menu.hasClass("menu--up");
                    a && clearTimeout(a);
                    "fixed" == e && e != b.css("position")
                        ? ((g = {
                              "transition-property": "none",
                              "transition-duration": "0s"
                          }),
                          (g = this.getVerticalFixedPosition(d, g)))
                        : "absolute" == e &&
                          ((g = {
                              "transition-property": "none",
                              "transition-duration": "0s"
                          }),
                          (g = this.getVerticalAbsolutePosition(d, g)));
                    b.css(g).toggleClass("menu--up", this.menuIsUp);
                    a = setTimeout(function() {
                        b.css({
                            "transition-property": "",
                            "transition-duration": ""
                        });
                    }, 250);
                    b.data("menu-reset-timer", a);
                } else this.reposition();
            }
        },
        getHorizontalPosition: function(a, b) {
            var c = !1,
                d = 0;
            this.menuWidth > a.width
                ? (d = this.menuRef.left - a.left)
                : this.menuRef.left + this.menuRef.width / 2 >
                  a.width * this.options.directionThreshold
                ? ((d = 0 - this.menuWidth + this.menuRef.width), (c = !0))
                : this.menuRef.width > this.menuWidth &&
                  (d = Math.floor((this.menuRef.width - this.menuWidth) / 2));
            d = Math.min(d, a.right - this.menuWidth - this.menuRef.left - 5);
            d = Math.max(d, a.left - this.menuRef.left + 5);
            b.left = this.menuRef.left + d;
            this.$target.data("menu-h", [
                this.menuRef.left,
                this.menuRef.width,
                d
            ]);
            this.$menu
                .toggleClass("menu--left", !c)
                .toggleClass("menu--right", c);
            a = Math.min(
                this.arrowRef.left -
                    this.menuRef.left +
                    this.arrowRef.width / 2 -
                    d,
                this.menuWidth - 20
            );
            this.$menu.find(".menu-arrow").css({ top: "", left: a });
            return b;
        },
        getVerticalPosition: function(a, b, c) {
            this.menuIsUp = !1;
            b =
                !c && this.$target.hasFixedParent()
                    ? this.getVerticalFixedPosition(a, b)
                    : this.getVerticalAbsolutePosition(a, b);
            this.$menu.toggleClass("menu--up", this.menuIsUp);
            return b;
        },
        getVerticalFixedPosition: function(a, b) {
            b.top =
                Math.max(0, Math.round(this.menuRef.bottom) - a.top) -
                this.getTopShift();
            b.position = "fixed";
            b.top + this.menuHeight + a.top > a.bottom &&
            this.menuRef.top - this.menuHeight > a.top
                ? ((b.top = ""),
                  (b.bottom = a.bottom - this.menuRef.top + 5),
                  (this.menuIsUp = !0))
                : (this.menuIsUp = !1);
            return b;
        },
        getVerticalAbsolutePosition: function(a, b) {
            b.top = this.menuRef.bottom - this.getTopShift();
            b.position = "";
            b.top + this.menuHeight > a.bottom &&
            this.menuRef.top - this.menuHeight > a.top
                ? ((b.top = ""),
                  (b.bottom = a.height - this.menuRef.top + 5),
                  (this.menuIsUp = !0))
                : (this.menuIsUp = !1);
            return b;
        },
        getTopShift: function() {
            return this.$menu.hasClass("menu--structural")
                ? parseInt(XF.config.borderSizeFeature, 10)
                : 0;
        },
        updateMenuDimensions: function() {
            this.menuWidth = this.$menu.outerWidth(!0);
            this.menuHeight = this.$menu.outerHeight(!0);
            return { menuWidth: this.menuWidth, menuHeight: this.menuHeight };
        },
        updatePositionReferences: function() {
            this.menuRef = this.$menuPosRef.dimensions(!0);
            this.arrowRef =
                this.$arrowPosRef == this.$menuPosRef
                    ? this.menuRef
                    : this.$arrowPosRef.dimensions(!0);
            return { menuRef: this.menuRef, arrowRef: this.arrowRef };
        },
        close: function() {
            if (this.isOpen()) {
                var a = this.$menu;
                this.$target
                    .attr("aria-expanded", "false")
                    .removeClassTransitioned(this.options.targetOpenClass);
                a.attr("aria-hidden", "true")
                    .removeClass(this.options.completeClass)
                    .removeClassTransitioned(this.options.openClass);
                this.$menuPosRef.removeClassTransitioned(
                    this.options.targetOpenClass
                );
                f(m).offPassive("scroll", this.scrollFunction);
                XF.MenuWatcher.onClose(a);
                this.$target.trigger("menu:closed", [a]);
                a.trigger("menu:closed");
            }
        },
        keyboardEvent: function(a) {
            if (
                ("ArrowUp" == a.key || "ArrowDown" == a.key) &&
                XF.Keyboard.isShortcutAllowed(q.activeElement) &&
                f(q.activeElement)
                    .closest(".menu")
                    .get(0) == this.$menu.get(0)
            ) {
                var b = f(q.activeElement),
                    c = b.closest(".menu").find("a");
                b = c.index(b) + ("ArrowUp" == a.key ? -1 : 1);
                0 > b ? (b = c.length - 1) : b >= c.length && (b = 0);
                f(c.get(b)).focus();
                a.preventDefault();
                return !1;
            }
        }
    });
    XF.MenuWatcher = (function() {
        var a = f([]),
            b = null,
            c = !1,
            d = !1,
            e = function(k) {
                d || h(k.target);
            },
            g = function(k) {
                a.trigger("menu:reposition");
            },
            h = function(k) {
                if (!c) {
                    c = !0;
                    var l = f(k);
                    a.each(function() {
                        var n = f(this).data("menu-trigger"),
                            p = n ? n.$target : null;
                        l.closest(this).length ||
                            (p && l.closest(p).length) ||
                            (n && n.close());
                    });
                    c = !1;
                }
            };
        return {
            onOpen: function(k, l) {
                b ||
                    (b = f('<div class="menuOutsideClicker" />')
                        .on("click", e)
                        .insertBefore(k));
                a.length ||
                    (f(q).on("click", e),
                    f(m).onPassive("resize", g),
                    l && b.addClass("is-active"));
                a = a.add(k);
            },
            onClose: function(k) {
                a = a.not(k);
                a.length ||
                    (f(q).off("click", e),
                    f(m).offPassive("resize", g),
                    b && b.removeClass("is-active"));
                h(k);
            },
            closeAll: function() {
                c = !0;
                a.trigger("menu:close");
                c = !1;
            },
            closeUnrelated: h,
            preventDocClick: function() {
                d = !0;
            },
            allowDocClick: function() {
                d = !1;
            }
        };
    })();
    XF.MenuBuilder = {
        actionBar: function(a, b, c) {
            var d = a.find(".js-menuBuilderTarget");
            b.closest(".actionBar-set")
                .find(".actionBar-action--menuItem")
                .each(function() {
                    var e = f(this).clone();
                    e.removeClass().addClass("menu-linkRow");
                    d.append(e);
                });
            XF.activate(d);
        },
        dataList: function(a, b, c) {
            var d = a.find(".js-menuBuilderTarget");
            b.closest(".dataList-row")
                .find(".dataList-cell--responsiveMenuItem")
                .each(function() {
                    f(this)
                        .clone()
                        .children()
                        .each(function() {
                            var e = f(this);
                            e.is("a")
                                ? e.removeClass().addClass("menu-linkRow")
                                : e.wrap('<div class="menu-row"></div>');
                            d.append(e);
                        });
                });
            XF.activate(d);
        }
    };
    XF.MenuProxy = XF.Event.newHandler({
        eventNameSpace: "XFMenuProxy",
        options: { trigger: null },
        $trigger: null,
        init: function() {
            this.$trigger = XF.findRelativeIf(
                this.options.trigger,
                this.$target
            );
            if (!this.$trigger || !this.$trigger.length)
                throw Error("Specified menu trigger not found");
        },
        click: function(a) {
            setTimeout(
                XF.proxy(function() {
                    this.$trigger.trigger("click", [a]);
                }, this),
                0
            );
        }
    });
    XF.OffCanvasClick = XF.Event.newHandler({
        eventNameSpace: "XFOffCanvasClick",
        options: { menu: null, openClass: "is-active" },
        $menu: null,
        init: function() {
            this.options.menu &&
                (this.$menu = XF.findRelativeIf(
                    this.options.menu,
                    this.$target
                ));
            (this.$menu && this.$menu.length) ||
                (this.$menu = this.$target.nextAll("[data-menu]").first());
            if (this.$menu.length) {
                this.$menu
                    .on(
                        "click",
                        "[data-menu-close]",
                        XF.proxy(this, "closeTrigger")
                    )
                    .on("off-canvas:close", XF.proxy(this, "closeTrigger"))
                    .on("off-canvas:open", XF.proxy(this, "openTrigger"));
                var a = this.$menu.data("ocm-builder");
                if (a)
                    if (XF.OffCanvasBuilder[a])
                        XF.OffCanvasBuilder[a](this.$menu, this);
                    else console.error("No off canvas builder " + a + " found");
            } else console.error("No menu found for %o", this.$target[0]);
        },
        click: function(a) {
            a.preventDefault();
            this.toggle();
        },
        isOpen: function() {
            return this.$menu.hasClass(this.options.openClass);
        },
        toggle: function() {
            this.isOpen() ? this.close() : this.open();
        },
        openTrigger: function(a) {
            a.preventDefault();
            this.open();
        },
        open: function() {
            if (!this.isOpen()) {
                var a = this.$menu;
                this.addOcmClasses(a);
                a.attr("aria-hidden", "false").trigger("off-canvas:opening");
                a.addClassTransitioned(this.options.openClass, function() {
                    a.trigger("off-canvas:opened");
                });
                XF.Modal.open();
            }
        },
        addOcmClasses: function(a) {
            var b = a.attr("data-ocm-class");
            b && a.addClass(b);
            a.find("[data-ocm-class]").each(function() {
                var c = f(this);
                c.addClass(c.attr("data-ocm-class"));
            });
        },
        removeOcmClasses: function(a) {
            var b = a.attr("data-ocm-class");
            b && a.removeClass(b);
            a.find("[data-ocm-class]").each(function() {
                var c = f(this);
                c.removeClass(c.attr("data-ocm-class"));
            });
        },
        closeTrigger: function(a, b) {
            a.preventDefault();
            this.close(b && b.instant);
        },
        close: function(a) {
            if (this.isOpen()) {
                var b = this.$menu,
                    c = this;
                b.attr("aria-hidden", "true").trigger("off-canvas:closing");
                b.removeClassTransitioned(
                    this.options.openClass,
                    function() {
                        b.trigger("off-canvas:closed");
                        c.removeOcmClasses(b);
                    },
                    a
                );
                XF.Modal.close();
            }
        }
    });
    XF.OffCanvasBuilder = {
        navigation: function(a, b) {
            a.appendTo("body");
            var c = f('<ul class="offCanvasMenu-list" />');
            f(".js-offCanvasNavSource .p-navEl").each(function() {
                var d = f(this),
                    e = d.hasClass("is-selected"),
                    g = d.find(".p-navEl-link"),
                    h = d.find("[data-menu]");
                d.data("has-children") &&
                    !h.length &&
                    (d = d
                        .find('[data-xf-click~="menu"]')
                        .first()
                        .data("xf-click-handlers")) &&
                    d.menu &&
                    (h = d.menu.$menu);
                if (g.length) {
                    d = f('<div class="offCanvasMenu-linkHolder" />');
                    var k = g.clone();
                    g = f("<li />");
                    k.removeClass(
                        "p-navEl-link p-navEl-link--menuTrigger p-navEl-link--splitMenu"
                    ).addClass("offCanvasMenu-link");
                    !k.is("a") &&
                        h.length &&
                        k
                            .attr("data-xf-click", "menu-proxy")
                            .attr(
                                "data-trigger",
                                "< :up | .offCanvasMenu-link--splitToggle"
                            );
                    d.html(k);
                    e && (g.addClass("is-selected"), d.addClass("is-selected"));
                    g.html(d);
                    if (h.length) {
                        k = f(
                            '<a class="offCanvasMenu-link offCanvasMenu-link--splitToggle" data-xf-click="toggle" data-target="< :up :next" role="button" tabindex="0" />'
                        );
                        e && k.addClass("is-active");
                        d.append(k);
                        var l = f('<ul class="offCanvasMenu-subList" />');
                        e && l.addClass("is-active");
                        h.find(".menu-linkRow").each(function() {
                            var n = f(this),
                                p = f("<li />");
                            p.html(
                                n
                                    .clone()
                                    .removeClass("menu-linkRow")
                                    .addClass("offCanvasMenu-link")
                            );
                            l.append(p);
                        });
                        g.append(l);
                    }
                    c.append(g);
                }
            });
            a = a.find(".js-offCanvasNavTarget").append(c);
            XF.activate(a);
        },
        sideNav: function(a, b) {
            var c = a.find(".offCanvasMenu-content"),
                d = b.$target;
            c.find("[data-menu-close]").length ||
                ((b = c.find(".block-header").first()),
                b.length ||
                    ((b = f(
                        '<div class="offCanvasMenu-header offCanvasMenu-header--separated offCanvasMenu-shown" />'
                    )),
                    b.html(d.html()),
                    c.prepend(b)),
                b.append(
                    '<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" />'
                ));
            f(m).onPassive("resize", function() {
                d.is(":visible") || a.trigger("off-canvas:close");
            });
        },
        simple: function(a, b) {
            a.appendTo("body");
            var c = f('<ul class="offCanvasMenu-list" />'),
                d = a.data("ocm-link-remove-class");
            f(a.data("ocm-link-target")).each(function() {
                var e = f(this),
                    g = f('<div class="offCanvasMenu-linkHolder" />');
                e = e.clone().addClass("offCanvasMenu-link");
                var h = f("<li />");
                d && e.removeClass(d);
                g.html(e);
                h.html(g);
                c.append(h);
            });
            a = a.find(".js-offCanvasTarget").append(c);
            XF.activate(a);
        }
    };
    XF.OverlayClick = XF.Event.newHandler({
        eventNameSpace: "XFOverlayClick",
        options: {
            cache: !0,
            overlayConfig: {},
            forceFlashMessage: !1,
            followRedirects: !1,
            closeMenus: !0
        },
        overlay: null,
        loadUrl: null,
        loading: !1,
        visible: !1,
        init: function() {
            var a = this.getOverlayHtml();
            if (a)
                this.setupOverlay(
                    new XF.Overlay(a, this.options.overlayConfig)
                );
            else {
                a = this.getLoadUrl();
                if (!a) throw Error("Could not find an overlay for target");
                this.loadUrl = a;
            }
            this.options.closeMenus && XF.MenuWatcher.closeAll();
        },
        click: function(a) {
            a.preventDefault();
            this.toggle();
        },
        toggle: function() {
            this.overlay ? this.overlay.toggle() : this.show();
        },
        show: function() {
            if (this.overlay) this.overlay.show();
            else if (!this.loading) {
                this.loading = !0;
                var a = this,
                    b = {
                        cache: this.options.cache,
                        beforeShow: function(c) {
                            a.overlay = c;
                        },
                        init: XF.proxy(this, "setupOverlay")
                    };
                this.options.followRedirects &&
                    (b.onRedirect = function(c, d) {
                        a.options.forceFlashMessage
                            ? XF.flashMessage(c.message, 1e3, function() {
                                  XF.redirect(c.redirect);
                              })
                            : XF.redirect(c.redirect);
                    });
                (b = XF.loadOverlay(
                    this.loadUrl,
                    b,
                    this.options.overlayConfig
                ))
                    ? b.always(function() {
                          setTimeout(function() {
                              a.loading = !1;
                          }, 300);
                      })
                    : (this.loading = !1);
            }
        },
        hide: function() {
            this.overlay && this.overlay.hide();
        },
        getOverlayHtml: function() {
            var a = this.$target,
                b = a.data("target");
            if (b) {
                var c = a.find(b).eq(0);
                c.length || (c = f(b).eq(0));
            }
            (c && c.length) ||
                ((a = a.attr("href")) &&
                    "#" == a.substr(0, 1) &&
                    (c = f(a).eq(0)));
            c && c.length && !c.is(".overlay") && (c = XF.getOverlayHtml(c));
            return c && c.length ? c : null;
        },
        getLoadUrl: function() {
            var a = this.$target;
            return a.data("href") || a.attr("href") || null;
        },
        setupOverlay: function(a) {
            this.overlay = a;
            var b = this;
            a.on({
                "overlay:shown": function() {
                    b.visible = !0;
                },
                "overlay:hidden": function() {
                    b.visible = !1;
                }
            });
            if (!this.options.cache && this.loadUrl)
                a.on("overlay:hidden", function() {
                    b.overlay = null;
                });
            return this.overlay;
        }
    });
    XF.OverlayClick.overlayCache = {};
    XF.ToggleClick = XF.Event.newHandler({
        eventNameSpace: "XFToggleClick",
        options: {
            target: null,
            container: null,
            hide: null,
            activeClass: "is-active",
            activateParent: null,
            scrollTo: null
        },
        $toggleTarget: null,
        $toggleParent: null,
        toggleUrl: null,
        ajaxLoaded: !1,
        loading: !1,
        init: function() {
            this.$toggleTarget = XF.getToggleTarget(
                this.options.target,
                this.$target
            );
            if (!this.$toggleTarget) return !1;
            this.options.activateParent &&
                (this.$toggleParent = this.$target.parent());
            this.toggleUrl = this.getToggleUrl();
        },
        click: function(a) {
            a.preventDefault();
            this.$toggleTarget && this.toggle();
        },
        isVisible: function() {
            return this.$toggleTarget.hasClass(this.options.activeClass);
        },
        isTransitioning: function() {
            return this.$toggleTarget.hasClass("is-transitioning");
        },
        toggle: function() {
            this.isVisible() ? this.hide() : this.show();
            this.$target.blur();
        },
        load: function() {
            var a = this.toggleUrl,
                b = this;
            a &&
                !this.loading &&
                ((this.loading = !0),
                XF.ajax("get", a, function(c) {
                    c.html &&
                        XF.setupHtmlInsert(c.html, function(d, e, g) {
                            if ((e = b.$toggleTarget.data("load-selector")))
                                (e = d.find(e).first()), e.length && (d = e);
                            b.ajaxLoaded = !0;
                            b.$toggleTarget.append(d);
                            XF.activate(d);
                            g(!0);
                            b.show();
                            return !1;
                        });
                }).always(function() {
                    b.ajaxLoaded = !0;
                    b.loading = !1;
                }));
        },
        hide: function(a) {
            if (this.isVisible() && !this.isTransitioning()) {
                var b = this.options.activeClass;
                this.$toggleParent &&
                    this.$toggleParent.removeClassTransitioned(
                        b,
                        this.inactiveTransitionComplete,
                        a
                    );
                this.$toggleTarget &&
                    this.$toggleTarget.removeClassTransitioned(
                        b,
                        this.inactiveTransitionComplete,
                        a
                    );
                this.$target.removeClassTransitioned(
                    b,
                    this.inactiveTransitionComplete,
                    a
                );
            }
        },
        show: function(a) {
            if (
                !this.isVisible() &&
                !this.isTransitioning() &&
                !this.getOtherToggles().filter(".is-transitioning").length
            )
                if (this.toggleUrl && !this.ajaxLoaded) this.load();
                else {
                    this.closeOthers();
                    var b = this.options.activeClass;
                    this.$toggleParent &&
                        this.$toggleParent.addClassTransitioned(
                            b,
                            this.activeTransitionComplete,
                            a
                        );
                    this.$toggleTarget &&
                        this.$toggleTarget.addClassTransitioned(
                            b,
                            this.activeTransitionComplete,
                            a
                        );
                    this.$target.addClassTransitioned(
                        b,
                        this.activeTransitionComplete,
                        a
                    );
                    this.hideSpecified();
                    this.scrollTo();
                    XF.autoFocusWithin(
                        this.$toggleTarget,
                        "[autofocus], [data-toggle-autofocus]"
                    );
                }
        },
        activeTransitionComplete: function(a) {
            f(this).trigger("toggle:shown");
            XF.layoutChange();
        },
        inactiveTransitionComplete: function(a) {
            f(this).trigger("toggle:hidden");
            XF.layoutChange();
        },
        closeOthers: function() {
            this.getOtherToggles().each(function() {
                var a = f(this).data("xf-click-handlers");
                a || (a = XF.Event.initElement(this, "click"));
                a && a.toggle && a.toggle.hide(!0);
            });
        },
        hideSpecified: function() {
            var a = f(this.options.hide);
            a && a.length && a.hide();
        },
        scrollTo: function() {
            if (this.options.scrollTo) {
                var a = this.$toggleTarget,
                    b = a.offset().top;
                a = a.height();
                var c = f(m).height();
                XF.smoothScroll(a < c ? b - (c / 2 - a / 2) : b);
            }
        },
        getToggleUrl: function() {
            var a = this.$toggleTarget,
                b;
            return a && (b = a.data("href"))
                ? "trigger-href" == b
                    ? this.$target.attr("href")
                    : b
                : null;
        },
        getContainer: function() {
            if (this.options.container) {
                var a = this.$target.closest(this.options.container);
                if (a.length) return a;
                console.error(
                    "Container parent not found: " + this.options.container
                );
            }
            return null;
        },
        getOtherToggles: function() {
            var a = this.getContainer();
            return a && a.length
                ? a.find("[data-xf-click~=toggle]").not(this.$target[0])
                : f([]);
        }
    });
    XF.getToggleTarget = function(a, b) {
        a = a ? XF.findRelativeIf(a, b) : b.next();
        if (!a.length) throw Error("No toggle target for %o", b);
        return a;
    };
    XF.ToggleStorage = XF.Element.newHandler({
        options: {
            storageType: "local",
            storageContainer: "toggle",
            storageKey: null,
            storageExpiry: 86400,
            target: null,
            container: null,
            hide: null,
            activeClass: "is-active",
            activateParent: null
        },
        targetId: null,
        storage: null,
        init: function() {
            var a = this.options.storageContainer;
            if (!a)
                throw Error(
                    "Storage container not specified for ToggleStorage handler"
                );
            var b = this.options.storageKey;
            if (!b)
                throw Error(
                    "Storage key not specified for ToggleStorage handler"
                );
            this.storage = XF.ToggleStorageData.getInstance(
                this.options.storageType
            );
            if (!this.storage)
                throw Error("Invalid storage type " + this.options.storageType);
            b = this.storage.get(a, b, { allowExpired: !1, touch: !1 });
            if (null !== b) {
                var c = XF.getToggleTarget(this.options.target, this.$target);
                if (c.length) {
                    var d = this.options.activeClass;
                    this.$target.toggleClass(d, b);
                    c.toggleClass(d, b);
                }
            }
            this.storage.prune(a);
            this.$target.on(
                "xf-click:after-click.XFToggleClick",
                XF.proxy(this, "updateStorage")
            );
        },
        updateStorage: function() {
            var a = this.options;
            this.storage.set(
                a.storageContainer,
                a.storageKey,
                this.$target.hasClass(a.activeClass),
                a.storageExpiry
            );
        }
    });
    XF.ToggleStorageDataInstance = XF.create({
        storage: null,
        dataCache: {},
        syncTimers: {},
        pruneTimers: {},
        __construct: function(a) {
            this.storage = a;
        },
        getStorage: function() {
            return this.storage;
        },
        get: function(a, b, c) {
            c || (c = {});
            var d = !0,
                e = !0;
            c.hasOwnProperty("allowExpired") && (d = c.allowExpired);
            c.hasOwnProperty("touch") && (e = c.touch);
            this.dataCache[a] || (this.dataCache[a] = this.storage.getJson(a));
            c = this.dataCache[a];
            if (!c.hasOwnProperty(b)) return null;
            c = c[b];
            var g = Math.floor(Date.now() / 1e3);
            if (!d && c[0] + c[1] < g)
                return delete this.dataCache[a][b], this.scheduleSync(a), null;
            e && ((c[0] = g), (this.dataCache[a][b] = c), this.scheduleSync(a));
            return c[2];
        },
        set: function(a, b, c, d) {
            this.dataCache[a] || (this.dataCache[a] = {});
            d || (d = 14400);
            var e = Math.floor(Date.now() / 1e3);
            this.dataCache[a][b] = [e, d, c];
            this.scheduleSync(a);
        },
        remove: function(a, b) {
            this.dataCache[a] || (this.dataCache[a] = {});
            delete this.dataCache[a][b];
            this.scheduleSync(a);
        },
        prune: function(a, b) {
            var c = this.pruneTimers[a],
                d = this,
                e = function() {
                    clearTimeout(c);
                    d.pruneTimers[a] = null;
                    d.pruneInternal(a);
                };
            b ? e() : c || (this.pruneTimers[a] = setTimeout(e, 100));
        },
        pruneInternal: function(a) {
            this.dataCache[a] || (this.dataCache[a] = this.storage.getJson(a));
            var b = this.dataCache[a],
                c = Math.floor(Date.now() / 1e3),
                d = !1,
                e;
            for (e in b)
                if (b.hasOwnProperty(e)) {
                    var g = b[e];
                    g[0] + g[1] < c && (delete b[e], (d = !0));
                }
            d && ((this.dataCache[a] = b), this.scheduleSync(a));
        },
        scheduleSync: function(a, b) {
            var c = this.syncTimers[a],
                d = this,
                e = function() {
                    clearTimeout(c);
                    d.syncTimers[a] = null;
                    d.syncToStorage(a);
                };
            b ? e() : c || (d.syncTimers[a] = setTimeout(e, 100));
        },
        syncToStorage: function(a) {
            if (this.dataCache[a]) {
                var b = this.dataCache[a];
                if (f.isEmptyObject(b)) this.storage.remove(a);
                else if (this.storage.supportsExpiryDate()) {
                    var c = XF.getFutureDate(1, "year");
                    this.storage.setJson(a, b, c);
                } else this.storage.setJson(a, b);
            }
        }
    });
    XF.ToggleStorageData = (function() {
        var a = {
                local: new XF.ToggleStorageDataInstance(XF.LocalStorage),
                cookie: new XF.ToggleStorageDataInstance(XF.Cookie)
            },
            b = a.local;
        return {
            getInstance: function(c) {
                return a[c];
            },
            get: function(c, d, e) {
                return b.get(c, d, e);
            },
            set: function(c, d, e, g) {
                return b.set(c, d, e, g);
            },
            remove: function(c, d) {
                return b.remove(c, d);
            },
            prune: function(c, d) {
                return b.prune(c, d);
            }
        };
    })();
    XF.ToggleClassClick = XF.Event.newHandler({
        eventNameSpace: "XFToggleClassClick",
        options: { class: null },
        init: function() {},
        click: function(a) {
            this.options.class && this.toggle();
        },
        toggle: function() {
            this.$target.toggleClass(this.options.class);
        }
    });
    XF.HScroller = XF.Element.newHandler({
        options: {
            scrollerClass: "hScroller-scroll",
            actionClass: "hScroller-action",
            autoScroll: ".tabs-tab.is-active"
        },
        $scrollTarget: null,
        $goStart: null,
        $goEnd: null,
        init: function() {
            var a = this.$target.find("." + this.options.scrollerClass).first();
            if (a.length) {
                this.$scrollTarget = a;
                var b,
                    c,
                    d = this;
                a.on("mousedown.horizontalScroller", function(l) {
                    l.button ||
                        ((b = l.clientX),
                        (c = !1),
                        l.preventDefault(),
                        XF.isEventTouchTriggered(l) &&
                            ((l = f(q.activeElement)),
                            l.is(":input") && l.blur()),
                        f(m)
                            .on("mouseup.horizontalScroller", function(n) {
                                f(m).off(".horizontalScroller");
                                c && n.preventDefault();
                            })
                            .on("mousemove.horizontalScroller", function(n) {
                                var p = b - n.clientX;
                                0 != p &&
                                    (d.move(p) && (c = !0), (b = n.clientX));
                            }));
                })
                    .on("click.horizontalScroller", function(l) {
                        c &&
                            (l.preventDefault(),
                            l.stopImmediatePropagation(),
                            (c = !1));
                    })
                    .on(
                        "scroll.horizontalScroller",
                        XF.proxy(this, "updateScroll")
                    )
                    .on("tab:click.horizontalScroller", function(l) {
                        c && l.preventDefault();
                    });
                var e = XF.measureScrollBar(null, "height");
                a.addClass("is-calculated");
                0 != e &&
                    a.css(
                        "margin-bottom",
                        parseInt(a.css("margin-bottom"), 10) - e + "px"
                    );
                e = this.options.actionClass;
                this.$goStart = f(
                    '<i class="' +
                        e +
                        " " +
                        e +
                        '--start" aria-hidden="true" />'
                )
                    .click(function() {
                        d.step(-1);
                    })
                    .insertAfter(a);
                this.$goEnd = f(
                    '<i class="' + e + " " + e + '--end" aria-hidden="true" />'
                )
                    .click(function() {
                        d.step(1);
                    })
                    .insertAfter(a);
                this.updateScroll();
                f(q.body).on("xf:layout", XF.proxy(this, "updateScroll"));
                var g;
                f(m).on("resize", function() {
                    g && clearTimeout(g);
                    g = setTimeout(XF.proxy(d, "updateScroll"), 100);
                });
                var h = a.find(this.options.autoScroll).first();
                if (h.length) {
                    e = this.$target.width();
                    var k = h.position();
                    h = h.outerWidth();
                    k = k.left;
                    h = k + h;
                    XF.isRtl()
                        ? 80 > k && a.normalizedScrollLeft(-h + e - 50)
                        : h > e &&
                          (h + 80 > e
                              ? a.normalizedScrollLeft(k - 50)
                              : a.normalizedScrollLeft(k - 80));
                }
            } else console.error("no scroll target");
        },
        scrollToStart: function() {
            this.scrollTo(0);
        },
        scrollToEnd: function() {
            this.scrollTo(this.$scrollTarget[0].scrollWidth);
        },
        scrollTo: function(a) {
            this.$scrollTarget.animate({ scrollLeft: a }, 150);
        },
        move: function(a) {
            var b = this.$scrollTarget,
                c = b.normalizedScrollLeft();
            XF.isRtl() && (a *= -1);
            b.normalizedScrollLeft(c + a);
            return b.normalizedScrollLeft() !== c;
        },
        step: function(a) {
            var b = Math.max(
                    125,
                    Math.floor(0.25 * this.$scrollTarget.width())
                ),
                c = "+=";
            switch (f.support.scrollLeftType) {
                case "inverted":
                case "negative":
                    c = "-=";
            }
            this.scrollTo(c + a * b);
        },
        updateScroll: function() {
            var a = this.$scrollTarget[0],
                b = this.$scrollTarget.normalizedScrollLeft();
            a = a.offsetWidth + b + 1 < a.scrollWidth;
            this.$goStart[0 < b ? "addClass" : "removeClass"]("is-active");
            this.$goEnd[a ? "addClass" : "removeClass"]("is-active");
        }
    });
    XF.ResponsiveDataList = XF.Element.newHandler({
        options: {
            headerRow: ".dataList-row--header",
            headerCells: "th, td",
            rows:
                ".dataList-row:not(.dataList-row--subSection, .dataList-row--header)",
            rowCells: "td",
            triggerWidth: "narrow"
        },
        $headerRow: null,
        headerText: [],
        $rows: null,
        isResponsive: !1,
        init: function() {
            var a = this.$target.find(this.options.headerRow).first(),
                b = [];
            a.find(this.options.headerCells).each(function() {
                var c = f(this),
                    d = c.text();
                c = parseInt(c.attr("colspan"), 10);
                b.push(f.trim(d));
                if (1 < c) for (d = 1; d < c; d++) b.push("");
            });
            this.$headerRow = a;
            this.headerText = b;
            this.$rows = this.$target.find(this.options.rows);
            this.process();
            f(q).on("breakpoint:change", XF.proxy(this, "process"));
        },
        process: function() {
            var a = XF.Breakpoint.isAtOrNarrowerThan(this.options.triggerWidth);
            (a && this.isResponsive) ||
                (!a && !this.isResponsive) ||
                (a ? this.apply() : this.remove());
        },
        apply: function() {
            var a = this;
            this.$rows.each(function() {
                a.processRow(f(this), !0);
            });
            this.$target.addClass("dataList--responsive");
            this.$headerRow.addClass("dataList-row--headerResponsive");
            this.isResponsive = !0;
        },
        remove: function() {
            var a = this;
            this.$rows.each(function() {
                a.processRow(f(this), !1);
            });
            this.$target.removeClass("dataList--responsive");
            this.$headerRow.removeClass("dataList-row--headerResponsive");
            this.isResponsive = !1;
        },
        processRow: function(a, b) {
            var c = 0,
                d = this.headerText;
            a.find(this.options.rowCells).each(function() {
                var e = f(this);
                if (b) {
                    var g = d[c];
                    g && g.length && !e.data("hide-label")
                        ? e.attr("data-cell-label", g)
                        : e.removeAttr("data-cell-label");
                } else e.removeAttr("data-cell-label");
                c++;
            });
        }
    });
    XF.Sticky = XF.Element.newHandler({
        options: {
            parent: null,
            inner_scrolling: !0,
            sticky_class: "is-sticky",
            offset_top: null,
            spacer: null,
            bottoming: null,
            recalc_every: null
        },
        init: function() {
            "false" == this.options.spacer && (this.options.spacer = !1);
            this.$target.stick_in_parent(this.options);
        }
    });
    XF.StickyHeader = XF.Element.newHandler({
        options: {
            stickyClass: "is-sticky",
            stickyBrokenClass: "is-sticky-broken",
            stickyDisabledClass: "is-sticky-disabled",
            minWindowHeight: 251
        },
        active: null,
        supportsSticky: !1,
        stickyBroken: !1,
        windowTooSmall: !1,
        init: function() {
            var a = this.$target.css("position");
            a = "sticky" == a || "-webkit-sticky" == a;
            var b = !1;
            if (a) {
                var c = m.navigator.userAgent,
                    d = c.match(/Chrome\/(\d+)/);
                d && 60 > parseInt(d[1], 10) && ((b = !0), (a = !1));
                (d = c.match(/ Edge\/(\d+)/)) &&
                    17 <= parseInt(d[1], 10) &&
                    XF.isRtl() &&
                    ((b = !0), (a = !1));
            }
            this.supportsSticky = a;
            this.stickyBroken = b;
            this.update();
            f(m).on("resize.sticky-header", XF.proxy(this, "update"));
            XF.StickyHeader.cache.push(this);
        },
        update: function() {
            (this.windowTooSmall = f(m).height() < this.options.minWindowHeight)
                ? !1 !== this.active && this._disable()
                : this.active || this._enable();
        },
        _enable: function() {
            this.active = !0;
            var a = this.$target,
                b = this.options.stickyClass,
                c = this.options.stickyBrokenClass;
            a.removeClass(this.options.stickyDisabledClass);
            if (this.supportsSticky) {
                var d = !1,
                    e = parseInt(a.css("top"), 10),
                    g = XF.isIOS(),
                    h,
                    k = function(l) {
                        var n = Math.floor(a[0].getBoundingClientRect().top);
                        n < e || (n == e && 0 < m.scrollY)
                            ? d || (a.addClass(b), XF.layoutChange(), (d = !0))
                            : d &&
                              (g && l
                                  ? (clearTimeout(h),
                                    (h = setTimeout(function() {
                                        k(!1);
                                    }, 200)))
                                  : (a.removeClass(b),
                                    XF.layoutChange(),
                                    (d = !1)));
                    };
                f(m).on("scroll.sticky-header", function() {
                    k(!0);
                });
                k(!1);
            } else
                this.stickyBroken &&
                    setTimeout(function() {
                        a.addClass(c);
                    }, 0),
                    a.stick_in_parent({ sticky_class: b });
        },
        _disable: function() {
            this.active = !1;
            var a = this.$target,
                b = this.options.stickyClass,
                c = this.options.stickyBrokenClass,
                d = this.options.stickyDisabledClass;
            this.supportsSticky
                ? f(m).off("scroll.sticky-header")
                : a.trigger("sticky_kit:detach").removeData("sticky_kit");
            a.removeClass(b)
                .removeClass(c)
                .addClass(d);
        }
    });
    XF.StickyHeader.cache = [];
    XF.Tabs = XF.Element.newHandler({
        options: {
            tabs: ".tabs-tab",
            panes: null,
            activeClass: "is-active",
            state: null,
            preventDefault: !0
        },
        initial: 0,
        $tabs: null,
        $panes: null,
        $activeTab: null,
        $activePane: null,
        init: function() {
            var a = this.$target;
            var b = (this.$tabs = a.find(this.options.tabs));
            a = this.options.panes
                ? XF.findRelativeIf(this.options.panes, a)
                : a.next();
            a.is("ol, ul") && (a = a.find("> li"));
            this.$panes = a;
            if (b.length != a.length)
                console.error(
                    "Tabs and panes contain different totals: %d tabs, %d panes",
                    b.length,
                    a.length
                ),
                    console.error("Tabs: %o, Panes: %o", b, a);
            else {
                for (a = 0; a < b.length; a++)
                    if (b.eq(a).hasClass(this.options.activeClass)) {
                        this.initial = a;
                        break;
                    }
                b.on("click", XF.proxy(this, "tabClick"));
                f(m).on("hashchange", XF.proxy(this, "onHashChange"));
                f(m).on("popstate", XF.proxy(this, "onPopState"));
                this.reactToHash();
            }
        },
        getSelectorFromHash: function() {
            var a = "";
            if (1 < m.location.hash.length) {
                var b = m.location.hash.replace(/[^a-zA-Z0-9_-]/g, "");
                b && b.length && (a = "#" + b);
            }
            return a;
        },
        reactToHash: function() {
            var a = this.getSelectorFromHash();
            a ? this.activateTarget(a) : this.activateTab(this.initial);
        },
        onHashChange: function(a) {
            this.reactToHash();
        },
        onPopState: function(a) {
            (a = a.originalEvent.state) && a.id
                ? this.activateTarget("#" + a.id, !1)
                : a && a.offset
                ? this.activateTab(a.offset)
                : this.activateTab(this.initial);
        },
        activateTarget: function(a) {
            var b = this.$tabs,
                c = !1,
                d = !1;
            if (a) {
                try {
                    var e = f(a);
                    c = e && 0 < e.length;
                } catch (g) {
                    c = !1;
                }
                if (c)
                    for (c = 0; c < b.length; c++)
                        b.eq(c).is(a) && (this.activateTab(c), (d = !0));
            }
            d || this.activateTab(this.initial);
        },
        activateTab: function(a) {
            var b = this.$tabs.eq(a),
                c = this.$panes.eq(a),
                d = this.options.activeClass;
            b.length && c.length
                ? (this.$tabs
                      .filter("." + d)
                      .removeClass(d)
                      .attr("aria-selected", "false")
                      .trigger("tab:hidden"),
                  this.$panes
                      .filter("." + d)
                      .removeClass(d)
                      .attr("aria-expanded", "false")
                      .trigger("tab:hidden"),
                  b
                      .addClass(d)
                      .attr("aria-selected", "true")
                      .trigger("tab:shown"),
                  c
                      .addClass(d)
                      .attr("aria-expanded", "true")
                      .trigger("tab:shown"),
                  XF.layoutChange(),
                  c.data("href") &&
                      !c.data("tab-loading") &&
                      (c.data("tab-loading", !0),
                      XF.ajax("get", c.data("href"), {}, function(e) {
                          c.data("href", !1);
                          if (e.html) {
                              var g = c.data("load-target"),
                                  h = c.data("source-selector");
                              h && (e.html.content = f(e.html.content).find(h));
                              g
                                  ? XF.setupHtmlInsert(e.html, c.find(g))
                                  : XF.setupHtmlInsert(e.html, c);
                          }
                      }).always(function() {
                          c.data("tab-loading", !1);
                      })))
                : console.error("Selected invalid tab " + a);
        },
        tabClick: function(a) {
            var b = a.currentTarget,
                c = this.$tabs.index(b);
            if (-1 == c)
                console.error("Did not find clicked element (%o) in tabs", b);
            else {
                b = this.$tabs.eq(c);
                var d = f.Event("tab:click");
                b.trigger(d, this);
                if (!d.isDefaultPrevented()) {
                    this.options.preventDefault && a.preventDefault();
                    if (this.options.state)
                        switch (
                            ((a = m.location.href.split("#")[0]),
                            b.attr("id")
                                ? ((a = a + "#" + b.attr("id")),
                                  (b = { id: b.attr("id") }))
                                : (b = { offset: c }),
                            this.options.state)
                        ) {
                            case "replace":
                                m.history.replaceState(b, "", a);
                                break;
                            case "push":
                                m.history.pushState(b, "", a);
                        }
                    this.activateTab(c);
                }
            }
        }
    });
    XF.PageJump = XF.Element.newHandler({
        options: {
            pageUrl: null,
            pageInput: "| .js-pageJumpPage",
            pageSubmit: "| .js-pageJumpGo",
            sentinel: "%page%"
        },
        $input: null,
        init: function() {
            var a = this;
            this.options.pageUrl
                ? ((this.$input = XF.findRelativeIf(
                      this.options.pageInput,
                      this.$target
                  )),
                  this.$input.length
                      ? (this.$input.on("keyup", function(b) {
                            "Enter" == b.key && (b.preventDefault(), a.go());
                        }),
                        XF.findRelativeIf(
                            this.options.pageSubmit,
                            this.$target
                        ).on("click", function(b) {
                            b.preventDefault();
                            a.go();
                        }),
                        this.$target
                            .closest(".menu")
                            .on("menu:opened", function() {
                                a.shown();
                            }))
                      : console.error("No input provided to page jump"))
                : console.error("No page-url provided to page jump");
        },
        shown: function() {
            this.$input.select();
        },
        go: function() {
            var a = parseInt(this.$input.val(), 10);
            if (isNaN(a) || 1 > a) a = 1;
            var b = this.options.pageUrl,
                c = this.options.sentinel,
                d = b.replace(c, a);
            d == b && (d = b.replace(encodeURIComponent(c), a));
            XF.redirect(d);
        }
    });
    XF.QuickSearch = XF.Element.newHandler({
        options: { select: "| .js-quickSearch-constraint" },
        $select: null,
        init: function() {
            this.$select = XF.findRelativeIf(this.options.select, this.$target);
            this.$select.on("change", XF.proxy(this, "updateSelectWidth"));
            this.updateSelectWidth();
        },
        updateSelectWidth: function() {
            if (this.$select.length) {
                var a = f("<span />")
                        .addClass(this.$select.attr("class"))
                        .addClass("input--select"),
                    b = this.$select.find("option:selected");
                b.length || (b = this.$select.find("option").first());
                a.text(b.text());
                a.css("display", "inline");
                b = f("<div />");
                b.css({
                    position: "absolute",
                    top: -200,
                    visibility: "hidden"
                });
                b.css(XF.isRtl() ? "right" : "left", -9999);
                a.appendTo(b);
                b.appendTo("body");
                this.$select.css({
                    width: a.outerWidth() + 8,
                    "flex-grow": 0,
                    "flex-shrink": 0
                });
                b.remove();
            }
        }
    });
    XF.TouchProxy = XF.Element.newHandler({
        options: {
            allowed:
                ":input, :checkbox, a, label, [data-tp-clickable], [data-tp-primary]"
        },
        active: !0,
        timer: null,
        $proxy: null,
        init: function() {
            var a = this;
            if (
                "InputDeviceCapabilities" in m ||
                "sourceCapabilities" in UIEvent.prototype
            )
                this.$target.click(function(c) {
                    var d = c.originalEvent;
                    d &&
                        d.sourceCapabilities &&
                        d.sourceCapabilities.firesTouchEvents &&
                        a.handleTapEvent(c);
                });
            else if (XF.Feature.has("touchevents")) {
                var b = !1;
                this.$target
                    .on("touchstart", function() {
                        b = !1;
                    })
                    .on("touchmove", function() {
                        b = !0;
                    })
                    .on("touchend", function(c) {
                        b || a.handleTapEvent(c);
                    });
            }
        },
        isClickable: function(a) {
            a = f(a).closest(this.options.allowed);
            return !(!a.length || !this.$target.find(a).length);
        },
        handleTapEvent: function(a) {
            this.getProxy().length &&
                this.active &&
                !this.isClickable(a.target) &&
                (a.preventDefault(), this.trigger());
        },
        getProxy: function() {
            if (!this.$proxy) {
                var a = this.$target.find("[data-tp-primary]").first();
                a.length || (a = this.$target.find("a[href]").first());
                this.$proxy = a;
            }
            return this.$proxy;
        },
        trigger: function(a) {
            a = this.getProxy();
            if (a.length) {
                this.timer && clearTimeout(this.timer);
                this.active = !1;
                a[0].click ? a[0].click() : a.click();
                var b = this;
                this.timer = setTimeout(function() {
                    b.active = !0;
                }, 500);
            }
        }
    });
    XF.ShifterClick = XF.Event.newHandler({
        eventNameSpace: "XFShifterClick",
        options: { selector: null, dir: "up" },
        $element: null,
        init: function() {
            this.$element = this.$target.closest(this.options.selector);
        },
        click: function(a) {
            "down" == this.options.dir
                ? this.$element.insertAfter(this.$element.next())
                : this.$element.insertBefore(this.$element.prev());
        }
    });
    XF.VideoInit = XF.Element.newHandler({
        options: {},
        video: null,
        loaded: !1,
        init: function() {
            XF.isIOS() &&
                ((this.video = this.$target[0].cloneNode(!0)),
                this.video.load(),
                this.video.addEventListener(
                    "loadeddata",
                    XF.proxy(this, "hasLoaded")
                ),
                this.video.addEventListener(
                    "seeked",
                    XF.proxy(this, "hasSeeked")
                ));
        },
        hasLoaded: function() {
            this.loaded || ((this.loaded = !0), (this.video.currentTime = 0));
        },
        hasSeeked: function() {
            var a = f("<canvas />")[0],
                b = this.$target.width(),
                c = this.$target.height(),
                d = a.getContext("2d");
            a.width = b;
            a.height = c;
            d.drawImage(this.video, 0, 0, b, c);
            if (a) {
                var e = this;
                a.toBlob(function(g) {
                    g &&
                        ((g = URL.createObjectURL(g)),
                        e.$target.attr("poster", g));
                });
            }
        }
    });
    XF.RemoverClick = XF.Event.newHandler({
        eventNameSpace: "XFRemoverClick",
        options: { selector: null },
        $targetElement: null,
        init: function() {
            this.$targetElement = XF.findRelativeIf(
                this.options.selector,
                this.$target
            );
        },
        click: function(a) {
            this.$targetElement.length &&
                (this.$targetElement.remove(), XF.layoutChange());
        }
    });
    XF.DuplicatorClick = XF.Event.newHandler({
        eventNameSpace: "XFDuplicatorClick",
        options: { selector: null },
        $targetElement: null,
        init: function() {
            this.$targetElement = XF.findRelativeIf(
                this.options.selector,
                this.$target
            );
        },
        click: function(a) {
            this.$targetElement.length &&
                ((a = this.$targetElement
                    .clone(!0)
                    .insertAfter(this.$targetElement)),
                XF.layoutChange(),
                this.$targetElement.closest("[data-xf-init~=list-sorter]")
                    .length && f(m).trigger("listSorterDuplication", a));
        }
    });
    XF.Event.register("click", "inserter", "XF.InserterClick");
    XF.Event.register("click", "menu", "XF.MenuClick");
    XF.Event.register("click", "menu-proxy", "XF.MenuProxy");
    XF.Event.register("click", "off-canvas", "XF.OffCanvasClick");
    XF.Event.register("click", "overlay", "XF.OverlayClick");
    XF.Event.register("click", "toggle", "XF.ToggleClick");
    XF.Event.register("click", "toggle-class", "XF.ToggleClassClick");
    XF.Event.register("click", "shifter", "XF.ShifterClick");
    XF.Event.register("click", "remover", "XF.RemoverClick");
    XF.Event.register("click", "duplicator", "XF.DuplicatorClick");
    XF.Element.register("focus-inserter", "XF.InserterFocus");
    XF.Element.register("h-scroller", "XF.HScroller");
    XF.Element.register("page-jump", "XF.PageJump");
    XF.Element.register("quick-search", "XF.QuickSearch");
    XF.Element.register("responsive-data-list", "XF.ResponsiveDataList");
    XF.Element.register("sticky", "XF.Sticky");
    XF.Element.register("sticky-header", "XF.StickyHeader");
    XF.Element.register("tabs", "XF.Tabs");
    XF.Element.register("toggle-storage", "XF.ToggleStorage");
    XF.Element.register("touch-proxy", "XF.TouchProxy");
    XF.Element.register("video-init", "XF.VideoInit");
    f(q).on("xf:page-load-complete", function() {
        var a = m.location.hash.replace(/[^a-zA-Z0-9_-]/g, "");
        a &&
            ((a = a ? f("#" + a) : f()),
            a.length &&
                ((a = a.closest("[data-toggle-wrapper]")),
                a.length &&
                    ((a = a.find('[data-xf-click~="toggle"]').first()),
                    a.length &&
                        (a = XF.Event.getElementHandler(
                            a,
                            "toggle",
                            "click"
                        )) &&
                        a.show(!0))));
    });
})(jQuery, window, document);

("use strict");
!(function(f, m, p) {
    XF.TooltipElement = XF.create({
        options: {
            baseClass: "tooltip",
            extraClass: "tooltip--basic",
            html: !1,
            inViewport: !0,
            loadRequired: !1,
            loadParams: null,
            placement: "top"
        },
        content: null,
        $tooltip: null,
        shown: !1,
        shownFully: !1,
        placement: null,
        positioner: null,
        loadRequired: !1,
        loading: !1,
        contentApplied: !1,
        setupCallbacks: null,
        __construct: function(a, b, c) {
            this.setupCallbacks = [];
            this.options = f.extend(!0, {}, this.options, b);
            this.content = a;
            this.loadRequired = this.options.loadRequired;
            c && this.setPositioner(c);
        },
        setPositioner: function(a) {
            this.positioner = a;
        },
        setLoadRequired: function(a) {
            this.loadRequired = a;
        },
        addSetupCallback: function(a) {
            this.$tooltip ? a(this.$tooltip) : this.setupCallbacks.push(a);
        },
        show: function() {
            if (!this.shown)
                if (((this.shown = !0), this.loadRequired)) this.loadContent();
                else {
                    var a = this.getTooltip(),
                        b = this;
                    this.reposition();
                    f(m).on(
                        "resize.tooltip-" + a.xfUniqueId(),
                        XF.proxy(this, "reposition")
                    );
                    a.trigger("tooltip:shown")
                        .stop()
                        .css({ visibility: "", display: "none" })
                        .fadeIn("fast", function() {
                            b.shownFully = !0;
                        });
                }
        },
        hide: function() {
            if (this.shown) {
                this.shownFully = this.shown = !1;
                var a = this.$tooltip;
                a &&
                    (a
                        .stop()
                        .fadeOut("fast")
                        .trigger("tooltip:hidden"),
                    f(m).off("resize.tooltip-" + a.xfUniqueId()));
            }
        },
        toggle: function() {
            this.shown ? this.hide() : this.show();
        },
        destroy: function() {
            this.$tooltip && this.$tooltip.remove();
        },
        isShown: function() {
            return this.shown;
        },
        isShownFully: function() {
            return this.shown && this.shownFully;
        },
        requiresLoad: function() {
            return this.loadRequired;
        },
        getPlacement: function() {
            return XF.rtlFlipKeyword(this.options.placement);
        },
        reposition: function() {
            var a = this.positioner;
            if (!a) console.error("No tooltip positioner");
            else if (!this.loadRequired) {
                var b = this.options.inViewport;
                if (a instanceof f) {
                    var c = a.dimensions(!0);
                    a.closest(".overlay").length && (b = !0);
                } else
                    "undefined" !== typeof a[0] && "undefined" !== typeof a[1]
                        ? (c = {
                              top: a[1],
                              right: a[0],
                              bottom: a[1],
                              left: a[0]
                          })
                        : "undefined" !== typeof a.right &&
                          "undefined" !== typeof a.bottom
                        ? (c = a)
                        : console.error(
                              "Positioner is not in correct format",
                              a
                          );
                c.width = c.right - c.left;
                c.height = c.bottom - c.top;
                a = this.getTooltip();
                var d = this.getPlacement(),
                    h = this.options.baseClass,
                    l = d;
                if (b) {
                    var g = f(m);
                    b = g.height();
                    var k = g.width();
                    var e = g.scrollTop();
                    g = g.scrollLeft();
                    e += XF.getStickyHeaderOffset();
                    e = {
                        top: e,
                        left: g,
                        right: g + k,
                        bottom: e + b,
                        width: k,
                        height: b
                    };
                } else e = f("body").dimensions();
                this.placement && a.removeClass(h + "--" + this.placement);
                a.addClass(h + "--" + d).css({
                    visibility: "hidden",
                    display: "block",
                    top: "",
                    bottom: "",
                    left: "",
                    right: "",
                    "padding-left": "",
                    "padding-right": "",
                    "padding-top": "",
                    "padding-bottom": ""
                });
                b = a.outerWidth();
                k = a.outerHeight();
                "top" == d && c.top - k < e.top
                    ? (d = "bottom")
                    : "bottom" == d && c.bottom + k > e.bottom
                    ? c.top - k >= e.top && (d = "top")
                    : "left" == d && c.left - b < e.left
                    ? (d =
                          c.right + b > e.right
                              ? c.top - k < e.top
                                  ? "bottom"
                                  : "top"
                              : "right")
                    : "right" == d &&
                      c.right + b > e.right &&
                      (d =
                          c.left - b < e.left
                              ? c.top - k < e.top
                                  ? "bottom"
                                  : "top"
                              : "left");
                d != l && a.removeClass(h + "--" + l).addClass(h + "--" + d);
                l = { top: "", right: "", bottom: "", left: "" };
                switch (d) {
                    case "top":
                        l.bottom = f(m).height() - c.top;
                        l.left = c.left + c.width / 2 - b / 2;
                        break;
                    case "bottom":
                        l.top = c.bottom;
                        l.left = c.left + c.width / 2 - b / 2;
                        break;
                    case "left":
                        l.top = c.top + c.height / 2 - k / 2;
                        l.right = f(m).width() - c.left;
                        break;
                    default:
                        (l.top = c.top + c.height / 2 - k / 2),
                            (l.left = c.right);
                }
                a.css(l);
                g = a.dimensions(!0);
                k = c = 0;
                h = a.find("." + h + "-arrow");
                if ("left" == d || "right" == d)
                    g.top < e.top
                        ? (c = e.top - g.top)
                        : g.bottom > e.bottom && (c = e.bottom - g.bottom),
                        h.css({ left: "", top: 50 - (100 * c) / g.top + "%" });
                else {
                    g.left < e.left
                        ? (k = e.left - g.left)
                        : g.left + b > e.right && (k = e.right - (g.left + b));
                    e = parseInt((b / 100) * (50 - (100 * k) / b), 0);
                    var q = e + parseInt(h.css("margin-left")),
                        r = q + h.outerWidth();
                    g = parseInt(a.css("padding-left"), 10);
                    var n = parseInt(a.css("padding-right"), 10);
                    q < g
                        ? ((b = g - q),
                          a.css({
                              "padding-left": Math.max(0, g - b),
                              "padding-right": n + b
                          }))
                        : r > b - n &&
                          ((b = r - (b - n)),
                          a.css({
                              "padding-left": n + b,
                              "padding-right": Math.max(0, n - b)
                          }));
                    h.css({ top: "", left: e });
                }
                k ? a.css("left", l.left + k) : c && a.css("top", l.top + c);
                this.placement = d;
                this.shown && !this.loadRequired && a.css("visibility", "");
            }
        },
        attach: function() {
            this.getTooltip();
        },
        getTooltip: function() {
            if (!this.$tooltip) {
                var a = this.getTemplate();
                a.appendTo("body");
                this.$tooltip = a;
                this.loadRequired || this.applyTooltipContent();
            }
            return this.$tooltip;
        },
        setContent: function(a) {
            this.contentApplied = !1;
            this.content = a;
            this.applyTooltipContent();
        },
        applyTooltipContent: function() {
            if (this.contentApplied || this.loadRequired) return !1;
            var a = this.getTooltip(),
                b = a.find("." + this.options.baseClass + "-content"),
                c = this.content;
            f.isFunction(c) && (c = c());
            this.options.html
                ? (b.html(c),
                  b.find("img").on("load", XF.proxy(this, "reposition")))
                : b.text(c);
            b = this.setupCallbacks;
            for (c = 0; c < b.length; c++) b[c](a);
            XF.activate(a);
            return (this.contentApplied = !0);
        },
        loadContent: function() {
            if (this.loadRequired && !this.loading) {
                var a = this.content,
                    b = this,
                    c = function(d) {
                        b.content = d;
                        b.loadRequired = !1;
                        b.loading = !1;
                        b.applyTooltipContent();
                        b.shown && ((b.shown = !1), b.show());
                    };
                f.isFunction(a)
                    ? ((this.loading = !0), a(c, this.options.loadParams))
                    : c("");
            }
        },
        getTemplate: function() {
            var a = this.options.baseClass;
            return f(
                f.parseHTML(
                    '<div class="' +
                        a +
                        (this.options.extraClass
                            ? " " + this.options.extraClass
                            : "") +
                        '" role="tooltip"><div class="' +
                        a +
                        '-arrow"></div><div class="' +
                        a +
                        '-content"></div></div>'
                )
            );
        }
    });
    XF.TooltipTrigger = XF.create({
        options: {
            delayIn: 200,
            delayInLoading: 800,
            delayOut: 200,
            trigger: "hover focus",
            maintain: !1,
            clickHide: null,
            onShow: null,
            onHide: null
        },
        $target: null,
        tooltip: null,
        delayTimeout: null,
        delayTimeoutType: null,
        stopFocusBefore: null,
        clickTriggered: !1,
        touchEnterTime: null,
        $covers: null,
        __construct: function(a, b, c) {
            this.options = f.extend(!0, {}, this.options, c);
            this.$target = a;
            this.tooltip = b;
            "auto" == this.options.trigger &&
                (this.options.trigger =
                    "hover focus" + (a.is("span") ? " touchclick" : ""));
            b.setPositioner(a);
            b.addSetupCallback(XF.proxy(this, "onTooltipSetup"));
            a.xfUniqueId();
            XF.TooltipTrigger.cache[a.attr("id")] = this;
        },
        init: function() {
            var a = this.$target,
                b = !1,
                c = !1,
                d = this,
                h = XF.supportsPointerEvents(),
                l = h ? "pointerenter" : "mouseenter";
            h = h ? "pointerleave" : "mouseleave";
            null === this.options.clickHide &&
                (this.options.clickHide = a.is("a"));
            for (
                var g = this.options.trigger.split(" "), k = 0;
                k < g.length;
                k++
            )
                switch (g[k]) {
                    case "hover":
                        a.on(l + ".tooltip", XF.proxy(this, "mouseEnter")).on(
                            h + ".tooltip",
                            XF.proxy(this, "leave")
                        );
                        break;
                    case "focus":
                        a.on({
                            "focusin.tooltip": XF.proxy(this, "focusEnter"),
                            "focusout.tooltip": XF.proxy(this, "leave")
                        });
                        break;
                    case "click":
                        b = !0;
                        a.onPointer("click.tooltip", XF.proxy(this, "click"));
                        a.onPointer(
                            "auxclick.tooltip contextmenu.tooltip",
                            function() {
                                d.cancelShow();
                                d.stopFocusBefore = Date.now() + 2e3;
                            }
                        );
                        break;
                    case "touchclick":
                        c = !0;
                        a.onPointer("click.tooltip", function(e) {
                            XF.isEventTouchTriggered(e) && d.click(e);
                        });
                        break;
                    case "touchhold":
                        (c = !0),
                            a.data("threshold", this.options.delayIn),
                            a.onPointer({
                                "touchstart.tooltip": function(e) {
                                    a.data("tooltip:touching", !0);
                                },
                                "touchend.tooltip": function(e) {
                                    setTimeout(function() {
                                        a.removeData("tooltip:touching");
                                    }, 50);
                                },
                                "taphold.tooltip": function(e) {
                                    a.data("tooltip:taphold", !0);
                                    XF.isEventTouchTriggered(e) && d.click(e);
                                },
                                "contextmenu.tooltip": function(e) {
                                    a.data("tooltip:touching") &&
                                        e.preventDefault();
                                }
                            });
                }
            b &&
                c &&
                console.error("Cannot have touchclick and click triggers");
            if (!b && this.options.clickHide)
                a.onPointer(
                    "click.tooltip auxclick.tooltip contextmenu.tooltip",
                    function(e) {
                        (c && XF.isEventTouchTriggered(e)) ||
                            (d.hide(), (d.stopFocusBefore = Date.now() + 2e3));
                    }
                );
            a.on({
                "tooltip:show": XF.proxy(this, "show"),
                "tooltip:hide": XF.proxy(this, "hide"),
                "tooltip:reposition": XF.proxy(this, "reposition")
            });
        },
        reposition: function() {
            this.tooltip.reposition();
        },
        click: function(a) {
            0 < a.button || a.ctrlKey || a.shiftKey || a.metaKey || a.altKey
                ? this.cancelShow()
                : this.tooltip.isShown()
                ? this.tooltip.isShownFully()
                    ? this.hide()
                    : (a.preventDefault(), this.clickShow(a))
                : (a.preventDefault(), this.clickShow(a));
        },
        clickShow: function(a) {
            this.clickTriggered = !0;
            var b = this;
            setTimeout(function() {
                var c = b.addCovers();
                if (XF.isEventTouchTriggered(a)) c.addClass("is-active");
                else
                    f(p).on(
                        "click.tooltip-" + b.$target.xfUniqueId(),
                        XF.proxy(b, "docClick")
                    );
            }, 0);
            this.show();
        },
        addCovers: function() {
            this.$covers && this.$covers.remove();
            var a = this.$target.dimensions(!0),
                b = [];
            b.push({ top: 0, height: a.top, left: 0, right: 0 });
            b.push({ top: a.top, height: a.height, left: 0, width: a.left });
            b.push({ top: a.top, height: a.height, left: a.right, right: 0 });
            b.push({
                top: a.bottom,
                height: f("html").height() - a.bottom,
                left: 0,
                right: 0
            });
            a = f();
            for (var c, d = 0; d < b.length; d++)
                (c = f('<div class="tooltipCover" />').css(b[d])),
                    (a = a.add(c));
            a.on("click", XF.proxy(this, "hide"));
            this.tooltip.getTooltip().before(a);
            this.$covers = a;
            XF.setRelativeZIndex(a, this.$target);
            return a;
        },
        docClick: function(a) {
            var b = this.$covers;
            var c = a.pageX;
            var d = a.pageY,
                h = f(m);
            b &&
                (0 == a.screenX &&
                    0 == a.screenY &&
                    ((a = f(a.target).dimensions()), (c = a.left), (d = a.top)),
                b.addClass("is-active"),
                (c = f(
                    p.elementFromPoint(c - h.scrollLeft(), d - h.scrollTop())
                )),
                b.removeClass("is-active"),
                c.is(b) && this.hide());
        },
        mouseEnter: function(a) {
            var b = a.originalEvent;
            XF.isEventTouchTriggered(a)
                ? (this.touchEnterTime = b.timeStamp)
                : (XF.browser.ios &&
                      XF.supportsPointerEvents() &&
                      b instanceof PointerEvent &&
                      this.touchEnterTime &&
                      this.touchEnterTime > b.timeStamp - 1e3) ||
                  this.enter();
        },
        focusEnter: function(a) {
            100 > Date.now() - XF.pageDisplayTime ||
                XF.isEventTouchTriggered(a) ||
                ((!this.stopFocusBefore ||
                    Date.now() >= this.stopFocusBefore) &&
                    this.enter());
        },
        enter: function() {
            if (!this.isShown() || !this.clickTriggered) {
                this.clickTriggered = !1;
                var a = this.tooltip.requiresLoad()
                    ? this.options.delayInLoading
                    : this.options.delayIn;
                if (a) {
                    if (
                        ("enter" !== this.delayTimeoutType &&
                            this.resetDelayTimer(),
                        !this.delayTimeoutType && !this.isShown())
                    ) {
                        this.delayTimeoutType = "enter";
                        var b = this;
                        this.delayTimeout = setTimeout(function() {
                            b.delayTimeoutType = null;
                            b.show();
                        }, a);
                    }
                } else this.show();
            }
        },
        leave: function() {
            if (!this.clickTriggered) {
                var a = this.options.delayOut;
                if (a) {
                    if (
                        ("leave" !== this.delayTimeoutType &&
                            this.resetDelayTimer(),
                        !this.delayTimeoutType && this.isShown())
                    ) {
                        this.delayTimeoutType = "leave";
                        var b = this;
                        this.delayTimeout = setTimeout(function() {
                            b.delayTimeoutType = null;
                            b.hide();
                        }, a);
                    }
                } else this.hide();
            }
        },
        show: function() {
            var a = this;
            f(m)
                .off("focus.tooltip-" + this.$target.xfUniqueId())
                .on("focus.tooltip-" + this.$target.xfUniqueId(), function(c) {
                    a.stopFocusBefore = Date.now() + 250;
                });
            XF.setRelativeZIndex(this.tooltip.getTooltip(), this.$target);
            if (this.options.onShow) {
                var b = this.options.onShow;
                b(this, this.tooltip);
            }
            this.tooltip.show();
        },
        cancelShow: function() {
            "enter" === this.delayTimeoutType
                ? this.resetDelayTimer()
                : this.tooltip.isShownFully() || this.hide();
        },
        hide: function() {
            this.tooltip.hide();
            this.resetDelayTimer();
            this.clickTriggered = !1;
            this.$covers && (this.$covers.remove(), (this.$covers = null));
            f(p).off("click.tooltip-" + this.$target.xfUniqueId());
            if (this.options.onHide) {
                var a = this.options.onHide;
                a(this, this.tooltip);
            }
        },
        toggle: function() {
            this.isShown() ? this.hide() : this.show();
        },
        isShown: function() {
            return this.tooltip.isShown();
        },
        wasClickTriggered: function() {
            return this.clickTriggered;
        },
        resetDelayTimer: function() {
            this.delayTimeoutType &&
                (clearTimeout(this.delayTimeout),
                (this.delayTimeoutType = null));
        },
        addMaintainElement: function(a) {
            if (!a.data("tooltip-maintain")) {
                for (
                    var b = this.options.trigger.split(" "), c = 0;
                    c < b.length;
                    c++
                )
                    switch (b[c]) {
                        case "hover":
                            a.on("mouseenter.tooltip", XF.proxy(this, "enter"));
                            a.on("mouseleave.tooltip", XF.proxy(this, "leave"));
                            break;
                        case "focus":
                            a.on("focusin.tooltip", XF.proxy(this, "enter")),
                                a.on(
                                    "focusout.tooltip",
                                    XF.proxy(this, "leave")
                                );
                    }
                a.data("tooltip-maintain", !0);
            }
        },
        removeMaintainElement: function(a) {
            a.off(".tooltip");
            a.data("tooltip-maintain", !1);
        },
        onTooltipSetup: function(a) {
            if (this.options.maintain) {
                this.addMaintainElement(a);
                var b = this;
                a.on("menu:opened", function(c, d) {
                    b.addMaintainElement(d);
                });
                a.on("menu:closed", function(c, d) {
                    b.removeMaintainElement(d);
                });
            }
        }
    });
    XF.TooltipTrigger.cache = {};
    XF.TooltipOptions = {
        base: {
            baseClass: "tooltip",
            extraClass: "tooltip--basic",
            html: !1,
            inViewport: !0,
            placement: "top",
            clickHide: null,
            delayIn: 200,
            delayOut: 200,
            maintain: !1,
            trigger: "hover focus"
        },
        tooltip: ["baseClass", "extraClass", "html", "placement"],
        trigger: ["clickHide", "delayIn", "delayOut", "maintain", "trigger"],
        extract: function(a, b) {
            for (var c = {}, d = 0; d < a.length; d++) c[a[d]] = b[a[d]];
            return c;
        },
        extractTooltip: function(a) {
            return this.extract(this.tooltip, a);
        },
        extractTrigger: function(a) {
            return this.extract(this.trigger, a);
        }
    };
    XF.Tooltip = XF.Element.newHandler({
        options: f.extend(!0, {}, XF.TooltipOptions.base, { content: null }),
        trigger: null,
        tooltip: null,
        init: function() {
            var a = this.getContent(),
                b = XF.TooltipOptions.extractTooltip(this.options),
                c = XF.TooltipOptions.extractTrigger(this.options);
            this.tooltip = new XF.TooltipElement(a, b);
            this.trigger = new XF.TooltipTrigger(this.$target, this.tooltip, c);
            this.trigger.init();
            this.$target.on("tooltip:refresh", XF.proxy(this, "refresh"));
        },
        getContent: function() {
            if (this.options.content) return this.options.content;
            var a = this.$target,
                b = a.attr("data-original-title") || a.attr("title") || "";
            a.attr("data-original-title", b).removeAttr("title");
            a.attr("aria-label") ||
                a.attr("aria-labelledby") ||
                f.trim(a[0].textContent).length ||
                a.attr("aria-label", b);
            return b;
        },
        refresh: function() {
            this.tooltip.setContent(this.getContent());
        }
    });
    XF.ElementTooltip = XF.extend(XF.Tooltip, {
        __backup: { getContent: "_getContent", init: "_init" },
        options: f.extend({}, XF.Tooltip.prototype.options, {
            element: null,
            showError: !0,
            noTouch: !0,
            shortcut: null
        }),
        $element: null,
        init: function() {
            this.options.shortcut && this.setupShortcut(this.options.shortcut);
            if (!this.options.noTouch) {
                var a = this.options.element,
                    b = this.options.showError;
                if (a) {
                    var c = XF.findRelativeIf(a, this.$target);
                    c.length
                        ? ((this.$element = c),
                          this.$target.removeAttr("title"),
                          (this.options.html = !0),
                          this._init())
                        : b &&
                          console.error("Element tooltip could not find " + a);
                } else
                    b &&
                        console.error(
                            "No element specified for the element tooltip"
                        );
            }
        },
        setupShortcut: function(a) {
            "node-description" == a &&
                (this.options.element ||
                    (this.options.element =
                        "< .js-nodeMain | .js-nodeDescTooltip"),
                (this.options.showError = !1),
                (this.options.maintain = !0),
                (this.options.placement = "right"),
                (this.options.extraClass =
                    "tooltip--basic tooltip--description"));
        },
        getContent: function() {
            return this.$element.clone().contents();
        }
    });
    XF.PreviewTooltip = XF.Element.newHandler({
        options: { delay: 600, previewUrl: null },
        trigger: null,
        tooltip: null,
        init: function() {
            this.options.previewUrl
                ? ((this.tooltip = new XF.TooltipElement(
                      XF.proxy(this, "getContent"),
                      {
                          extraClass: "tooltip--preview",
                          html: !0,
                          loadRequired: !0
                      }
                  )),
                  (this.trigger = new XF.TooltipTrigger(
                      this.$target,
                      this.tooltip,
                      {
                          maintain: !0,
                          delayInLoading: this.options.delay,
                          delayIn: this.options.delay
                      }
                  )),
                  this.trigger.init())
                : console.error("No preview URL");
        },
        getContent: function(a) {
            var b = this;
            XF.ajax(
                "get",
                this.options.previewUrl,
                {},
                function(c) {
                    b.loaded(c, a);
                },
                { skipDefault: !0, skipError: !0, global: !1 }
            );
        },
        loaded: function(a, b) {
            a.html &&
                XF.setupHtmlInsert(a.html, function(c, d, h) {
                    b(c);
                });
        }
    });
    XF.MemberTooltipCache = {};
    XF.MemberTooltip = XF.Element.newHandler({
        options: { delay: 600 },
        trigger: null,
        tooltip: null,
        userId: null,
        init: function() {
            this.userId = this.$target.data("user-id");
            this.tooltip = new XF.TooltipElement(XF.proxy(this, "getContent"), {
                extraClass: "tooltip--member",
                html: !0,
                loadRequired: !0
            });
            this.trigger = new XF.TooltipTrigger(this.$target, this.tooltip, {
                maintain: !0,
                delayInLoading: this.options.delay,
                delayIn: this.options.delay,
                trigger: "hover focus click",
                onShow: XF.proxy(this, "onShow"),
                onHide: XF.proxy(this, "onHide")
            });
            this.trigger.init();
        },
        getContent: function(a) {
            var b = XF.MemberTooltipCache[this.userId];
            if (b) (b = f(f.parseHTML(b))), a(b);
            else {
                var c = this;
                b = { skipDefault: !0, skipError: !0, global: !1 };
                this.trigger.wasClickTriggered() && (b.global = !0);
                XF.ajax(
                    "get",
                    this.$target.attr("href"),
                    { tooltip: !0 },
                    function(d) {
                        c.loaded(d, a);
                    },
                    b
                );
            }
        },
        loaded: function(a, b) {
            if (a.html) {
                var c = this.userId;
                XF.setupHtmlInsert(a.html, function(d, h, l) {
                    XF.MemberTooltipCache[c] = a.html.content;
                    b(d);
                });
            }
        },
        onShow: function() {
            var a = XF.MemberTooltip.activeTooltip;
            a && a !== this && a.hide();
            XF.MemberTooltip.activeTooltip = this;
        },
        onHide: function() {
            XF.MemberTooltip.activeTooltip === this &&
                (XF.MemberTooltip.activeTooltip = null);
        },
        show: function() {
            this.trigger.show();
        },
        hide: function() {
            this.trigger.hide();
        }
    });
    XF.MemberTooltip.activeTooltip = null;
    XF.ShareTooltip = XF.Element.newHandler({
        options: { delay: 300, href: null, webShare: !0 },
        trigger: null,
        tooltip: null,
        init: function() {
            if (
                this.options.webShare &&
                XF.Element.applyHandler(this.$target, "web-share", {
                    fetch: this.options.href,
                    url: this.$target.attr("href"),
                    hideContainerEls: !1
                }).isSupported()
            )
                return !1;
            this.tooltip = new XF.TooltipElement(XF.proxy(this, "getContent"), {
                extraClass: "tooltip--share",
                html: !0,
                loadRequired: !0
            });
            this.trigger = new XF.TooltipTrigger(this.$target, this.tooltip, {
                maintain: !0,
                delayInLoading: this.options.delay,
                delayIn: this.options.delay,
                trigger: "hover focus click",
                onShow: XF.proxy(this, "onShow"),
                onHide: XF.proxy(this, "onHide")
            });
            this.trigger.init();
        },
        getContent: function(a) {
            var b = this,
                c = { skipDefault: !0, skipError: !0, global: !1 };
            this.trigger.wasClickTriggered() && (c.global = !0);
            XF.ajax(
                "get",
                this.options.href,
                {},
                function(d) {
                    b.loaded(d, a);
                },
                c
            );
        },
        loaded: function(a, b) {
            a.html &&
                XF.setupHtmlInsert(a.html, function(c, d, h) {
                    b(c);
                });
        },
        onShow: function() {
            var a = XF.ShareTooltip.activeTooltip;
            a && a !== this && a.hide();
            XF.ShareTooltip.activeTooltip = this;
        },
        onHide: function() {
            XF.ShareTooltip.activeTooltip === this &&
                (XF.ShareTooltip.activeTooltip = null);
        },
        show: function() {
            this.trigger.show();
        },
        hide: function() {
            this.trigger.hide();
        }
    });
    XF.ShareTooltip.activeTooltip = null;
    XF.Element.register("element-tooltip", "XF.ElementTooltip");
    XF.Element.register("member-tooltip", "XF.MemberTooltip");
    XF.Element.register("preview-tooltip", "XF.PreviewTooltip");
    XF.Element.register("share-tooltip", "XF.ShareTooltip");
    XF.Element.register("tooltip", "XF.Tooltip");
})(jQuery, window, document);
