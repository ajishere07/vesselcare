<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vesselcare - Vessel Inspection Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="fav_icon.jpg" />
  </head>
  <body>
    <nav
      style="background-color: #70c0f3"
      class="shadow-2xl sticky top-0 overflow-hidden z-10"
    >
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-24 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button
              type="button"
              class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
              aria-controls="mobile-menu"
              aria-expanded="false"
            >
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
              <svg
                class="block h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
              </svg>
              <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
              <svg
                class="hidden h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-between">
            <div class="flex flex-shrink-0 items-center">
              <img class="h-16 w-auto" src="vc_logo.jpg" alt="Your Company" />
            </div>
            <h1
              class="text-7xl font-bold text-white"
              style="text-shadow: 1px 1px 1px #000"
            >
              Vesselcare
            </h1>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <!-- <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a> -->
                <a
                  onMouseOver="this.style.color='#70C0F3'"
                  onMouseOut="this.style.color='white'"
                  href="#services"
                  class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white hover:text-sky-700"
                  >Services</a
                >
                <a
                  onMouseOut="this.style.color='white'"
                  onMouseOver="this.style.color='#70C0F3'"
                  href="#aboutus_section"
                  class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white hover:text-sky-700"
                  >About us</a
                >
                <a
                  onMouseOut="this.style.color='white'"
                  onMouseOver="this.style.color='#70C0F3'"
                  href="#contact_us_section"
                  class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white hover:text-sky-700"
                  >Contact us</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a
            href="#"
            class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
            aria-current="page"
            >Dashboard</a
          >
          <a
            href="#"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
            >Team</a
          >
          <a
            href="#"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
            >Projects</a
          >
          <a
            href="#"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
            >Calendar</a
          >
        </div>
      </div>
    </nav>
    <!-- <div class="flex items-center justify-around h-8 py-4">
      <div class="font-bold text-sky-700 cursor-pointer hover:text-red-500">
        Inspection
      </div>
      <div class="text-sky-700 font-bold cursor-pointer hover:text-red-500">
        Repair and Maintenaince
      </div>
      <div class="text-sky-700 font-bold cursor-pointer hover:text-red-500">
        Consultancy
      </div>
    </div> -->

    <div
      class="h-screen"
      style="
        position: relative;
        background-image: url(&quot;img/background_image.png&quot;);
        background-repeat: no-repeat;
        background-position: bottom left;
      "
    >
      <div
        class="h-full max-w-7xl mx-auto text-5xl flex justify-end items-center font-extrabold"
      >
        <h1 style="text-shadow: 4px 4px 8px #000" class="text-white text-6xl">
          Ensure Your <br />
          Vessel's Compliance <br />
          Today!
        </h1>
      </div>
    </div>

    <!-- inspection sec -->
    <section id="services" class="max-w-7xl mx-auto my-10">
      <h1
        style="color: #70c0f3"
        class="mb-8 text-sky-700 text-5xl flex h-full w-full items-center font-semibold"
      >
        Maritme Inspection Services
      </h1>

      <!-- inspection heading first -->
      <div class="flex items-center">
        <div class="flex-col items-center px-10">
          <span
            style="color: #70c0f3"
            class="text-sky-700 text-3xl font-semibold"
            >Condition Inspection</span
          >
          <div class="mt-10">
            <p class="text-xl mb-5">
              <b>Vesselcare</b> offers detailed Condition Inspection services to
              provide shipowners and operators with an in-depth assessment of
              their vessel's current state. Our inspections cover all major
              aspects of the vessel, including hull structure, machinery, safety
              equipment, and overall seaworthiness. We help identify wear,
              potential risks, and areas requiring maintenance, ensuring that
              your vessel remains in optimal condition and fully compliant with
              maritime standards.
            </p>
            <p class="text-xl mb-5">
              Our Condition Inspection service is designed to prevent costly
              repairs and operational downtime by delivering comprehensive
              reports with clear recommendations for necessary actions. By using
              <b>Vesselcare’s</b> Condition Inspections, shipowners can
              proactively manage their fleet's health, improving operational
              efficiency and extending the lifespan of their vessels.
            </p>
          </div>
        </div>
        <img class="" src="img/condition_inspection.png" alt="vessel_img" />
      </div>
      <div class="flex items-center">
        <img class="" src="img/PrePsC_inspection.png" alt="vessel_img" />
        <div class="flex-col items-center px-10">
          <span
            style="color: #70c0f3"
            class="text-sky-700 text-3xl font-semibold"
            >Pre-PSC Inspection</span
          >
          <div class="mt-10">
            <p class="text-xl mb-5">
              <b>VesselCare’s Pre-PSC Inspection service</b> is designed to help
              shipowners and operators ensure their vessels are fully compliant
              with international regulations before entering port. Our expert
              inspectors perform a comprehensive check of all key areas,
              including safety systems, pollution prevention equipment, crew
              certifications, and structural integrity. By identifying potential
              deficiencies ahead of time, we help vessels avoid costly delays,
              fines, or detentions during the official Port State Control (PSC)
              inspection.
            </p>
            <p class="text-xl mb-5">
              Our detailed inspection reports offer clear, actionable
              recommendations for any necessary repairs or adjustments, giving
              ship operators the confidence that their vessels will meet all
              regulatory requirements. With
              <b>VesselCare’s Pre-PSC Inspection </b>, shipowners can
              proactively address issues, minimize operational risks, and ensure
              smooth passage through ports, protecting both their assets and
              reputation in the maritime industry.
            </p>
          </div>
        </div>
      </div>

      <div class="flex items-center">
        <div class="flex-col items-center px-10">
          <span
            style="color: #70c0f3"
            class="text-sky-700 text-3xl font-semibold"
            >Port State Control inspections</span
          >
          <div class="mt-10">
            <p class="text-xl mb-5">
              <b>Port State Control (PSC) Inspections</b> are critical
              evaluations conducted by maritime authorities to ensure that
              foreign vessels comply with international safety, environmental,
              and operational regulations. These inspections assess various
              aspects of a ship, including its structural condition, safety
              equipment, crew qualifications, and adherence to pollution
              prevention standards like SOLAS, MARPOL, and STCW. A failure to
              meet these standards can result in fines, detentions, or even bans
              from operating within certain regions, making PSC compliance
              essential for smooth operations
            </p>
            <p class="text-xl mb-5">
              At <b>VesselCare</b>, we emphasize the importance of being
              well-prepared for PSC inspections. By proactively ensuring that
              all aspects of a vessel are in full compliance with international
              regulations, shipowners can reduce the risk of detention and
              costly delays. Our expertise helps vessels maintain high standards
              of safety, efficiency, and environmental responsibility, ensuring
              they pass PSC inspections with confidence and continue operating
              without interruption.
            </p>
          </div>
        </div>
        <img class="" src="img/PSC-inspection.png" alt="vessel_img" />
      </div>

      <div class="flex items-center mt-10">
        <img class="" src="img/pre_purchase_inspection.png" alt="vessel_img" />
        <div class="flex-col items-center px-10">
          <span
            style="color: #70c0f3"
            class="text-sky-700 text-3xl font-semibold"
            >Pre-Purchase Inspection</span
          >
          <div class="mt-10">
            <p class="text-xl mb-5">
              <b>Vesselcare</b> offers comprehensive Pre-Purchase Inspection
              services to assist buyers in making informed decisions before
              acquiring a vessel. Our team of expert inspectors conducts a
              thorough assessment of the vessel’s condition, covering everything
              from hull integrity and machinery to safety equipment and
              documentation. We provide detailed, unbiased reports that
              highlight any existing issues or potential risks, allowing buyers
              to evaluate the true value and operational readiness of the
              vessel.
            </p>
            <p class="text-xl mb-5">
              Our <b>Pre-Purchase Inspections</b> are designed to minimize
              financial risks and ensure the vessel complies with international
              maritime standards. With Vesselcare’s trusted service, buyers gain
              the confidence needed to make well-informed investments, knowing
              that every aspect of the vessel has been carefully examined by
              experienced professionals. Whether you're purchasing a single
              vessel or an entire fleet, our inspection service ensures
              transparency and peace of mind throughout the buying process.
            </p>
          </div>
        </div>
      </div>
      <div class="flex items-center">
        <div class="flex-col items-center px-10">
          <span
            style="color: #70c0f3"
            class="text-sky-700 text-3xl font-semibold"
            >Cargo Holds Inspection</span
          >
          <div class="mt-10">
            <p class="text-xl mb-5">
              At <b>Vesselcare</b>, our Cargo Holds Inspection service is
              designed to ensure the cleanliness, safety, and structural
              integrity of cargo holds before any loading operation. Our
              experienced inspectors thoroughly assess the condition of the
              holds, checking for corrosion, damages, contamination, and pest
              infestations, ensuring the holds are in optimal condition to carry
              goods. This process guarantees that vessels comply with
              international standards and avoid any delays or cargo rejections.
            </p>
            <p class="text-xl mb-5">
              We conduct thorough inspections to deliver detailed reports that
              identify any issues and provide recommendations for necessary
              repairs or maintenance. Our aim is to assist shipowners and
              operators in preserving the quality and safety of their cargo,
              while minimizing risks and optimizing operational efficiency.
              Whether you’re transporting bulk goods or sensitive materials,
              VesselCare’s Cargo Holds Inspection service ensures that your
              vessels are always prepared for their next voyage.
            </p>
          </div>
        </div>
        <img class="" src="img/cargo_hold_inspection.png" alt="vessel_img" />
      </div>
      <div class="flex items-center mt-10">
        <img class="" src="img/pre_vetting_inspection.png" alt="vessel_img" />
        <div class="flex-col items-center px-10">
          <span
            style="color: #70c0f3"
            class="text-sky-700 text-3xl font-semibold"
            >Pre-vetting Inspection</span
          >
          <div class="mt-10">
            <p class="text-xl mb-5">
              <b>Vesselcare</b> provides expert Pre-Vetting Inspection services
              to help shipowners and operators prepare for upcoming vetting
              inspections by charterers or oil majors. Our team conducts a
              meticulous examination of all critical areas, including safety
              systems, structural integrity, and compliance with industry
              regulations. By identifying potential deficiencies in advance, we
              help you address issues before the official vetting process,
              reducing the risk of delays or rejections.
            </p>
            <p class="text-xl mb-5">
              Our Pre-Vetting Inspection reports are thorough and actionable,
              offering clear guidance on corrective actions to ensure the vessel
              meets the highest standards of safety and performance. With
              <b>Vesselcare’s</b> Pre-Vetting service, you can approach the
              vetting process with confidence, knowing that your vessel is fully
              prepared and in optimal condition for successful approval.
            </p>
          </div>
        </div>
        <!-- inspection heading second -->
      </div>
    </section>
    <!-- about us sec -->
    <section id="aboutus_section" class="text-white bg-sky-700 my-10">
      <div class="max-w-7xl mx-auto my-10 py-10">
        <div class="">
          <h1
            style="color: white"
            class="mb-8 text-sky-700 text-5xl flex h-full w-full items-center font-semibold"
          >
            About us
          </h1>
          <span
            style="color: white"
            class="mb-8 text-sky-700 text-3xl font-semibold"
            >Vesselcare: Vessel Inspection Experts</span
          >
        </div>

        <div class="flex items-center">
          <div class="pr-10">
            <p class="text-xl mb-5">
              Vesselcare is a Hong Kong-based company committed to delivering
              top-tier vessel inspection services to the maritime industry. With
              a focus on precision, compliance, and safety, we specialize in
              conducting thorough inspections to ensure vessels meet the highest
              international standards. Our mission is to support shipowners and
              operators by offering expert guidance, comprehensive reports, and
              actionable recommendations to enhance vessel performance and
              safety.
            </p>
            <p class="text-xl mb-5">
              Backed by a team of seasoned maritime professionals, Vesselcare
              brings years of expertise and a deep understanding of the
              complexities involved in vessel operations and regulatory
              compliance. Our services cover everything from structural
              assessments to safety inspections, ensuring that each vessel is
              seaworthy and adheres to global regulations.
            </p>
            <p class="text-xl mb-5">
              Vesselcare combines state-of-the-art technology with industry best
              practices to deliver detailed, reliable, and timely inspection
              reports. We aim to simplify the inspection process, helping
              shipowners and operators avoid costly non-compliance issues and
              minimize operational downtime.
            </p>
          </div>
          <img class="w-1/2" src="inspection_img.jpeg" alt="vessel_img" />
        </div>
      </div>
    </section>
    <section class="mb-20">
      <div class="max-w-7xl mx-auto">
        <div class="w-full mx-auto flex items-center justify-center mb-20">
          <h1 style="color: #70c0f3" class="text-5xl font-bold mb-5">
            Securing Crew Safety and Vessel Integrity
          </h1>
        </div>
        <div>
          <div class="flex items-center mb-5">
            <img src="icons/risk_icon.png" class="w-10" />
            <h3 class="text-3xl ml-3 font-mono">Identifying Potential Risks</h3>
          </div>
          <ul>
            <li class="mb-5">
              <div class="text-sm flex items-center">
                <img src="icons/tick_icon.png" class="w-7" /><span class="mx-2"
                  ><b>Life Safety:</b></span
                >
                We assess onboard safety systems and emergency response
                protocols to ensure the crew is protected from hazards such as
                fire, flooding, and equipment failure.
              </div>
            </li>
            <li class="mb-5">
              <div class="text-sm flex items-center">
                <img src="icons/tick_icon.png" class="w-7" /><span class="mx-2"
                  ><b>Crew Competency:</b></span
                >
                We verify that crew members have the required training and
                skills to ensure safe and effective vessel operation.
              </div>
            </li>
            <li class="mb-5">
              <div class="text-sm flex items-center">
                <img src="icons/tick_icon.png" class="w-7" /><span class="mx-2"
                  ><b>Bad Practices Onboard:</b></span
                >

                We identify and address poor operational habits that can
                compromise safety and efficiency.
              </div>
            </li>
            <li class="mb-5">
              <div class="text-sm flex items-center">
                <img src="icons/tick_icon.png" class="w-7" /><span class="mx-2"
                  ><b>Delay and breakdowns:</b></span
                >
                Delays are often caused by undetected issues with machinery,
                equipment, or poor planning. We work to identify any factors
                that could lead
              </div>
            </li>
            <li class="mb-5">
              <div class="text-sm flex items-center">
                <img src="icons/tick_icon.png" class="w-7" /><span class="mx-2"
                  ><b>Regular Safety Audits:</b></span
                >
                We conduct frequent audits to maintain high safety standards and
                ensure ongoing vessel readiness.
              </div>
            </li>
            <li class="mb-5">
              <div class="text-sm flex items-center">
                <img src="icons/tick_icon.png" class="w-7" /><span class="mx-2"
                  ><b>Compliance Assurance:</b></span
                >
                We ensure that all operations meet international and local
                maritime safety standards, keeping your vessel in full
                regulatory compliance.
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="">
      <div class="mx-auto max-w-7xl">
        <div class="w-full mx-auto flex items-center justify-center mb-20">
          <h1 style="color: #70c0f3" class="text-5xl font-bold mb-5">
            Why Vesselcare
          </h1>
        </div>
        <div class="grid grid-cols-2 grid-rows-4">
          <div
            class="bg-sky-700 w-full mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl text-white">
              <i
                >"Our inspectors are experienced masters and chief engineers
                with years of sailing and vessel inspection experience. Their
                insights help improve performance, prevent delays, and ensure
                compliance with safety standards."</i
              >
            </p>
          </div>
          <div
            class="w-full bg-white mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl text-black">
              <i
                >"With inspectors based in most major ports worldwide,
                VesselCare offers minimal travel requirements and rapid
                availability. Our team is ready to inspect and support your
                ship's staff at short notice, ensuring timely and efficient
                service wherever your vessel is located."</i
              >
            </p>
          </div>
          <div
            class="bg-white w-full mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl color-white">
              <i
                >"Our inspectors are well-versed in local regulations and
                requirements, providing seamless support to vessel staff. They
                bridge language barriers and effectively liaise between the
                vessel and shore authorities, helping to minimize costly
                delays."</i
              >
            </p>
          </div>
          <div
            class="bg-sky-700 w-full mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl text-white">
              <i
                >"We provide immediate assistance by coordinating with local
                authorities and workshops when required, ensuring the management
                office is kept informed at all times."</i
              >
            </p>
          </div>

          <div
            class="bg-sky-700 w-full mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl text-white">
              <i
                >"With inspectors in key ports worldwide, VesselCare guarantees
                swift, flexible service, minimizing travel delays and keeping
                vessels on schedule wherever they are."</i
              >
            </p>
          </div>
          <div
            class="w-full bg-white mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl text-black">
              <i
                >"Our team’s deep knowledge of local regulations and effective
                communication helps overcome language barriers and ensures
                smooth coordination with shore authorities, preventing
                operational disruptions."</i
              >
            </p>
          </div>
          <div
            class="bg-white w-full mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl color-white">
              <i
                >"We respond rapidly in emergencies, coordinating with local
                authorities and workshops to resolve issues quickly. The
                management office is kept informed, ensuring minimal operational
                downtime."</i
              >
            </p>
          </div>
          <div
            class="bg-sky-700 w-full mx-auto flex items-center justify-center p-5"
          >
            <p class="text-xl text-white">
              <i
                >"Our team consists of seasoned inspectors with extensive
                maritime experience, enabling them to provide practical
                solutions that enhance vessel efficiency and ensure adherence to
                safety regulations."</i
              >
            </p>
          </div>
        </div>
      </div>
    </section>
    <footer id="contact_us_section" class="bg-sky-700 pb-10 mt-10">
      <div
        class="max-w-7xl mx-auto flex items-center justify-center mb-10 pt-5"
      >
        <p class="font-thin text-5xl text-white">CONTACT US</p>
      </div>
      <div
        style="border-bottom: 1px solid #9c9eaa"
        class="mx-auto max-w-7xl flex items-center justify-between pb-20 px-20"
      >
        <section class="basis-3/5" id="form_section">
          <form action="send.php" method="post">
            <div class="">
              <div class="">
                <div class="w-full">
                  <input
                    required
                    type="text"
                    name="name"
                    id="name"
                    autocomplete="name"
                    class="w-full rounded-md bg-white px-10 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="NAME"
                  />
                </div>
              </div>

              <div class="sm:col-span-4">
                <div class="mt-2">
                  <div
                    class="flex w-full rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600"
                  >
                    <input
                      required
                      type="email"
                      name="email"
                      id="email"
                      autocomplete="username"
                      class="rounded-md w-full bg-white px-10 block border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                      placeholder="EXAMPLE@GMAIL.COM"
                    />
                  </div>
                </div>
              </div>
              <div class="col-span-full">
                <div class="mt-2">
                  <textarea
                    required
                    placeholder="How can we help you?"
                    id="message"
                    name="message"
                    rows="3"
                    class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6"
                  ></textarea>
                </div>
              </div>
              <button type="submit"
              name="send"
                class="cursor-pointer font-bold mt-2 text-center w-full h-10 rounded-md"
                value="Submit"
                style="background-color: white; color: #0369a1">Submit</button>
             
              
               
              
            </div>
          </form>
        </section>
        <section id="contact_us_section">
          <div>
            <div class="flex mb-6 items-center" id="location ">
              <img class="w-6" src="icons/icons8-location-100.png" />
              <span class="ml-8 text-gray-400">Hong Kong</span>
            </div>
            <div class="flex mb-6 items-center" id="phone_number">
              <img class="w-6" src="icons/icons8-phone-100.png" />
              <span class="ml-8 text-gray-400">+852 98615101</span>
            </div>
            <div class="flex mb-6 items-center" id="email_id">
              <img class="w-6" src="icons/icons8-mail-100.png" />
              <span class="ml-8 text-gray-400"
                >vesselcare@vesselcarehk.com</span
              >
            </div>
          </div>
        </section>
      </div>
      <div class="max-w-7xl mx-auto flex items-center justify-center mt-5">
        <p class="font-serif text-xs">
          Copyright &#169; Vesselcare. All rights reserved
        </p>
      </div>
    </footer>
  </body>
</html>
