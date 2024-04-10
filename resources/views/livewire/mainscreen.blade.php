<div class="text-primary-content " style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh;">
    <div class="bg-white navbar text-primary-content">
        <div class="flex-1 ">
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200">
        </div>
        <div>Logged in as: </div>
        <div class="flex-none gap-2 ml-4">
            <div class="dropdown dropdown-hover dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                    <span class="text-xs">USER ID</span>
                </div>
                <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow rounded-box w-52 mt-4 bg-white">
                  <li><a href="superAdmin">Go to Super Admin</a></li>
                  <li><a href="moduleAdmin">Go to Module Admin</a></li>
                  <li><a>Settings</a></li>
                  <li><a href="login">Logout</a></li>
                </ul>
              </div>
        </div>
      </div>

      <div class="drawer lg:drawer-open" style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh;">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <div id="page-content">
                <img src="{{ asset('img/plm_bg.jpg') }}" style="width: 100%; height:100vh">
            </div>
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" class="drawer-overlay" aria-label="close sidebar"></label>
            <ul class="p-4 menu w-80 text-base-content" style="background-color: #2D349A; color:white">
                <li>
                    <label class="cursor-pointer">
                        <b>Financial System</b>
                    </label>
                    <ul>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/gen_ledger.svg') }}')">General Ledger</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/financial_reporting.svg') }}')">Financial Reporting</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/budgeting.svg') }}')">Project Cost Accounting</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/purchasing.svg') }}')">Purchasing</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/inventory.svg') }}')">Inventory</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/accounts_payable.svg') }}')">Accounts Receivable</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/cash_management.svg') }}')">Cash Management</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/accounts_payable.svg') }}')">Accounts Payable</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/budgeting.svg') }}')">Budgeting</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/cash_management.svg') }}')">Procurement Management and Monitoring System</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/inventory.svg') }}')">PLM Asset and Supplies Inventory System</a></li>
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>Registrar Module</b>
                    </label>
                    <ul>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/academic_admission.svg') }}')">Academic Admission and Testing Support</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/student_portal.svg') }}')">Student Information</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/enrollment.svg') }}')">Enrollment</a></li>
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>Different Portals</b>
                    </label>
                    <ul>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/student_portal.svg') }}')">Student Portal</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/discipline.svg') }}')">Faculty Portal</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/student_portal.svg') }}')">Employee Portal</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/scholarship.svg') }}')">DRS</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/student_affairs.svg') }}')">Alumni Portal</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/discipline.svg') }}')">Discipline Portal</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/scholarship.svg') }}')">Scholarship</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/student_affairs.svg') }}')">Student Affairs</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/legal_affairs.svg') }}')">Clinic Portal</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/library.svg') }}')">Library Module</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/guidance.svg') }}')">Guidance Module</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/legal_affairs.svg') }}')">Legal Affairs Module</a></li>
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>HR Process Automation</b>
                    </label>
                    <ul>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/recruitment_selection.svg') }}')">Recruitment</a></li>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/student_portal.svg') }}')">Learning and Development</a></li>
                    </ul>
                </li>
                <li>
                    <label class="cursor-pointer">
                        <b>Academic Management</b>
                    </label>
                    <ul>
                        <li><a href="#" onclick="changePageContent('{{ asset('img/student_portal.svg') }}')">Student Performance</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <script>
        function changePageContent(imageUrl) {
            document.getElementById('page-content').innerHTML = `<img src="${imageUrl}" alt="Image" style="height:100vh">`;
        }
    </script>

      </div>


</div>
