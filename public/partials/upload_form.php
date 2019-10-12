<div class="upload">
  <h1 class="title">192.168.0.<em class="title-highlight">X</em></h1>

  <label for="file" class="upload-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="133.85" height="116.65">
      <g fill="#f5f7fc" stroke-linecap="round">
        <path d="M102.58 94.93c-.6 0-1.22-.02-1.82-.06l-4.8-.32v.38H37.9v-.38l-4.8.32a26.54 26.54 0 01-20.75-7.8A26.76 26.76 0 014.5 68.1a26.8 26.8 0 0122.44-26.5l3.43-.55.33-3.46a36.5 36.5 0 0111.75-23.5 36.51 36.51 0 0124.7-9.58c9.17 0 17.95 3.41 24.7 9.6a36.5 36.5 0 0111.74 23.55l.32 3.41 3.38.6a26.79 26.79 0 0122.06 26.43 26.73 26.73 0 01-7.84 18.98 26.69 26.69 0 01-18.93 7.86z"/><path d="M102.58 90.43a22.33 22.33 0 0022.27-22.34 22.27 22.27 0 00-18.35-22l-6.75-1.2-.64-6.82A31.95 31.95 0 0067.14 9a31.96 31.96 0 00-31.96 29.01l-.66 6.91-6.85 1.12A22.22 22.22 0 009 68.09a22.33 22.33 0 0023.8 22.3l9.6-.58v.62h49.05v-.7l9.6.65c.51.04 1.02.05 1.53.05m0 9c-.72 0-1.42-.02-2.13-.07v.07H33.4v-.07A31.3 31.3 0 010 68.1a31.33 31.33 0 0126.22-30.94 41.12 41.12 0 0181.85.08 31.33 31.33 0 0125.78 30.86 31.3 31.3 0 01-31.27 31.34z" fill="#0031ff"/>
      </g>
      <path fill="#f5f7fc" d="M38.22 67.18H93.8v49.47H38.22z"/>
      <path fill="none" stroke="#0031ff" stroke-linecap="square" stroke-width="9" d="M65.97 108.4V64.07"/>
      <path d="M48.16 75.9L66.2 57.4 84.25 75.9" fill="none" stroke="#0031ff" stroke-linecap="square" stroke-width="9"/>
    </svg>
  </label>
  <form action="/" method="post" enctype="multipart/form-data">
    <label for="file" class="upload-label">Send files directly and fast:</label>
    <div class="upload-input">
      <label for="file" class="upload-input-button">Browse Files</label>
      <input name="file" type="file" id="file" class="upload-input-field">
    </div>
    <!-- TODO: automatically start upload once file dialog is closed -->
    <button type="submit">Upload</button>
  </form>
</div>
