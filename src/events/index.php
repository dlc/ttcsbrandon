[%  META
      title         = 'Events'
      type          = 'html'
      description   = 'Events and Happenings'
      atom_version  = 'events.atom'
%]
<div id="main" class="container_12">

    <div class="grid_12">
[% events(100, "events_html") %]
    </div>

    <br/>

  <div class="grid_12">
    <h2>Workshop Schedules</h2>
    <table class="schedule">
        <tr class="even">
            <td>2013</td>
            <td><a href="[% site.uris.workshops %]2013/">HTML</a></td>
            <td><a href="[% site.uris.pdfs %]/2013-usa-workshops.pdf">PDF</a></td>
        </tr>
        <tr class="odd">
            <td>2012</td>
            <td><a href="[% site.uris.workshops %]2012/">HTML</a></td>
            <td><a href="[% site.uris.pdfs %]/2012-usa-workshops.pdf">PDF</a></td>
        </tr>
        <tr>
            <td>2011</td>
            <td><a href="[% site.uris.workshops %]2011/">HTML</a></td>
            <td><a href="[% site.uris.pdfs %]/2011-usa-workshops.pdf">PDF</a></td>
        </tr>
      </table>
    </div>
</divoki
