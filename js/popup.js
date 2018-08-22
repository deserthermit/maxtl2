    var link = document.querySelectorAll(".call_order");
    link0 = link[0];
    link1 = link[1];
    link2 = link[2];
    link3 = link[3];
    link4 = link[4];
    link5 = link[5];
 

    var popup = document.querySelector(".modal");
    var overlay = document.querySelector(".modal-overlay")
    
    var close = document.querySelector(".modclose");
    var userdata = popup.querySelector("[name=userdata]");
    var usercomment = popup.querySelector("[name=usercomment]");

    var isStorageSupport = true;
    var storage = "";

    try {
        storage = localStorage.getItem("userdata");
    } catch (err) {
        isStorageSupport = false;
    }

    link0.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup.classList.add("modal-show");
        overlay.classList.add("show-overlay");

        if (storage) {
            userdata.value = storage;
            usercomment.focus();
        } else {
            userdata.focus();
        }


    });

    link1.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup.classList.add("modal-show");
        overlay.classList.add("show-overlay");

        if (storage) {
            userdata.value = storage+isStorageSupport;
            usercomment.focus();
        } else {
            userdata.focus();
        }
    });

    link2.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup.classList.add("modal-show");
        overlay.classList.add("show-overlay");

        if (storage) {
            userdata.value = storage;
            usercomment.focus();
        } else {
            userdata.focus();
        }


    });


    link3.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup.classList.add("modal-show");
        overlay.classList.add("show-overlay");

        if (storage) {
            userdata.value = storage;
            usercomment.focus();
        } else {
            userdata.focus();
        }


    });

    link4.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup.classList.add("modal-show");
        overlay.classList.add("show-overlay");

        if (storage) {
            userdata.value = storage;
            usercomment.focus();
        } else {
            userdata.focus();
        }


    });



    close.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup.classList.remove("modal-show");
        overlay.classList.remove("show-overlay");

     });
    overlay.addEventListener("click", function (evt) {
        evt.preventDefault();
        popup.classList.remove("modal-show");
        overlay.classList.remove("show-overlay");

     });


    window.addEventListener("keydown", function (evt) {
        if (evt.keyCode === 27) {
            evt.preventDefault();
            if (popup.classList.contains("modal-show")) {
                popup.classList.remove("modal-show");
                overlay.classList.remove("show-overlay");

            }
        }
    });
