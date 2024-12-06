@if($items->count() > 0)
    @foreach($items as $item)
        @php
            $isActive = false;
            $url = null;
            $target = '_self';
            if($item->page) {
                $url = route($item->page->type);
            } else {
                $url = url()->to($item->url);
            }
            if($item->target) {
                $target = $item->target;
            }
            $isActive = request()->fullUrlIs($url);
        @endphp
        <li class="{{ $isActive ? 'active' : '' }}">
            <a href="{{ $url }}" target="{{ $target }}">
                {{ $item->label }}
                @if($item->navItems->count() > 0)
                    <i class="fa-solid fa-angle-down"></i>
                @endif
            </a>
            @if($item->navItems->count() > 0)
                <ul class="dropdown-padding">
                    @foreach($item->navItems as $subItem)
                        @php
                            $isActive = false;
                            $url = null;
                            $target = '_self';
                            if($subItem->page) {
                                $url = route($subItem->page->type);
                            } else {
                                $url = url()->to($subItem->url);
                            }
                            if($subItem->target) {
                                $target = $subItem->target;
                            }
                            $isActive = request()->fullUrlIs($url);
                        @endphp
                        <li class="{{ $isActive ? 'active' : '' }}">
                            <a href="{{ $url }}" target="{{ $target }}">
                                {{ $subItem->label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
@endif
