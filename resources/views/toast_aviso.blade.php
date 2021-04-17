<div aria-live="polite" aria-atomic="true" style="position: fixed; top: 0; right: 0; z-index: 999999;">
  <div class="toast-container sticky-top">
  <div class="toast" id="toast_aviso" data-delay="7000"  aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        	<strong class="mr-auto">
          		<span id="toast_titulo">{{ config('app.name', 'TesteApp') }}</span>
        	</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
      </div>
      <div class="toast-body" id="toast_mensagem"></div>
  </div>
</div>
</div>