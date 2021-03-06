[% META
    type = 'text'
%]// (C) Copyright 2008-[% USE date; date.format(date.now, '%Y') %] Taoist Tai Chi Society of the USA
// See [% site.uris.contact %] to contact this branch of the Society.
// See [% site.uris.colophon %] for information about how this site is built, if that's your thing,
// or [% site.uris.humans %] to see who's to blame for this site.
//

var iw = new google.maps.InfoWindow();
var m = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: new google.maps.LatLng(27.923132, -82.276279),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

[% FOR loc IN locations %] 
// [% loc.title %]
var [% loc.id %] = new google.maps.Marker({
    position: new google.maps.LatLng([% loc.lat %], [% loc.lng %]),
    map: m,
    title: "[% loc.title %]"
});

google.maps.event.addListener([% loc.id %], "click", function () {
    var c = "<div id=\"map-[% loc.id %]\" style=\"height: 100px; width: 400px; \"><strong>[% loc.title %]</strong>";
[% IF loc.addr %]    c += "<br/><a href=\"http://maps.google.com/maps?q=[% loc.addr | uri | html %]\" target=\"_gmap\">[% loc.addr %]</a>";[% END %]
    c += "<br/>[% loc.desc %]";
    c += "<br/><a href=\"[% site.uris.schedule %]#[% loc.id %]\">Schedule</a></div>";
[% IF loc.nonmember %]    c += "<br/><em>Non-member instruction and participation available</em>";[% END %]

    iw.setContent(c);
    iw.open(m, [% loc.id %]);
});
[% END %]
