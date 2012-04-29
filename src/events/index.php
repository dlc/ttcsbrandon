[%  META
      title         = 'Events'
      type          = 'html'
      description   = 'Events and Happenings'
      atom_version  = 'events.atom'
%]
<div id="main" class="container_12">

    <div class="grid_7">
[% events(100, "events_html") %]
    </div>

    <div class="grid_5">
      <a href="[% site.uris.pdfs %]/2012-05-05-openhouse.pdf"><img src="[% site.uris.images %]/thumbs/2012-05-05-openhouse.jpg" /></a>
      <a href="[% site.uris.pdfs %]/2012-05-25-grand-reopening.pdf"><img src="[% site.uris.images %]/thumbs/2012-05-25-grand-reopening.jpg" /></a>
    </div>

  <!--h2><a href="[% site.uris.workshops %]2012/">2012 Workshop Schedule</a></h2-->
  <!--h2><a href="[% site.uris.workshops %]2011/">2011 Workshop Schedule</a></h2-->
</div>
