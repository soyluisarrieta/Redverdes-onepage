/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // "./components/layout/header.php",
    // "./components/layout/footer.php",

    // "./index.php",
    // "./huellas/index.php",

    // ADMINISTRATIVO
    "./admin/*/index.php",
  ],
  theme: {

    // Container
    container: {
      screens: {
        xl: "1024px",
      },
      center: true,
      padding: {
        DEFAULT: '1rem',
        xl: '0rem',
      },
    },

    extend: {

      // Fonts
      fontFamily: {
        altair: ['Font-Altair', 'system-ui', 'sans-serif'],
        futura: ['Font-Futura', 'system-ui', 'sans-serif'],
      },

      // Palette
      colors: {
        'palette-primary': '#009145',
        'palette-primary-h': '#00B74A',
        'palette-primary-l': '#007F35',

        'palette-secundary': '#125151',
        
        'palette-light': '#F7F9F8',
        'palette-dark': '#28293D',
        'palette-dark-h': '#1B1E35',
        'palette-dark-l': '#363851',
        
        'palette-yellow': '#D8DF21',
        'palette-lima': '#8BC53F',
        'palette-darkgreen': '#006837',
        'palette-cyan': '#00A89C',
        'palette-lightblue': '#29AAE1',
        'palette-blue': '#0071BB',
        'palette-indigo': '#2E3191',
        'palette-darkindigo': '#1B1464',
      },
    }
  },
  plugins: [],
};
