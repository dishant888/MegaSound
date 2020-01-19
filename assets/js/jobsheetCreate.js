  $(document).ready(function() {
    $('#add_team_row').click(function(event) {
      team_role_append();
      team_role_rename();
    });
    $('#add_trans_row').click(function(event) {
      trans_append();
      trans_rename();
    });
    $('#add_agency_row').click(function(event) {
      agency_append();
      agency_rename();
    });
    $(document).on('click', '.emp_role_rem', function(event) {
      if(confirm('Are you sure?'))
      {
        $(this).closest('tr').addClass('bg-danger').fadeOut('slow', function() {
          $(this).remove();team_role_rename();
        });
      }
    });
    $(document).on('click', '.trans_rem', function(event) {
      if(confirm('Are you sure?'))
      {
        $(this).closest('tr').addClass('bg-danger').fadeOut('slow', function() {
          $(this).remove();trans_rename();
        });
      }
    });
    $(document).on('click', '.agency_rem', function(event) {
      if(confirm('Are you sure?'))
      {
        $(this).closest('tr').addClass('bg-danger').fadeOut('slow', function() {
          $(this).remove();agency_rename();
        });
      }
    });
    function team_role_append()
  {
    var f = 0;
    var emp = $('#employee').val();
    var role = $('#role').val();
    if(emp == ''){
      $('#employee').addClass('border border-danger');
      f++;
    }
    else{
      $('#employee').removeClass('border border-danger');
      f--;
    }
    if(role == ''){
      $('#role').addClass('border border-danger');
      f++;
    }
    else{
      $('#role').removeClass('border border-danger');
      f--;
    }
    if(f < 0)
    {
      var tr = '<tr>\n\
      <td></td>\n\
      <td><input type="hidden" value="'+emp+'">'+emp+'</td>\n\
      <td><input type="hidden" value="'+role+'">'+role+'</td>\n\
      <td><a href="javascript:void(0)" class="emp_role_rem"><i class="fa fa-times float-right mr-5"></i></a></td>\n\
      </tr>';
      $('table#emp_role tbody').append(tr);
      $('#employee').val('');
      $('#role').val('');
    }
  }
  function team_role_rename()
  {
    var j = 0;
    var i = 0;
    $('table#emp_role tbody tr').each(function(index, el) {
      $(this).find('td:nth-child(1)').html(++j);
      $(this).find('td:nth-child(2) input').attr('name', 'team_setup_rows['+i+'][team]');
      $(this).find('td:nth-child(3) input').attr('name', 'team_setup_rows['+i+'][role]');
      i++;
    });
  }
  function trans_append()
  {
    var trans_det = $('#transport_det').val();
    var call_rel = $('#call_rel').val();
    var pickup = $('#pickup').val();
    var drop = $('#drop').val();
    var v1 = req(trans_det);
    var v2 = req(call_rel);
    var v3 = req(pickup);
    var v4 = req(drop);

    if(trans_det == ''){
      $('#transport_det').addClass('border border-danger');
    }
    else{
      $('#transport_det').removeClass('border border-danger');
    }

    if(call_rel == ''){
      $('#call_rel').addClass('border border-danger');
    }
    else{
      $('#call_rel').removeClass('border border-danger');
    }

    if(pickup == ''){
      $('#pickup').addClass('border border-danger');
    }
    else{
      $('#pickup').removeClass('border border-danger');
    }

    if(drop == ''){
      $('#drop').addClass('border border-danger');
    }
    else{
      $('#drop').removeClass('border border-danger');
    }

    if(v1 && v2 && v3 && v4)
      {
        var tr = '<tr>\n\
        <td></td>\n\
        <td><input type="hidden" value="'+trans_det+'">'+trans_det+'</td>\n\
        <td><input type="hidden" value="'+call_rel+'">'+call_rel+'</td>\n\
        <td><input type="hidden" value="'+pickup+'">'+pickup+'</td>\n\
        <td><input type="hidden" value="'+drop+'">'+drop+'</td>\n\
        <td><a href="javascript:void(0)" class="trans_rem"><i class="fa fa-times float-right mr-5"></i></a></td>\n\
        </tr>';
        $('table#trans_tab tbody').append(tr);
        $('#transport_det').val('');
        $('#call_rel').val('');
        $('#pickup').val('');
        $('#drop').val('');
      }
  }
  function trans_rename()
  {
    var j = 0;
    var i = 0;
    $('table#trans_tab tbody tr').each(function(index, el) {
      $(this).find('td:nth-child(1)').html(++j);
      $(this).find('td:nth-child(2) input').attr('name', 'transport_rows['+i+'][detail]');
      $(this).find('td:nth-child(3) input').attr('name', 'transport_rows['+i+'][call]');
      $(this).find('td:nth-child(4) input').attr('name', 'transport_rows['+i+'][pickup]');
      $(this).find('td:nth-child(5) input').attr('name', 'transport_rows['+i+'][drop]');
      i++;
    });
  }

  function agency_append()
  {
    var agency_name = $('#agency_name').val();
    var agency_pick = $('#agency_pick').val();
    var v1 = req(agency_pick);
    var v2 = req(agency_name);

    if(agency_name == ''){
      $('#agency_name').addClass('border border-danger');
    }
    else{
      $('#agency_name').removeClass('border border-danger');
    }

    if(agency_pick == ''){
      $('#agency_pick').addClass('border border-danger');
    }
    else{
      $('#agency_pick').removeClass('border border-danger');
    }

    if(v1 && v2)
    {
      var tr = '<tr>\n\
      <td></td>\n\
      <td><input type="hidden" value="'+agency_name+'">'+agency_name+'</td>\n\
      <td><input type="hidden" value="'+agency_pick+'">'+agency_pick+'</td>\n\
      <td><a href="javascript:void(0)" class="agency_rem"><i class="fa fa-times float-right mr-5"></i></a></td>\n\
      </tr>';
      $('table#agency_tab tbody').append(tr);
      $('#agency_name').val('');
      $('#agency_pick').val('');
    }
  }

  function agency_rename()
  {
    var j = 0;
    var i = 0;
    $('table#agency_tab tbody tr').each(function(index, el) {
      $(this).find('td:nth-child(1)').html(++j);
      $(this).find('td:nth-child(2) input').attr('name', 'agency_rows['+i+'][name]');
      $(this).find('td:nth-child(3) input').attr('name', 'agency_rows['+i+'][pickup]');
      i++;
    });
  }

  function req(data)
  {
    if(data == '')
      return false;
    else
      return true;
  }
  });