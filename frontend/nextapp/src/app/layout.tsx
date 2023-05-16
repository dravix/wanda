// import './globals.css'
import { Inter } from 'next/font/google'
import '@picocss/pico'

const inter = Inter({ subsets: ['latin'] })

export const metadata = {
  title: 'Pyventa',
  description: 'Una forma inteligente de hacer negocios',
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <body className="container">{children}</body>
      {/* <body className={inter.className}>{children}</body> */}
    </html>
  )
}
