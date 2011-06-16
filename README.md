Taoist Tai Chi Society of the USA, Brandon, Florida Branch
==========================================================

This code encapsulates the website for the Brandon, Florida branch of
the Taoist Tai Chi Society of the USA.  It is mostly a clone of the
good work that Paul Peck did in his tenure as volunteer webmaster.

Building the Site
=================

The site is generated as static HTML from source templates using Andy
Wardley's Template Toolkit.  The process is almost exactly the same as
the one described in chapter 2 of [Perl Template Toolkit][ptt], by
Andy Wardley, David Cross, and Darren Chamberlain.

In order to build the site, you'll need a clone of this repo and a copy
of [Template Toolkit][tt2] installed, with all its dependencies.  This
includes a modern Perl. No database is used, and no assumptions are
made about the type of web server or its capabilities.

The commands to run are:

    $ git clone git://github.com/dlc/ttcsbrandon.git
    $ cd ttcsbrandon
    $ ttree -f ttree.cfg

The resulting site will be built into ./html, and it is then
suitable for uploading to a web server.  You might need to edit the
configuration bits in lib/config, specifically the uri line, so that
they are consistent with the environment to which you're publishing.

  [ptt]: http://oreilly.com/catalog/9780596004767
  [tt2]: http://www.tt2.org/download/
