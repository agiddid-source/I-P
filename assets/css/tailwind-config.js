tailwind.config = {
    theme: {
        extend: {
            colors: {
                brand: {
                    DEFAULT: '#064B3E',
                    dark: '#043329',
                    light: '#0B6A57'
                },
                accent: {
                    DEFAULT: '#0F9D78',
                    dark: '#087A5D',
                    light: '#DDF5ED'
                },
                gold: {
                    DEFAULT: '#DDA235',
                    dark: '#B8841F',
                    light: '#FBF1DA'
                },
                surface: '#FFFFFF',
                canvas: '#F7F9FB',
                border: '#E5E9EF',
                muted: '#667085'
            },

            fontFamily: {
                sans: ['Inter', 'sans-serif']
            },

            borderRadius: {
                card: '12px',
                panel: '16px'
            },

            boxShadow: {
                card: '0 2px 10px rgba(16, 24, 40, 0.04)'
            }
        }
    }
};