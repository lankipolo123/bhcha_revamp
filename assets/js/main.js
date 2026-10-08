(function () {
  // Mobile menu
  var nav = document.getElementById("nav");
  var btn = document.getElementById("menu-btn");
  if (nav && btn) {
    btn.addEventListener("click", function () {
      var open = nav.classList.toggle("open");
      btn.setAttribute("aria-expanded", String(open));
    });
  }

  // Hero canopy: layered leaf clusters, seeded so the picture is the same on every load.
  var cv = document.getElementById("canopy");
  if (!cv) return;
  function draw() {
    var w = cv.clientWidth, h = cv.clientHeight, dpr = Math.min(window.devicePixelRatio || 1, 2);
    if (!w || !h) return;
    cv.width = w * dpr; cv.height = h * dpr;
    var ctx = cv.getContext("2d");
    ctx.scale(dpr, dpr);
    var seed = 1964;
    var rnd = function () { return (seed = (seed * 16807) % 2147483647) / 2147483647; };
    var cs = getComputedStyle(document.documentElement);
    var forest = cs.getPropertyValue("--forest").trim() || "#1f4d33";
    var mango = cs.getPropertyValue("--mango").trim() || "#e9a23b";
    ctx.fillStyle = forest; ctx.fillRect(0, 0, w, h);
    var g = ctx.createRadialGradient(w * .78, h * .18, 0, w * .78, h * .18, w * .7);
    g.addColorStop(0, "rgba(255,226,150,.55)"); g.addColorStop(1, "rgba(255,226,150,0)");
    ctx.fillStyle = g; ctx.fillRect(0, 0, w, h);
    ["#123522", "#184329", "#1f5233", "#2a6a42", "#3a8051", "#5a9a5f"].forEach(function (c, layer) {
      var n = 26 + layer * 6;
      for (var i = 0; i < n; i++) {
        var x = rnd() * w * 1.1 - w * .05;
        var y = h * (1 - (layer + 1) / 7.2) + rnd() * h * .45;
        var r = (w * .09) * (1 - layer * .1) * (.6 + rnd() * .8);
        ctx.fillStyle = c;
        ctx.beginPath();
        ctx.ellipse(x, y, r, r * (.7 + rnd() * .3), rnd() * Math.PI, 0, Math.PI * 2);
        ctx.fill();
      }
    });
    for (var i = 0; i < 9; i++) {
      var x = rnd() * w, y = h * .35 + rnd() * h * .5, r = 4 + rnd() * 5;
      ctx.fillStyle = mango;
      ctx.beginPath(); ctx.ellipse(x, y, r, r * 1.3, .4, 0, Math.PI * 2); ctx.fill();
    }
    var fade = ctx.createLinearGradient(0, h * .6, 0, h);
    fade.addColorStop(0, "rgba(0,0,0,0)"); fade.addColorStop(1, "rgba(0,0,0,.45)");
    ctx.fillStyle = fade; ctx.fillRect(0, 0, w, h);
  }
  draw();
  var t;
  window.addEventListener("resize", function () { clearTimeout(t); t = setTimeout(draw, 120); });
  var mq = window.matchMedia("(prefers-color-scheme: dark)");
  if (mq.addEventListener) mq.addEventListener("change", draw);
})();
