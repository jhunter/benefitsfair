module.exports = {
  target: 'ie11',
  future: {
    removeDeprecatedGapUtilities: true,
  },
  theme: {
    extend: {
      colors: {
        pkl: {
          '100': '#fcf5ff',
          '200': '#f2d6ff',
          '300': '#e6b7ff',
          '400': '#cf8aff',
          '500': '#b968fd',
          '600': '#9c45ea',
          '700': '#8632d6',
          '800': '#682daa',
          '900': '#522886',
        }
      },
      minHeight: {
        '65': "16.25rem"
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/custom-forms'),
  ],
}
