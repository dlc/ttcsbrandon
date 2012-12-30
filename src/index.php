[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_6">
        <div style="border: 2px dashed maroon; background: #e0e0e0; text-align: center; ">
            <h3 style="color: maroon;">NOTICE</h3>

            <p>The ad in the Tampa Tribune was incorrect.</p>

            <p>Our <a href="[% site.uris.pdfs %]/2013-01-13-openhouse.pdf" style="color: maroon;"><strong>Open House</strong></a> is on
            <strong>Saturday, January 12, 2013.</strong></p>

            <p>Brandon <strong>11:00-1:00</strong><br/>
            Temple Terrace <strong>2:00-4:00</strong></p>
        </div>

        <hr />

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

