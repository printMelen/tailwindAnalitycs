/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.{html,php}',
    './assets/templates/*.{html,php}',
    './assets/js/*.{html,js}',
  ],
  theme: {
    extend: {
      maxWidth:{
        'screen-2xl':'1600px',
        'screen-xl':'1180px',
      },
      backgroundImage: {
        'sectionHeader': "url('../../images/background-top.svg')",
        'sectionFooter': "url('../../images/background-bottom.svg')",
      }      
    },
    fontSize: {
      sm: '14px',
      sl: '16px',
      base: '18px',
      30: '30px',
      xm: '40px',
      xl: '50px',
      60: '60px',
    },
    lineHeight: {
      'titulo': '120%',
      '140': '140%',
      'parrafo': '150%',
    },
    fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'back': '#EEEEF6',
      'pink': '#EF2A82',
      'midnight': '#0F1F4B',
      'white': '#FFF',
      'bordes': '#465B95',
      'bordePrice': '#2A407C',
      'letraHeader': '#8794BA',
      'letraNegra': '#172755',
      'bermuda': '#78dcca',
    },
  },
  plugins: [],
}

