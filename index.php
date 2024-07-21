<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLMedic - [Nombre Doctor]</title>
</head>
<body>
<div class="flex flex-col md:flex-row min-h-screen">
  <nav class="bg-background border-r w-full md:w-64 p-4 flex flex-col gap-4">
    <a class="flex items-center gap-2 font-bold" href="#">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="w-6 h-6"
      >
        <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
        <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path>
        <path d="M12 3v6"></path>
      </svg>
      <span>Patient Info</span>
    </a>
    <div class="flex-1 overflow-auto">
      <ul class="space-y-1">
        <li>
          <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-muted" href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="w-5 h-5"
            >
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Personal Info</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-muted" href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="w-5 h-5"
            >
              <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
              <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
            </svg>
            <span>Medical History</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-muted" href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="w-5 h-5"
            >
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <span>Emergency Contact</span>
          </a>
        </li>
        <li>
          <div data-state="closed" class="grid gap-4">
            <button
              type="button"
              aria-controls="radix-:Rcpn9nltf9f:"
              aria-expanded="false"
              data-state="closed"
              class="flex w-full items-center px-3 py-2 rounded-md hover:bg-muted [&amp;[data-state=open]>svg]:rotate-90"
            >
              Citas
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="ml-auto h-5 w-5 transition-all"
              >
                <path d="m9 18 6-6-6-6"></path>
              </svg>
            </button>
            <div data-state="closed" id="radix-:Rcpn9nltf9f:" hidden="" style=""></div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="flex-1 p-6 sm:p-8 md:p-10">
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm max-w-4xl mx-auto" data-v0-t="card">
      <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="whitespace-nowrap tracking-tight text-3xl font-bold">Información del paciente</h3>
        <p class="text-sm text-muted-foreground">
          Por favor, complete el siguiente formulario para proporcionar sus datos personales y médicos.
        </p>
      </div>
      <div class="p-6">
        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="grid gap-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="grid gap-2">
                <label
                  class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                  for="firstName"
                >
                  Nombre
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                  id="firstName"
                  placeholder="Juan"
                  required=""
                />
              </div>
              <div class="grid gap-2">
                <label
                  class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                  for="lastName"
                >
                  Apellido
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                  id="lastName"
                  placeholder="Pérez"
                  required=""
                />
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="grid gap-2">
                <label
                  class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                  for="dob"
                >
                  Fecha de nacimiento
                </label>
              </div>
              <div class="grid gap-2">
                <label
                  class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                  for="phone"
                >
                  Número de teléfono
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                  type="tel"
                  id="phone"
                  placeholder="(123) 456-7890"
                  required=""
                />
              </div>
            </div>
            <div class="grid gap-2">
              <label
                class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                for="email"
              >
                Correo electrónico
              </label>
              <input
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                type="email"
                id="email"
                placeholder="juan@ejemplo.com"
                required=""
              />
            </div>
            <div class="grid gap-2">
              <label
                class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                for="address"
              >
                Dirección
              </label>
              <textarea
                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                id="address"
                rows="3"
                placeholder="Calle Principal 123, Ciudad USA"
                required=""
              ></textarea>
            </div>
            <div class="grid gap-2">
              <label
                class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                for="medicalHistory"
              >
                Historial médico
              </label>
              <textarea
                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                id="medicalHistory"
                rows="3"
                placeholder="Por favor, proporcione un breve resumen de su historial médico."
              ></textarea>
            </div>
          </div>
          <div class="grid gap-4">
            <div class="grid gap-2">
              <label
                class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                for="emergencyName"
              >
                Nombre del contacto de emergencia
              </label>
              <input
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                id="emergencyName"
                placeholder="María Gómez"
                required=""
              />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="grid gap-2">
                <label
                  class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                  for="emergencyPhone"
                >
                  Teléfono del contacto de emergencia
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                  type="tel"
                  id="emergencyPhone"
                  placeholder="(123) 456-7890"
                  required=""
                />
              </div>
              <div class="grid gap-2">
                <label
                  class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-medium"
                  for="emergencyRelationship"
                >
                  Relación
                </label>
                <input
                  class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                  id="emergencyRelationship"
                  placeholder="Cónyuge"
                  required=""
                />
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="flex items-center p-6">
        <div class="flex justify-end">
          <button
            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"
            type="submit"
          >
            Enviar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
