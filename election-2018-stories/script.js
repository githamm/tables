// $(document).ready(function() {
//     var results = [];
//     var url = "https://spreadsheets.google.com/feeds/list/1srj4Sjaza6tWINnhTokOquknBHtSdbnjwksqgdmNgNA/od6/public/values?alt=json";

//     var jqxhr = $.getJSON(url, function() {})
//         .done(function(data) {
//             var entry = data.feed.entry;
//             $(entry).each(function() {
//                 // Column names are name, age, etc.
//                 //results.push({"Id" : this.gsx$id.$t , "Name" : this.gsx$name.$t, "Country" : this.gsx$country.$t, "Solutions" : this.gsx$solutions.$t});
//                 results.push([this.gsx$headline.$t , this.gsx$link.$t, this.gsx$publishdate.$t, this.gsx$storytype.$t, this.gsx$race.$t, this.gsx$keywords.$t]);
//                 console.log(results);
//             });
//             var table = $('#example').DataTable({
//                 data: results,
//                 columns: [
//                     {
//                         data: 'headline'
//                     },
//                     {
//                         data: 'link'
//                     },
//                     {
//                         data: 'publishdate'
//                     },
//                     {
//                         data: 'storytype'
//                     },
//                     {
//                         data: 'race'
//                     },
//                     {
//                         data: 'keywords'
//                     }
//                 ]
//             });
//         })
//         .fail(function() {
//             console.log("error");
//         })
//         .always(function() {
//             console.log("complete");
//         });
// });

$(document).ready(function() {
    var results = [];
    var url = "https://spreadsheets.google.com/feeds/list/1srj4Sjaza6tWINnhTokOquknBHtSdbnjwksqgdmNgNA/od6/public/values?alt=json";
    
    var jqxhr = $.getJSON(url, function() {
        console.log( "success" );
  })
    .done(function(data) {
      console.log( "second success" );
        var entry = data.feed.entry;
    $(entry).each(function(){
        // Column names are name, age, etc.
        //results.push({"Id" : this.gsx$id.$t , "Name" : this.gsx$name.$t, "Country" : this.gsx$country.$t, "Solutions" : this.gsx$solutions.$t});
            results.push([this.gsx$headline.$t , this.gsx$link.$t,  this.gsx$publishdate.$t, this.gsx$storytype.$t, this.gsx$race.$t, this.gsx$keywords.$t]);
      });
      var table = $('#example').DataTable( {
        data: results,
        columns: [
            { title: "Headline" },
            { title: "Link" },
            { title: "Published" },
            { title: "Type" },
            { title: "Race" },
            { title: "Keywords" }
        ]
      });
    })
    .fail(function() {
      console.log( "error" );
    })
    .always(function() {
      console.log( "complete" );
    });
});