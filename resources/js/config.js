let baseUrl = ''
if (process.env.APP_ENV === 'production') {
   baseUrl = 'http://localhost/api/'
} else {
   baseUrl = 'http://localhost/api/'
}

export const apiHost = baseUrl