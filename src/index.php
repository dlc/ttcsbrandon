[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_6">

[% PROCESS "welcome" %]

        <hr />

      <h2>Upcoming Events</h2>

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>

[% events(5, "events_html") %]

    </div>
    <div class="grid_6">

[% pdf_thumb("2014-01-11-openhouse", "Open House") %]

        <hr/>

[% PROCESS "emptystep" %]


    </div>
</div>

