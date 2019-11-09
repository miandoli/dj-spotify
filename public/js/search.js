function search(e){
    e.preventDefault();
    var q = this.innerHTML;
    $.ajax({
        type: 'GET',
        url: '/search',
        data = {q: q},
        success: function(data){
            return data;
        }
    });
}