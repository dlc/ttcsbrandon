[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_6">
[% PROCESS "welcome" %]

        <hr />

[% PROCESS "emptystep" %]

    </div>
    <div class="grid_6">

      <h2>Upcoming Events</h2>

[% events(5, "events_html") %]

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>

    </div>
</div>

