@extends('layouts.designer-customer.index')

@section('content')

<div class="content">

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            التذاكر السابقه
        </h2>

        <div class="w-full sm:w-auto flex flex-wrap gap-y-3 mt-4 sm:mt-0">
            <a href="{{ myRoute('designer.tickets.create') }}" class="btn btn-primary shadow-md ml-2">اضافة تذكرة جديدة </a>
        </div>

    </div>


    <div class="intro-y overflow-auto lg:overflow-visible">
        <table style="text-align: right;margin-top: 20px;" class="table">

            <thead class="table-dark">
                <tr>
                    <th class="whitespace-nowrap">#</th>
                    <th class="whitespace-nowrap">رقم التذكرة</th>
                    <th class="whitespace-nowrap">عنوان التذكرة</th>
                    <th class="text-center whitespace-nowrap">حالة التذكرة</th>
                    <th class="text-center whitespace-nowrap">انشأت في</th>
                    <th class="text-center whitespace-nowrap">تفاصيل الرد</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tickets as $index =>  $ticket)

                <tr class="intro-x">
                    <td> {{ $index +  1 }} </td>
                    <td class="w-40 !py-8">  #{{$ticket->id}} </td>
                    <td>
                        <div class="font-medium whitespace-nowrap">{{$ticket->title}}</div>
                    </td>
                    <td>

                        @if ($ticket->status == 0)
                        <span class="text-xs whitespace-nowrap text-warning bg-warning/20 border border-warning/20 rounded-full px-2 py-1">في انتظار الرد</span>
                        @elseif ($ticket->status == 1)
                        <span class="text-xs whitespace-nowrap text-success bg-success/20 border border-success/20 rounded-full px-2 py-1">تم الرد</span>
                       @else
                       <span class="text-xs whitespace-nowrap text-danger bg-danger/20 border border-danger/20 rounded-full px-2 py-1">لم يتم الرد</span>
                        @endif


                        </td>

                    <td>
                        <div class="font-medium whitespace-nowrap">{{$ticket->created_at}}</div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                                              <div id="static-backdrop-modal11" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center"> <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal11-preview" class="btn btn-primary">تفاصيل الرد</a> </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="static-backdrop-modal11-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body px-5 py-10">
                                        <div class="text-center">
                                            <div class="mb-5">I will not close if you click outside me. Dont even try to press escape key.</div>
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-static-backdrop-modal11" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-static-backdrop-modal11" class="source-preview"> <code class="html"> HTMLOpenTag!-- BEGIN: Modal Toggle --HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; data-tw-toggle=&quot;modal&quot; data-tw-target=&quot;#static-backdrop-modal11-preview&quot; class=&quot;btn btn-primary&quot;HTMLCloseTagتفاصيل الردHTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Toggle --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;static-backdrop-modal11-preview&quot; class=&quot;modal&quot; data-tw-backdrop=&quot;static&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-dialog&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-content&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-body px-5 py-10&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;mb-5&quot;HTMLCloseTagI will not close if you click outside me. Don&#039;t even try to press escape key.HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; data-tw-dismiss=&quot;modal&quot; class=&quot;btn btn-primary w-24&quot;HTMLCloseTagOkHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Content --HTMLCloseTag </code> </pre>
                        </div>
                    </div>
                </div>
                        </div>
                    </td>
                </tr>

                @endforeach



            </tbody>
        </table>
    </div>


</div>

@endsection
