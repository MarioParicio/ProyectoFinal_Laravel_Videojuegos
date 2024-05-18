/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('daisyui'),
    ],
    daisyui: {
      themes: [
        {
          mytheme: {
            "primary": "#570df8",
            "secondary": "#f000b8",
            "accent": "#37cdbe",
            "neutral": "#3d4451",
            "base-100": "#ffffff",
            "info": "#3abff8",
            "success": "#36d399",
            "warning": "#fbbd23",
            "error": "#f87272",
          },
        },
      ],
    },
  }
