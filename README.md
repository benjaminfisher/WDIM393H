# WDIM393H - Group Project Repo

## Week 7

  * Benjamin
    * Finished converting the html over to php files with css generated based on section
      * the new Interview pages are in the about section. Add styling for these pages to about.css
    * Added a randomized quote to the 'Did You Know' section of the sidebar
      * Quotes are driven from the content array in the about_gen.js script.
    * Moved the deployment server from my personal hosting to Orchestra (see project web address).
      * This deploy server will automatically sync from the master branch (time frame for update not specified).
      * Backup server at http://pirate-monkeys.phpfogapp.com. Requires a push to update.
    * Pushed the videos for this weeks assignment to the repo. They are live on the site.
      
----------

## Week 6

  * Nate
    * Added tags for portfolio projects
    
  * Benjamin
    * Added Modernizr with feature testing for:
      * Gradients, rounded corners, and drop shadows using PIE
      * HTML5 details element using jquery.details plugin
    
----------

## Week 4 + 5 Homework - Style (CSS3)

  * Nate
    * Reset master branch, rebuilding from scratch
    * Replaced non-web fonts with google font imports
      * Alexandria -> Arvo
      * Ideal Sans -> PT Sans
    * Reorganized content
      * News from Index -> Inside Global Sidebar
      * Tagline from Charlie's Comp -> Inside Global Header
      * Progress Bar -> Inside Global Footer
      * Temporarily removed video and audio
    * New Design
      * Implemented layout based on Charlie's new design
      * Normalized HTML conventions across pages
      * Created page-specific CSS files for easy scoping
    * CSS3
      * Added style to progress bar with polyfill
      * Added animation on document load using webkit keyframes
    * Index
      * Styled the index

  * Benjamin
    * Pulled Nates changes from the master to gh-pages branch
    * Pushed the update to gh-pages remote. Current version of the project is live.
    * Changes to HTML and styles for the portfolio section
      * Added ul.tags styling - just add a ul with class=tags to the portfolio articles

----------

Revisions from Week 4 that have been overwritten

  * Created dev branch
  * Installed head.js (http://headjs.com/)
  * Installed Compass with SASS (http://compass-style.org/)
    * SASS uses the same syntax as Less but has more options
    * Install Compass gem which includes SASS and the Compass framework
  * Started on header styles
    * Minor corrections to the video and audio tags
    * Added my about and portfolio sections
    * Cleaned up the About and Portfolio pages, removing duplicate headers and footers
    * Removed some empty content sections

  * April
    * Formatted the About page (changed HTML5 and CSS3)
    * Validated

----------

## Week 3 Homework - Markup (HTML5)

  * Nate
    * Added header and footer to April's about page
    * Created portfolio/index.html, added header and footer
    * Added horizontal rule to each page to divide content from header and footer
    * Discovered all the extra work April did that didn't merge into master
    * Integrated April's work into the current structure
    * Added a video to the front page
    * Added some of my own stuff
    * Pushed to gh-pages

  * Benjamin
    * Minor corrections to the video and audio tags
    * Added my about and portfolio sections
    * Cleaned up the About and Portfolio pages, removing duplicate headers and footers
    * Removed some empty content sections
