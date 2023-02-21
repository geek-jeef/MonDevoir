@props([
  'color' => 'rgb(var(--color-primary))',
])
<div>
  <div class="flex flex-col justify-center items-center mt-5">
    <svg width="30" viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg" stroke="{{$color}}" class="w-32 h-32">
      <g fill="none" fill-rule="evenodd" transform="translate(1 1)" stroke-width="3">
        <circle cx="22" cy="22" r="6" stroke-opacity="0">
          <animate attributeName="r" begin="3s" dur="1.5s" values="6;22" calcMode="linear" repeatCount="indefinite"></animate>
          <animate attributeName="stroke-opacity" begin="1.5s" dur="3s" values="1;0" calcMode="linear" repeatCount="indefinite"></animate>
          <animate attributeName="stroke-width" begin="3s" dur="1.5s" values="2;0" calcMode="linear" repeatCount="indefinite"></animate>
        </circle>
        <circle cx="22" cy="22" r="6" stroke-opacity="0">
          <animate attributeName="r" begin="3s" dur="3s" values="6;22" calcMode="linear" repeatCount="indefinite"></animate>
          <animate attributeName="stroke-opacity" begin="3s" dur="3s" values="1;0" calcMode="linear" repeatCount="indefinite"></animate>
          <animate attributeName="stroke-width" begin="3s" dur="3s" values="2;0" calcMode="linear" repeatCount="indefinite"></animate>
        </circle>
        <circle cx="22" cy="22" r="6" stroke-opacity="0">
          <animate attributeName="r" begin="1.5s" dur="3s" values="6;22" calcMode="linear" repeatCount="indefinite"></animate>
          <animate attributeName="stroke-opacity" begin="1.5s" dur="3s" values="1;0" calcMode="linear" repeatCount="indefinite"></animate>
          <animate attributeName="stroke-width" begin="1.5s" dur="3s" values="2;0" calcMode="linear" repeatCount="indefinite"></animate>
        </circle>
        <circle cx="22" cy="22" r="8">
          <animate attributeName="r" begin="0s" dur="1.5s" values="6;1;2;3;4;5;6" calcMode="linear" repeatCount="indefinite"></animate>
        </circle>
      </g>
    </svg>
  </div>
</div>