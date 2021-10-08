$(document).ready(function ($) {
  Site.run();


  ////////////////////////////////////////////////////////
  tr = $("#table tbody tr").clone()

  $('.selectpicker').change(function () {

    //reset table
    $("#table tbody tr").remove()
    $("#table tbody").append(tr)

    //apply filtering on table
    $(".mrq-dd").each(function () {
      if (this.tagName === "SELECT") {
        // Get Selected Items from Drop Down
        var options = $(this).find('option:selected');
        let selected = [];
        $(options).each(function () {
          selected.push($(this).text().trim().toLowerCase());
          // or $(this).val() for 'id'
        });
        // selected
        console.log(selected)
        if (selected.length !== 0) {
          debugger
          let tableId = this.getAttribute('data-mrq-table-id')
          let colNo = this.getAttribute('data-mrq-col-no')
          console.log(`#${tableId}`);
          $(`#${tableId}`).find('tr').each(function () {
            let j = 0
            $(this).find('td').each(function () {
              if (j == colNo) {

                if (!selected.includes($(this).text().trim().toLowerCase())) {
                  $(this).parent().remove()
                }
              }
              j++
            })
          })
        }
      }
    })

    $("ul.mrq-cb").each(function () {
      if (this.tagName === "UL") {
        // Get Selected Items from Drop Down
        var options = $(this).find('input:checked');
        let selected = [];
        $(options).each(function () {
          debugger
          selected.push($(this).val().trim().toLowerCase());
          // or $(this).val() for 'id'
        });
        // selected
        console.log(selected)
        if (selected.length !== 0) {
          debugger
          let tableId = this.getAttribute('data-mrq-table-id')
          let colNo = this.getAttribute('data-mrq-col-no')
          console.log(`#${tableId}`);
          $(`#${tableId}`).find('tr').each(function () {
            let j = 0
            $(this).find('td').each(function () {
              if (j == colNo) {

                if (!selected.includes($(this).text().trim().toLowerCase())) {
                  $(this).parent().remove()
                }
              }
              j++
            })
          })
        }
      }
    })
  })







  $('ul.mrq-cb').find('input[type=checkbox]').change(function () {

    //reset table
    $("#table tbody tr").remove()
    $("#table tbody").append(tr)

    //apply filtering on table
    $(".mrq-dd").each(function () {
      if (this.tagName === "SELECT") {
        // Get Selected Items from Drop Down
        var options = $(this).find('option:selected');
        let selected = [];
        $(options).each(function () {
          selected.push($(this).text().trim().toLowerCase());
          // or $(this).val() for 'id'
        });
        // selected
        console.log(selected)
        if (selected.length !== 0) {
          debugger
          let tableId = this.getAttribute('data-mrq-table-id')
          let colNo = this.getAttribute('data-mrq-col-no')
          console.log(`#${tableId}`);
          $(`#${tableId}`).find('tr').each(function () {
            let j = 0
            $(this).find('td').each(function () {
              if (j == colNo) {

                if (!selected.includes($(this).text().trim().toLowerCase())) {
                  $(this).parent().remove()
                }
              }
              j++
            })
          })
        }
      }
    })

    $("ul.mrq-cb").each(function () {
      if (this.tagName === "UL") {
        // Get Selected Items from Drop Down
        var options = $(this).find('input:checked');
        let selected = [];
        $(options).each(function () {
          debugger
          selected.push($(this).val().trim().toLowerCase());
          // or $(this).val() for 'id'
        });
        // selected
        console.log(selected)
        if (selected.length !== 0) {
          debugger
          let tableId = this.getAttribute('data-mrq-table-id')
          let colNo = this.getAttribute('data-mrq-col-no')
          console.log(`#${tableId}`);
          $(`#${tableId}`).find('tr').each(function () {
            let j = 0
            $(this).find('td').each(function () {
              if (j == colNo) {

                if (!selected.includes($(this).text().trim().toLowerCase())) {
                  $(this).parent().remove()
                }
              }
              j++
            })
          })
        }
      }
    })
  })

  $(".mrq-container").find('input[type=submit]').on('click', function () {


    $("#table tbody tr").remove()
    $("#table tbody").append(tr)
    let colNo = this.getAttribute('data-mrq-col-no')
    $(`#table`).find('tr').each(function () {
      let j = 0
      let found = false
      debugger
      $(this).find('td').each(function () {
        if (colNo && j == colNo) {
          if (!$(this).text().trim().includes($('#mrq-search').val().trim().toLowerCase())) {
            found = true
          }
        }
        else if (!colNo) {
          if ($(this).text().trim().toLowerCase().includes($('#mrq-search').val().trim().toLowerCase())) {
            found = true
          }
        }
        j++
      })

      if (found == false) {
        $(this).remove()
      }
    })
  })




  $("#mrq-dd-violations").on('change', function () {
    debugger
    if (this.value.trim().toLowerCase().includes('month')) {
      $("#mrq-v1").text('V.001-01')
      $("#mrq-v2").text('02 Violations')
      $("#mrq-v3").text('17%')
      $("#mrq-v4").text('more than yesterday')
    }
    else {
      $("#mrq-v1").text('M.493-21')
      $("#mrq-v2").text('39 Violations')
      $("#mrq-v3").text('11%')
      $("#mrq-v4").text('more than last year')
    }
  })

  $("#mrq-dd-maintenance").on('change', function () {
    debugger
    if (this.value.trim().toLowerCase().includes('month')) {
      $("#mrq-m1").text('V.001-02')
      $("#mrq-m2").text('05 Maintenances')
      $("#mrq-m3").text('10%')
      $("#mrq-m4").text('more than yesterday')
    }
    else {
      $("#mrq-m1").text('X.54489-38')
      $("#mrq-m2").text('68 Maintenances')
      $("#mrq-m3").text('27%')
      $("#mrq-m4").text('more than last year')
    }
  })



  $("#mrq-dd-status").on('change', function () {

    if (this.value.trim().toLowerCase().includes('month')) {
      simple_line_chart1.load({
        unload: true,
        columns: [

          ['download', 24, 7, 12, 3],
        ],
      });
    }
    else {
      simple_line_chart1.load({
        unload: true,
        columns: [

          ['download', 211, 84, 149, 96],
        ],
      });
    }
  });

  $("#mrq-dd-status2").on('change', function () {

    if (this.value.trim().toLowerCase().includes('month')) {
      simple_line_chart2.load({
        unload: true,
        columns: [

          ['download', 24, 7, 12, 3],
        ],
      });
    }
    else {
      simple_line_chart2.load({
        unload: true,
        columns: [

          ['download', 211, 84, 149, 96],
        ],
      });
    }
  });
  $("#mrq-dd-status4").on('change', function () {

    if (this.value.trim().toLowerCase().includes('month')) {
      simple_line_chart4.load({
        unload: true,
        columns: [

          ['download', 24, 7, 12, 3, 24, 7, 12, 3],
        ],
      });
    }
    else {
      simple_line_chart4.load({
        unload: true,
        columns: [

          ['download', 44, 17, 12, 13, 24, 7, 12, 3],
        ],
      });
    }
  });

  $("#mrq-dd-status3").on('change', function () {

    if (this.value.trim().toLowerCase().includes('month')) {
      simple_line_chart3.load({
        unload: true,
        columns: [

          ['download', 24, 7, 12, 3],
        ],
      });
    }
    else {
      simple_line_chart3.load({
        unload: true,
        columns: [

          ['download', 211, 84, 149, 96],
        ],
      });
    }
  });

  $("#table").tablesorter({
    sortList: [[0, 0]],
  });

  // $("#mrq-sort")

  $('#mrq-sort').change(function () {
    var column = parseInt($(this).val(), 10),
      direction = 0, // 0 = descending, 1 = ascending
      sort = [[column, direction]];
    if (column >= 0) {
      $('#table').trigger("sorton", [sort]);
    }
  });

  $.tablesorter.filter.bindSearch($('#table'), $('#mrq-sort'));
  $('#mrq-sort').on('change', function () {
    debugger
    $('#table')
      .data('filter_value', $(this).val())
      .trigger('update');
  });

  // $('ul.mrq-cb').find('input[type=checkbox]').change(function () {

  //   //reset table
  //   $("#table tbody tr").remove()
  //   $("#table tbody").append(tr)

  //   //apply filtering on table
  //   $("ul.mrq-cb").each( function() {
  //     if (this.tagName === "UL") {
  //       // Get Selected Items from Drop Down
  //       var options = $(this).find('input:checked');
  //       let selected = [];
  //       $(options).each( function() {
  //         debugger
  //         selected.push( $(this).val().trim().toLowerCase() ); 
  //         // or $(this).val() for 'id'
  //       });
  //       // selected
  //       console.log(selected)
  //       if (selected.length !== 0) {
  //         debugger
  //         let tableId = this.getAttribute('data-mrq-table-id')
  //         let colNo = this.getAttribute('data-mrq-col-no')
  //         console.log(`#${tableId}`);
  //         $(`#${tableId}`).find('tr').each(function(){
  //           let j = 0
  //           $(this).find('td').each(function(){
  //             if (j == colNo){

  //               if ( !selected.includes($(this).text().trim().toLowerCase()) ){
  //                 $(this).parent().remove()
  //               }
  //             }
  //             j++
  //           })
  //         })
  //       }
  //     }
  //   })
  // })
  ////////////////////////////////////////////////////////
});



$("[data-toggle=popover]").each(function (i, obj) {
  $(this).popover({
    html: true,
    content: function () {
      var id = $(this).attr('id');
      return $('#popover-content-' + id).html();
    }
  });
});





(function () {
  $('.date').datepicker();
})();

