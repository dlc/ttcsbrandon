Taoist Tai Chi Society of the USA, Brandon, Florida Branch
==========================================================

This code encapsulates the website for the Brandon, Florida branch of
the Taoist Tai Chi Society of the USA.  It is mostly a clone of the
good work that Paul Peck did in his tenure as volunteer webmaster.
The final site will live at http://brandon.florida.usa.taoist.org/,
but has not yet been deployed.

Building the Site
=================

The site is generated as static HTML from source templates using Andy
Wardley's Template Toolkit.  The process is almost exactly the same as
the one described in chapter 2 of [Perl Template Toolkit][ptt], by
Andy Wardley, David Cross, and Darren Chamberlain.

In order to build the site, you'll need a clone of this repo, a (relatively)
modern [Perl][], and a copy of [Template Toolkit][tt2] installed, with
all its dependencies. No database is used, and very few assumptions are
made about the type of web server or its capabilities, beyond being Apache
with PHP enabled.

The commands to run are:

    $ git clone git://github.com/dlc/ttcsbrandon.git
    $ cd ttcsbrandon
    $ perl create-events-data > data/events.csv
    $ sh build -a

The resulting site will be built into ./html, and it is then
suitable for uploading to a web server.  You might need to edit the
configuration bits in lib/config, specifically the uri line, so that
they are consistent with the environment to which you're publishing.

To publish:

    $ sh publish site
    $ sh publish images

This assumes you're using ncftp and have a saved site named "taichi";
there are no embedded passwords.

Adding Photos
=============

Adding photos is a multi-step process.  First, add the images themselves to
`src/assets/photos`, then run `create-photo-pages`.  `create-photo-pages`
will create a bunch of directories and files in `src/media` that point to
the new photos and contain next/previous links.  When it finishes running,
`create-photo-pages` will modify `src/.htaccess` so that `media/` redirects
to the latest photo.

  [ptt]: http://oreilly.com/catalog/9780596004767
  [tt2]: http://www.tt2.org/download/
  [Perl]: http://www.perl.org/get.html

TODO
====

  * Integrate https://github.com/codejoust/session.js
  * Automate and standardize front page components
