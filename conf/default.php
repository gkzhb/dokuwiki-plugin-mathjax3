<?php
/**
 * Default settings for the mathjax plugin
 *
 * @author Mark Liffiton <liffiton@gmail.com>
 */

$conf['url'] = 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js';
$conf['config'] = 'window.MathJax = {
  tex: {
    inlineMath: [ ["$","$"], ["\\(","\\)"] ],
    displayMath: [ ["$$","$$"], ["\\[","\\]"] ],
    processEscapes: true,
    autoload: {
      color: [],
      colorv2: ["color"]
    },
    packages: {"[+]": ["noerrors"]}
  },
  options: {
    ignoreHtmlClass: "tex2jax_ignore",
    processHtmlClass: "tex2jax_process"
  },
  loader: {
    load: ["input/asciimath", "[tex]/noerrors"]
  },
  svg: {
      fontCache: "global",        // or "local" or "none"
      mtextInheritFont: true,     // required to correctly render RTL Persian text inside a formula
      scale: 0.97,                // global scaling factor for all expressions
      minScale: 0.6               // smallest scaling factor to use
  }
};';
$conf['configfile'] = '';
$conf['asciimath'] = 0;
$conf['mathtags'] = '';

