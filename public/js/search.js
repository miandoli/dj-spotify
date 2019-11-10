function search(e) {
    e.preventDefault();
    var q = this.innerHTML;
    $.ajax({
        type: 'POST',
        url: '/search',
        data = {q: q},
        success: function(data){
            return data;
        }
    });
}
