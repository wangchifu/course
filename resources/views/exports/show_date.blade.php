@extends('layouts.master_clean')

@section('title','匯出課程計畫通過日期')

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-cenbrr">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>彰化縣 {{ $select_year }} 學年度國中小學各校課程計畫通過日期</h2>
                    </div>
                    <table border="1">

                        <tr>
                            <th>
                                學校代碼
                            </th>
                            <th>
                                學校名稱
                            </th>
                            <th>
                                課程計畫經課發會通過日期
                            </th>
                        </tr>

                        <tbody>
                        @foreach($courses as $course)

                        <tr>
                            <td>
                                {{ $course->school_code }}
                            </td>
                            <td>
                                {{ $schools[$course->school_code] }}
                            </td>
                            <td>
                                {{ $course->c10_2_date }}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
