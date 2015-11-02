$(document).ready(function () {
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});

function send_request(url) {
    "use strict";
    var obj, result;
    obj = $.ajax({url: url, async: false});
    result = $.parseJSON(obj.responseText);
    return result;
}

function get_id(id) {
//    alert(id);
    var pid, url, result;
    pid = id;
    url = "controller.php?cmd=1&id=" + id;
    result = send_request(url);

    load_tutorial(result.desc, result.link);
//    alert(result.link);

}

function load_tutorial(desc, link) {
    "use strict";
    var div;
    div = "";

    div += '<div class = "modal-content">';
    div += '<h5 style = "color: #ff3d00"> Description </h5>';
    div += '<p>' + desc + '</p>';

    div += '<h5 style = "color: #ff3d00"> Tutorial </h5>';
    div += '<div class = "video-container no-controls">';
    div += '<iframe width = "1200" height = "1200" src = "' + link + '" frameborder = "0" allowfullscreen ></iframe>';
//    div += link;
    div += '</div>';
    div += '</div>';

    div += '<div class = "modal-footer">';
    div += '<a id="but" href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat ">Request</a>';
    div += '</div>';

    $('.my_modal').html(div);

}