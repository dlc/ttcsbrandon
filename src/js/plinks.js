[% META
    type = 'text'
%]// (C) Copyright 2008-[% date.format(template.modtime, '%Y') %] Taoist Tai Chi Society of the USA
// See [% site.uris.contact %] to contact this branch of the Society.
// See [% site.uris.colophon %] for information about how this site is built, if that's your thing,
// or [% site.uris.humans %] to see who's to blame for this site.
//

// This function was shamelessly stolen from http://www.tbray.org/ongoing/When/200x/2004/05/29/PurpleNumbers
function addpLinks() {
    var paras = document.getElementsByTagName('p');
    for (var i = 0; i < paras.length; i++) {
        var current = paras[i];
        if (/^p-/.test(current.id)) {
            // It's a purple link paragraph
            var plink = document.createElement('a');
            plink.href = document.location.href.split('#')[0] + '#' + current.id;
            plink.className = 'plink';
            plink.appendChild(document.createTextNode(' ¶'));
            current.appendChild(plink);
        }
    }
}

window.onload = function(e) {
    addpLinks();
}

