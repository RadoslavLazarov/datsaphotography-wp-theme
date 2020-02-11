<style>
    
.ngg-albumoverview.default-view .ngg-navigation {
    position: absolute;
    bottom: -50px;
}
/* =========== CATEGORIES PAGE =========== */

#gallery-page .ngg-albumoverview.default-view {
    display: flex !important;
    flex-wrap: wrap;
    justify-content: center;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album {
    border: 0;
    padding: 5px;
    margin-bottom: 0;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent {
    position: relative;
    display: flex;
    justify-content: center;
    overflow: hidden;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent .ngg-albumtitle {
    position: absolute;
    z-index: 1;
    top: 5%;
    left: 0;
    width: 100%;
    transition: transform 1s cubic-bezier(.52,.01,.16,1);
    padding: 25px;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent a {
    font-family: 'Cormorant Infant', serif;
    display: block;
    color: #fff;
    font-size: 2.5em;
    font-weight: 400;
    text-align: center;
    text-transform: none;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent .thumbnail-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    opacity: 0;
    transition: opacity 1s cubic-bezier(.52,.01,.16,1);
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent a:hover {
    text-decoration: none;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent .ngg-description {
    position: absolute;
    z-index: 1;
    bottom: 0px;
    margin: 0;
    width: 100%;
    transform: translateY(101%);
    transition: transform 1s cubic-bezier(.52,.01,.16,1);
    /* display: none; */
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent .ngg-thumbnail .Thumb {
    transition: transform 1s cubic-bezier(.52,.01,.16,1);
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:hover .ngg-albumtitle,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:focus .ngg-albumtitle,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:active .ngg-albumtitle {
    transform: translateY(50%);
}

@media (max-width: 800px) {
    #gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent .ngg-albumtitle .gallery_link {
        font-size: 2em;
    }   
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:hover .ngg-description,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:focus .ngg-description,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:active .ngg-description {
    transform: translateY(0);
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:hover .thumbnail-overlay,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:focus .thumbnail-overlay,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:active .thumbnail-overlay {
    opacity: 1;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:hover .Thumb,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:focus .Thumb,
#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent:active .Thumb {
    transform: scale(1.1);
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent .ngg-description p {
    display: block;
    width: 100%;
    padding: 5% 10%;
    margin: 0;
    color: #fff;
    text-align: unset;
    font-size: 1.063em;
    font-style: italic;
}

#gallery-page .ngg-albumoverview.default-view .ngg-album .ngg-albumcontent .ngg-thumbnail {
    margin: 0;
}


/* =========== END CATEGORIES PAGE =========== */

/* =========== ALBUMS PAGE =========== */
.ngg-albumoverview.default-view {
    display: flex !important;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
    margin-bottom: 0;
}

.ngg-albumoverview.default-view .ngg-album-compact {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 !important;
    padding: 0 !important;
    border: unset;
    box-shadow: unset;
    width: 50%;
}

@media (max-width: 768px) {
    .ngg-albumoverview.default-view .ngg-album-compact {
        width: 100%;
    }
}

.ngg-albumoverview.default-view .ngg-album-compactbox {
    padding: 0 !important;
    margin: 10px !important;
    overflow: hidden;
    border-radius: unset;
    width: 100%;
}

#recommended-albums .ngg-albumoverview.default-view .ngg-album-compactbox {
    margin: 0 !important;
}

.ngg-albumoverview.default-view .ngg-album-compactbox .ngg-album-link  {
    height: 100%;
    transition: .72s cubic-bezier(.52,.01,.16,1);
}

.ngg-albumoverview.default-view .ngg-album-compactbox:hover .ngg-album-link,
.ngg-albumoverview.default-view .ngg-album-compactbox:focus .ngg-album-link,
.ngg-albumoverview.default-view .ngg-album-compactbox:active .ngg-album-link  {
    transform: scale(1.1);
}

.ngg-albumoverview.default-view .ngg-album-compactbox .Thumb {
    width: 100%;
}

#recommended-albums .ngg-albumoverview.default-view .ngg-album-compactbox .Thumb {
    width: unset;
}

.ngg-albumoverview.default-view .ngg-album-compact h4 {
    position: absolute;
    z-index: 1;
    pointer-events: none;
    margin: 0;
    font-size: 1.125em;
}

@media (max-width: 768px) {
    .ngg-albumoverview.default-view .ngg-album-compact {
        width: 100%;
    }
}

.ngg-albumoverview.default-view .ngg-album-compact h4 .ngg-album-desc {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
    font-size: 1.25em;
    color: white;
    text-transform: uppercase;
    text-decoration: unset;
}

@media (max-width: 400px) {
    .ngg-albumoverview.default-view .ngg-album-compact h4 .ngg-album-desc {
        font-size: 1em;
    }
}

.ngg-albumoverview.default-view .ngg-album-compactbox .thumbnail-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    transform: scale(0.7);
    background-color: rgba(0,0,0,0.6);
    transition: all .72s cubic-bezier(.52,.01,.16,1);
}

.ngg-albumoverview.default-view .ngg-album-compactbox:hover .thumbnail-overlay,
.ngg-albumoverview.default-view .ngg-album-compactbox:focus .thumbnail-overlay,
.ngg-albumoverview.default-view .ngg-album-compactbox:active .thumbnail-overlay {
    opacity: 1;
    transform: scale(1);
}
/* =========== END ALBUMS PAGE =========== */

/* =========== ALBUM PAGE =========== */
.sl-caption {
    display: none !important;
}

.ngg-galleryoverview.default-view {
    display: block !important;
    width: 99vw;
}

.ngg-gallery-thumbnail-box  {
    width: 25%;
}

@media (max-width: 700px) {
    .ngg-gallery-thumbnail-box  {
        width: 50%;
    }
}

.ngg-gallery-thumbnail {
    padding: 1px;
}

.ngg-galleryoverview.default-view .ngg-gallery-thumbnail a {
    overflow: hidden;
    margin: 0;
}

.ngg-galleryoverview.default-view .ngg-gallery-thumbnail img {
    transition: transform 2s ease-in-out, opacity .3s ease-in-out;
    /* transition: opacity .5s ease-in-out; */
}

.ngg-galleryoverview.default-view .ngg-gallery-thumbnail img:hover,
.ngg-galleryoverview.default-view .ngg-gallery-thumbnail img:focus,
.ngg-galleryoverview.default-view .ngg-gallery-thumbnail img:active {
    opacity: .7;
    transform: scale(1.1);
}

.page-numbers, .current {
    border-radius: 0 !important;
}
/* =========== END ALBUM PAGE =========== */
</style>