@extends('layouts.master')
@section('content')
<main>
<!-- Banner -->
<div style="background-image: url(./assets/images/cover.png); " class="w-full bg-cover bg-center h-[30vh] md:h-[70vh]"  >
    <div class="flex justify-center items-center text-white text-3xl md:text-4xl font-bold h-full">
        <h1 class="text-center">CAREER</h1>
    </div>
    </div>
    <!-- Job Description -->
    <div class="m-10 md:m-24 ">
        <h1 class="text-2xl font-extrabold">Senior IT Engineer (Full Time)</h1>
        <p class="font-semibold my-10">Department: Information Technology <br>
            Location: Dhaka, Bangladesh <br>
            Date Posted: 10 July 2023 <br>
            Last Date of Application: 01 August 2023</p>
            <h1 class="text-2xl font-bold">About the job</h1>
            <p class="font-semibold mt-10 mb-8">Responsibilities and Duties:</p>
            <ul style="list-style-type: disc;" class="mx-8">
                <li>Identify and monitor risks through key Information Security metrics</li>
                <li>Provide proactive monitoring, security automation, investigation, and response for security alerts and incidents</li>
                <li>Support deployment of company policies and implementation of controls</li>
                <li>Ensure business continuity and disaster recovery plans are tested and fit for purpose</li>
                <li>Foster information security awareness and training for internal colleagues</li>
                <li>Play an active role in facilitating both internal and external audits, and ensure successful remediation efforts</li>
                <li>Identify gaps with policies and areas of improvement through control testing</li>
                <li>Assisting with the development of policies based on audit findings</li>
                <li>Assisting with risk assessments</li>
                <li>Organize penetration tests and coordinate remediation of findings</li>
                <li>Develops tactical response procedures for security incidents.</li>
                <li>Provide Cyber Security technical expertise, support, and guidance to management in case of major security event/incident and/or data breach (post-incident review, postmortem, security remediation plan)</li>
                <li>Partner with our infrastructure and other development teams to ensure our networks, computer systems, and hosting environments are implemented and maintained consistent with best practices and policy</li>
                <li>Conduct research on tools, compliance requirements, and best practices as it pertains to Vulnerability Management</li>
                <li>Sound knowledge on security matters for IT team
                </li>
                
            </ul>
            <p class="font-semibold my-8">Skills Required:</p>
            <ul style="list-style-type: disc;" class="mx-8">
                <li>
                    Knowledge of security in the public cloud and on-premise environment.
                </li>
                <li>
                    Good knowledge of risk management and audit process.

                </li>
                <li>Knowledge and understanding of the system and network security, authentication and security protocols, vulnerabilities, and incident management.</li>
                <li>Proven experience with current IT security technologies - Firewalls, IDS/IPS, Load Balancers, SIEM, DLP, Proxy, LDAP, RADIUS, AD, DNS, DHCP, VPN, EDR/MDR/XDR.</li>
                <li>Prior experience with any one of the global information security framework.</li>
                <li>Experience with AWS, GCP, and/or Azure, and are comfortable using security tools to interact with these environments. Good understating of cloud-native security solutions.</li>
                <li>Relevant security certification(s), any one or more from EC-Council Certified Ethical Hacker (CEH), Certified Information Systems Security Professional (CISSP), ISACA Certified Information Security Manager (CISM), ISACA Certified Information Systems Auditor (CISA), Certified Cloud Security Professional (CCSP).</li>
                
                
            </ul>

            <p class="font-semibold my-8">Experience Required: The candidate must have at least 3+ years of work experience, and ‘hands-on experience’ in the field of information security and its core components.</p>
            <p class="font-semibold ">
                Education Requirement: Masters/Graduate in Computer Science, Information Security or any other Engineering Discipline.
            </p>
            <p class="font-semibold mt-8 mb-12">
                Salary: Negotiable <br>
Other Benefits: As per company policy
            </p>
            <hr class="border-black">
    </div>
    <!-- Application Form -->
    <div class="mx-10 md:mx-24 mb-24">
<h1 class="text-2xl font-bold">Interested to Apply? Fill the form below:</h1>
<div class="my-8">
  <input type="text" required name="" id="" placeholder="Full Name*" class="bg-[#D9D9D9] py-2 pl-8  pr-20 md:pr-40 outline-none"> <br>
<input type="email" required name="" id="" placeholder="Email Address*" class="bg-[#D9D9D9] py-2 pl-8 pr-20 md:pr-40 outline-none my-4"> <br>
<input type="text" required name="" id="" placeholder="Contact Number*" class="bg-[#D9D9D9] py-2 pl-8 pr-20 md:pr-40 outline-none">
</div>
<!-- Upload CV -->
<div class="flex items-center gap-4 ">
  <img class="w-6" src="./assets/icons/clip.png" alt="">
  <label for="cvUpload" class="underline cursor-pointer" id="cvFileLabel">Attach Your CV/Resume*</label>
  <input type="file" id="cvUpload" name="cv" accept=".pdf, .doc, .docx" style="display: none;" onchange="updateFileName(this, 'cvFileLabel')">
</div>

<!-- Upload cover letter -->
<div class="flex items-center gap-4 mt-4">
  <img class="w-6" src="./assets/icons/clip.png" alt="">
  <label for="coverLetterUpload" class="underline cursor-pointer" id="coverLetterFileLabel">Attach Your Cover Letter </label>
  <input type="file" id="coverLetterUpload" name="cover-letter" accept=".pdf, .doc, .docx" style="display: none;" onchange="updateFileName(this, 'coverLetterFileLabel')">
</div>
<button class="flex justify-between items-center bg-[#0572E6] px-4 py-3 mt-6">
  <p class="text-[#fff]">Apply</p>
  <a class="arrow-link" href=""><img class="w-16 ms-4 " src="./assets/icons/arrow.png" alt="link arrow"></a>
</button>
    </main>
@endsection