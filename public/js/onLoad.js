window.onload = function() {
    var path = window.location.pathname;
    if(path != "/")
    {
        return false;
    }

    // Get the modal
    var modal = document.getElementById("weekComp2020Modal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("weekComp2020");
    var modalImg = document.getElementById("weekComp2020Inner");
    var captionText = document.getElementById("weekComp2020InnerCaption");

    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("weekComp2020Close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
}
