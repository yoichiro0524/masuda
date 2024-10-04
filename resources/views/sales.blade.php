<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>本日の売上【泉南店】</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  {{-- 日付選択用 --}}
  <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js"></script>
  <script src="https://unpkg.com/flatpickr@4.6.3/dist/l10n/ja.js"></script>

  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }
    }
  </style>

  <style>
    body {
      font-family: "Helvetica Neue",
        Arial,
        "Hiragino Kaku Gothic ProN",
        "Hiragino Sans",
        Meiryo,
        sans-serif;
    }
  </style>
</head>

<body class="container bg-light">
  <div class="mt-3 mb-3 h4">日付別売上集計【泉南店】</div>

  <div class="row mb-3">
    <div class="col-auto">
      <select class="form-select" name="pets" id="pet-select">
        <option selected value="hoge">泉南店</option>
        <option value="dog">大阪店</option>
        <option value="cat">浦安店</option>
        <option value="hamster">苫小牧店</option>
        <option value="parrot">広島店</option>
        <option value="spider">喜連瓜破店</option>
        <option value="goldfish">中野店</option>
      </select>
    </div>
  </div>

  <form id="date_form">
    @csrf
    <div class="row">
      <div class="col-auto">
        <div class="input-group mb-3">
          <button class="btn btn-outline-primary" type="button" id="btn_date_prev">前日</button>
          <input type="text" name="sales_date" class="form-control" placeholder="" id="display_date" value=""
            aria-label="Example text with button addon" aria-describedby="button-addon1" style="max-width: 150px">
          <button class="btn btn-outline-primary" type="button" id="btn_date_next">翌日</button>
        </div>
      </div>
      <div class="col-auto">
        <button class="btn btn-outline-primary" type="button" id="btn_date_today">今日</button>
      </div>

      <div class="col-auto mb-3">
        <button class="btn btn-outline-primary col-auto" id="js-calendar">カレンダー</button>
      </div>

      <div class="col-auto mb-3 ">
        <div class="spinner-border text-warning" role="status" id="spinner">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
  </form>



  @php
    $calc = intVal($money_one) + intVal($money_two) + intVal($money_three) + intVal($money_four);
    $total = number_format($calc, 0, '.', ',');
    $after = number_format($calc - intVal($discount), 0, '.', ',');
    $dis = number_format(intVal($discount), 0, '.', ',');
  @endphp

  <div class="row">
    <div class="col-12">
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="table-primary">
            <th scope="col"></th>
            <th scope="col">値引前金額</th>
            <th scope="col">値引額</th>
            <th scope="col">税込純売上</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">合計</th>
            <td class="after">{{ $after }}</td>
            <td class="discount">{{ $dis }}</td>
            <td class="total">
              {{ $total }}</td>
          </tr>
          <tr>
            <th scope="row">技術売上</th>
            <td class="after">{{ $after }}</td>
            <td class="discount">{{ $dis }}</td>
            <td class="total">
              {{ $total }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <div class="col-8">
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="table-primary">
            <th scope="col"></th>
            <th scope="col">金額</th>
            <th scope="col">人数</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">レジ精算額</th>
            <td class="money_one">{{ number_format($money_one, 0, '.', ',') }}</td>
            <td class="people_one">{{ $people_one . '人' }}</td>
          </tr>
          <tr>
            <th scope="row">現金</th>
            <td class="money_two">{{ number_format($money_two, 0, '.', ',') }}</td>
            <td class="people_two">{{ $people_two . '人' }}</td>
          </tr>
          <tr>
            <th scope="row">カード</th>
            <td class="money_three">{{ number_format($money_three, 0, '.', ',') }}</td>
            <td class="people_three">{{ $people_three . '人' }}</td>
          </tr>
          <tr>
            <th scope="row">その他</th>
            <td class="money_four">{{ number_format($money_four, 0, '.', ',') }}</td>
            <td class="people_four">{{ $people_four . '人' }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    $(() => {

      $('#spinner').hide();

      let displayDate = new Date('{{ $date }}')
      $("#display_date").val(moment(displayDate).format("YYYY-MM-DD"));

      //前日
      $("#btn_date_prev").on("click", () => {
        displayDate.setDate(displayDate.getDate() - 1);
        $("#display_date").val(moment(displayDate).format("YYYY-MM-DD"));
        $('#date_form').submit();
      });

      //翌日
      $("#btn_date_next").on("click", function() {
        displayDate.setDate(displayDate.getDate() + 1);
        $("#display_date").val(moment(displayDate).format("YYYY-MM-DD"));
        $('#date_form').submit();
      });

      //今日
      $("#btn_date_today").on("click", function() {
        displayDate = new Date()
        $("#display_date").val(moment(displayDate).format("YYYY-MM-DD"));
        $('#date_form').submit();
      });


      flatpickr("#js-calendar", {
        disableMobile: "true",
        onValueUpdate(selectedDates, dateStr) {
          displayDate = new Date(dateStr);
          $("#display_date").val(moment(displayDate).format("YYYY-MM-DD"));
          $('#date_form').submit();
        }
      });

      $('#date_form').on('submit', function(e) {

        $('#spinner').show();

        // 初期設定
        let salesDate = $('input[name="sales_date"]').val();

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $("[name='csrf-token']").attr("content")
          },
        })
        $.ajax({
            url: '/api/fetch',
            type: "POST",
            data: {
              sales_date: salesDate
            },
            dataType: "json"
          })
          // 成功した時
          .done(function(res) {
            let discount = Number(res['discount'])
            $(".discount").text(discount.toLocaleString());

            let money_one = Number(res['money_one'])
            let money_two = Number(res['money_two'])
            let money_three = Number(res['money_three'])
            let money_four = Number(res['money_four'])

            $(".money_one").text(money_one.toLocaleString());
            $(".money_two").text(money_two.toLocaleString());
            $(".money_three").text(money_three.toLocaleString());
            $(".money_four").text(money_four.toLocaleString());

            $(".people_one").text(res['people_one'] + '人');
            $(".people_two").text(res['people_two'] + '人');
            $(".people_three").text(res['people_three'] + '人');
            $(".people_four").text(res['people_four'] + '人');

            let total = money_one + money_two + money_three + money_four
            let after = total - discount
            $(".total").text(total.toLocaleString());
            $(".after").text(after.toLocaleString());

            $('#spinner').hide();

          })
          // 失敗した時
          .fail(function(jqXHR, textStatus, errorThrown) {
            alert('取得に失敗しました。：' + textStatus + ':\n' + errorThrown);
            $('#spinner').hide();
            location.reload();
          });
        return false;
      });
    });
  </script>
</body>

</html>
