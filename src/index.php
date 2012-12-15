[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_6">
[% PROCESS "welcome" %]

        <hr />

      <h2>Upcoming Events</h2>

[% events(5, "events_html") %]

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>

    </div>
    <div class="grid_6">

[% PROCESS "emptystep" %]

    <hr />
      [% pdf_thumb("2013-01-13-openhouse") %]

    </div>
</div>

