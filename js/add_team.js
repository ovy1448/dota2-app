function addTeam(slug){
    

    var name = slug;
    /* console.log(slug); */

    var bookmark = {
        name:name
    };
    if(localStorage.getItem("bookmarks")===null){
        var bookmarks = [];
        bookmarks.push(bookmark);
        localStorage.setItem("bookmarks", JSON.stringify(bookmarks));
    }   else {
        var bookmarks = getBookmarks();
        bookmarks.push(bookmark);
        localStorage.setItem("bookmarks", JSON.stringify(bookmarks));
    };
};

function getBookmarks() {
    var bookmarks = localStorage.getItem("bookmarks");
    if (!bookmarks) {
        return null;
    };
    return JSON.parse(bookmarks);
}