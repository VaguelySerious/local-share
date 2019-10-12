<html>
	<head>
		<title>Upload</title>
		<style>
			@font-face {
				font-family: 'IBM Plex Mono';
				src: url('/fonts/ibmplexmono-bold-webfont.woff2') format('woff2'),
						 url('/fonts/ibmplexmono-bold-webfont.woff') format('woff');
				font-weight: 700;
				font-style: normal;
			}

			@font-face {
				font-family: 'IBM Plex Sans';
				src: url('/fonts/ibmplexsans-regular-webfont.woff2') format('woff2'),
						 url('/fonts/ibmplexsans-regular-webfont.woff') format('woff');
				font-weight: 400;
				font-style: normal;
			}

			@font-face {
				font-family: 'IBM Plex Sans';
				src: url('/fonts/ibmplexsans-semibold-webfont.woff2') format('woff2'),
						 url('/fonts/ibmplexsans-semibold-webfont.woff') format('woff');
				font-weight: 600;
				font-style: normal;
			}


			html {
				background: #f6f7fc;
				box-sizing: border-box;
				font-size: 16px;
				height: 100%;
				text-align: center;
				text-rendering: optimizeLegibility;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				-moz-font-feature-settings: "liga" on;
				width: 100%;
			}

			html *, html *::after, html *::before {
				box-sizing: inherit;
			}

			body {
				color: #3A446B;
				display: flex;
				flex-direction: column;
				font: 400 1rem/1.5 'IBM Plex Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
				margin: 0;
				min-height: 100%;
			}

			img {
				max-width: 100%;
			}

			hr {
				height: 0;
			}

			abbr[title] {
				text-decoration: underline dotted;
			}

			b,
			strong {
				font-weight: 700;
			}

			code,
			kbd,
			samp,
			pre {
				font-family: SFMono-Regular, Consolas, 'Liberation Mono', Menlo, Courier, monospace;
				font-size: 1em;
			}

			small {
				font-size: 80%;
			}

			sub,
			sup {
				font-size: 75%;
				line-height: 0;
				position: relative;
				vertical-align: baseline;
			}

			sub {
				bottom: -0.25em;
			}

			sup {
				top: -0.5em;
			}

			figure {
				margin: 0;
			}

			button,
			input,
			optgroup,
			select,
			textarea {
				font-family: inherit;
				font-size: 100%;
				line-height: 1.15;
				margin: 0;
			}

			button,
			select {
				outline: 0;
				text-transform: none;
			}

			button,
			[type='button'],
			[type='reset'],
			[type='submit'] {
				-webkit-appearance: button;
			}

			button::-moz-focus-inner,
			[type='button']::-moz-focus-inner,
			[type='reset']::-moz-focus-inner,
			[type='submit']::-moz-focus-inner {
				border-style: none;
				padding: 0;
			}

			button:-moz-focusring,
			[type='button']:-moz-focusring,
			[type='reset']:-moz-focusring,
			[type='submit']:-moz-focusring {
				outline: 1px dotted ButtonText;
			}

			[contenteditable=true] {
				outline: 0;

				&:empty::before {
					content: attr(placeholder);
					display: block; // Firefox
				}
			}

			.title {
				color: #000;
				font: 700 calc(1.25rem + 0.5vw)/1.125 'IBM Plex Mono', monospace;
				margin: 0 0 calc(3em + 2vmin); }

				.title-highlight {
					color: #2720ff;
					font-style: normal; }

			.headline {
				color: #000;
				font: 700 calc(1rem + 0.25vw)/1.125 'IBM Plex Mono', monospace;
				margin: 0 0 1.5em;
			}

			.upload {
				overflow: hidden;
				padding: 2.5em 1em calc(4em + 2vmin); }

				.upload-icon {
					cursor: pointer;
					display: block;
					height: 8.25rem;
					margin: 0 auto 2em;
					width: 10rem; }

				.upload-label {
					font-size: calc(1rem + 0.25vw);
					margin: 2em 0 4em; }

				.upload-input { }
					.upload-input-button {
						background: #fff;
						border-radius: 5px;
						box-shadow: 0 10px 30px -5px #2720ff33, 0 2px 5px -1px #2720ff22;
						color: #2720ff;
						cursor: pointer;
						display: inline-block;
						font-size: calc(1rem + 0.125vw);
						font-weight: 500;
						padding: 0.75em 2.25em 0.875em;
						text-align: center;
						transition: 0.3s ease;
						will-change: transform, box-shadow; }

						.upload-input-button:hover,
						.upload-input-button:focus {
							box-shadow: 0 15px 50px -12px #2720ff66, 0 2px 5px -1px #2720ff22;
							transform: translateY(-2px); }

						.upload-input-button:active {
							box-shadow: 0 6px 15px -5px #2720ff44, 0 2px 5px -1px #2720ff22;
							transform: translateY(1px); }

					.upload-input-field {
						clip: rect(1px, 1px, 1px, 1px);
						clip: rect(1, 1, 1, 1);
						height: 1px;
						overflow: hidden;
						position: absolute;
						width: 1px; }

			.files {
				background: #ffffff;
				flex: 1;
				padding: 4em 0; }

				.files-list {
					align-items: stretch;
					display: flex;
					flex-flow: row wrap;
					list-style: none;
					margin: 0;
					padding: 0;
					justify-content: center; }

					.files-list-link {
						color: #3A446B;
						display: flex;
						flex-direction: column;
						font-weight: 600;
						height: 100%;
						justify-content: flex-end;
						padding: 1rem;
						text-decoration: none;
						width: 100%; }

					.files-list-item {
						background: #f6f7fc;
						border-radius: 1rem;
						display: flex;
						margin-bottom: 1rem;
						min-height: 17vmin;
						min-width: 17vmin; }

						.files-list-item:not(:last-child) {
							margin-right: 1rem; }

						.files-list-item-size {
							display: block;
							font-weight: 400; }
		</style>
	</head>
<body>
