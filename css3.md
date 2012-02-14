# CSS3 selectors & effects

## Week 4

## :after

### global.css, line 373

I used the ```:after``` pseudo-element to add a forward-slash separator between the links in the footer navigation. I also used the adjacent sibling selector (```li + li```) to target only two of the three links, ensuring there was no trailing forward-slash separator on the last one (their order is also reversed since they are floating right).

## Multiple Backgrounds

### global.css, lines 14-15

Background for the entire site uses a tiling pattern borrowed from [subtle patterns](http://subtlepatterns.com) as well as a very subtle overlay image to achieve a mild spot lighting effect. Using ```background-size: cover, auto``` to center the overlay (along with a ```center top``` background position for further centering).

## Linear Gradient

Heavy use of linear gradients in nav links (global.css, lines 105-168) and quote request button (index.css, lines 158-220) (these ones I made from scratch) to achieve a 3d push button effect. Also many gradients present in the progress bar (these ones I borrowed and modified from [here](http://www.useragentman.com/blog/2012/01/03/cross-browser-html5-progress-bars-in-depth/)), also to give it a 3d effect.

## RGBA

Heavy use of RGBA all over the place. Most colors and background colors have varying alpha levels to achieve a better blending effect with the background. A good example is the border around the screenshot of the featured project on the index -- both the borders around the ```<img>``` and ```<figure>``` tags are RGBA values, as well as the background of the figure which is expanded around the image using padding.

## HSLa

### global.css, lines 426, 444

Background for the progress bar uses ```hsla```, just because.

## Transforms

  * Rotate, global.css, lines 247-254
    * heading text for sidebar elements is rotated 90 degrees.

  * Scale, global.css, line 222
    * global tagline has a pretty sweet scale and text-shadow effect on hover.

## Transitions

Transitions used for nearly all transforms and hover states. See primary navigation links, social links, featured project screenshot hover effect, quote request button ```:hover``` and ```:active``` states.

---

## Week 5

## :nth-child, :not

### index.css, lines 136-154

I used the ```:nth-child``` selector to target the first and third spans within a list item.
I used the ```:not selector``` in tandem with an ```:nth-child``` selector to exclude the 2nd span of 3 within a list item, because I wanted to apply the same style to the first and third spans but not the second.

## :first-child, :last-child

### index.css, line 8

I was using ```border-top``` and ```border-bottom``` to achieve a beveled line effect between each article, and wanted to exclude the first and last articles in different ways (no top border for the first child, no bottom border for the last child).

## :hover

We used the hover selector all over the place. My favorite hover effect is the scale transition effect for the screenshot of the featured project on the index.

## :before

### index.css, lines 92-105

I used the ```:before``` pseudo-element to create a red square next to the "more projects" link on the index. I also found out you can chain a ```:hover``` selector on a ```:before``` pseudo-element, like so:

    a.more:hover:before

This allowed me to have a hover state for a link and the ```:before``` pseudo-element at the same time, i.e. without creating another element and wrapping it in an ```<a>``` tag.

## Box Shadow

Box shadows are all over the place. Visible as shadows on the red squares in the about page. Also check out the shadow that appears when you hover over the featured screenshot on the index. All buttons use ```box-shadow```.

## Media Queries

Media query for mobile devices removes aside and social links, and pushs main nav to the top of the screen.

## Extra

Using ```-webkit-keyframes``` for page load effect.

    html {
      ...
      -webkit-animation-name: 'docload';
      -webkit-animation-duration: 1s;
      -webkit-animation-iteration-count: 1;
    }

    @-webkit-keyframes docload {
      0%   { opacity: 0; -webkit-transform: scale(1.1) rotate(1deg); }
      30%  { opacity: 0; -webkit-transform: scale(1.1) rotate(1deg); }
      100% { opacity: 1; -webkit-transform: scale(1.0) rotate(0deg); }
    }

Starts slightly scaled and rotated with zero opacity, remains the same until 30% through the animation for delay, then rotates and scales down to normal while returning to full opacity at the end. Animation lasts 1 second (```-webkit-animation-duration: 1s;```) and only occurs once (```-webkit-animation-iteration-count: 1;```)

All fonts used are google fonts using the ```@import``` method. Title font is 'Arvo' (serif), body copy is 'PT Sans' (sans-serif).
