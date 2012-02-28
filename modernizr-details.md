Modernizr Use Details
=====================

## Rounded corners ##

Used PIE with modernizr body tag selectors to target browsers
that do not support rounded corners.
**Issues:** Since gh-pages do not support any server side scripting, I had to move implementation.
After attempting to impliment on on host with no luck, I finally setup the deploy repo on my hosting, which worked.
_see comments in global.css and index.css_

## CSS Gradients ##
Used PIE with modernizr body tags to target browsers
that do not support CSS gradients.
_see comments in global.css and index.css_

## Progress Polyfill ##
Used modernizr.load method to target browsers that
do not support the `<progress>` tag and provide partial support.
_see feature-test.js_

## Details Polyfill ##
Used modernizr.load method to target browsers that
do not support the `<summery>` tag and provide a jQuery based solution.
**Issues:** I took a couple hours figuring out how to do the complete function on after multiple file loads.
_see feature-test.js_
