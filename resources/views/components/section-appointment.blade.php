<section class="appointment-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="saloon-booking" id="saloonBooking">
          
          <!-- HEADER -->
          <div class="sb-header">
            <div class="sb-title">
              <div class="sb-brand">Nuvora Salon</div>
            </div>

            <div class="sb-steps">
              <div class="progress-steps">
                <div class="step" data-step="1">
                  <span class="label">1. Service</span>
                  <div class="bar"></div>
                </div>
                <div class="step" data-step="2">
                  <span class="label">2. Time</span>
                  <div class="bar"></div>
                </div>
                <div class="step" data-step="3">
                  <span class="label">3. Details</span>
                  <div class="bar"></div>
                </div>
                <div class="step" data-step="4">
                  <span class="label">4. Done</span>
                  <div class="bar"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- BODY -->
          <div class="sb-body">
            <div class="sb-left">

              <!-- STEP 1 -->
              <div class="step-panel" data-panel="1">
                <div class="card-section">
                  <h3>Choose a service</h3>
                  <div class="service-list" id="serviceList">
                    <div class="svc" data-id="haircut" data-duration="45" data-price="25">
                      <div>
                        <div class="svc-title">Hair Cut</div>
                        <div class="svc-time">45 min · $25</div>
                      </div>
                    </div>

                    <div class="svc" data-id="haircolor" data-duration="90" data-price="60">
                      <div>
                        <div class="svc-title">Hair Color</div>
                        <div class="svc-time">90 min · $60</div>
                      </div>
                    </div>

                    <div class="svc" data-id="shave" data-duration="30" data-price="18">
                      <div>
                        <div class="svc-title">Hot Towel Shave</div>
                        <div class="svc-time">30 min · $18</div>
                      </div>
                    </div>

                    <div class="svc" data-id="trim" data-duration="20" data-price="12">
                      <div>
                        <div class="svc-title">Beard Trim</div>
                        <div class="svc-time">20 min · $12</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-section">
                  <h3>Pick a barber</h3>
                  <div class="barber-list" id="barberList">
                    <div class="barber" data-id="tom" data-price="10" data-name="Thomas Launge" data-img="{{ asset('images/barber-img1.png') }}">
                      <img src="{{ asset('images/barber-img1.png') }}" alt="Thomas">
                      <div class="meta">
                        <h5>Thomas</h5>
                        <p>Owner · $10 extra</p>
                      </div>
                    </div>

                    <div class="barber" data-id="rayan" data-price="8" data-name="Rayan Williams" data-img="{{ asset('images/barber-img2.png') }}">
                      <img src="{{ asset('images/barber-img2.png') }}" alt="Rayan">
                      <div class="meta">
                        <h5>Rayan</h5>
                        <p>Stylist · $8 extra</p>
                      </div>
                    </div>

                    <div class="barber" data-id="john" data-price="12" data-name="John Smith" data-img="{{ asset('images/barber-img3.png') }}">
                      <img src="{{ asset('images/barber-img3.png') }}" alt="John">
                      <div class="meta">
                        <h5>John</h5>
                        <p>Senior · $12 extra</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="sb-actions">
                  <button class="theme-btn" id="toStep2">Next</button>
                </div>
              </div>

              <!-- STEP 2 -->
              <div class="step-panel" data-panel="2">
                <div class="card-section">
                  <h3>Choose Date & Time</h3>
                  <div class="calendar">
                    <div class="cal-left">
                      <div class="cal-header">
                        <div class="cal-title"><strong id="calMonthLabel">October 2025</strong></div>
                        <div class="cal-nav">
                          <button id="prevMonth">&lt;</button>
                          <button id="nextMonth">&gt;</button>
                        </div>
                      </div>

                      <div class="cal-weekdays">
                        <div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
                      </div>

                      <div class="cal-grid" id="calendarGrid"></div>
                    </div>

                    <div class="cal-right">
                      <h4>Available time slots</h4>
                      <div class="time-slots" id="timeSlots"></div>
                    </div>
                  </div>
                </div>

                <div class="sb-actions">
                  <button class="btn btn--secondary theme-btn" id="backTo1">Previous</button>
                  <button class="theme-btn" id="toStep3">Next</button>
                </div>
              </div>

              <!-- STEP 3 -->
              <div class="step-panel" data-panel="3">
                <div class="card-section">
                  <h3>Your details</h3>
                  <div class="form-grid">
                    <input id="inputName" placeholder="Full name" class="form-input" />
                    <input id="inputPhone" placeholder="Phone" class="form-input short" />
                    <input id="inputEmail" placeholder="Email (optional)" class="form-input" />
                  </div>
                </div>

                <div class="card-section">
                  <h3>Notes (optional)</h3>
                  <textarea id="inputNotes" rows="4" class="form-textarea"></textarea>
                </div>

                <div class="sb-actions">
                  <button class="btn btn--secondary theme-btn" id="backTo2">Previous</button>
                  <button class="theme-btn" id="confirmBooking">Confirm</button>
                </div>
              </div>

              <!-- STEP 4 -->
              <div class="step-panel" data-panel="4">
                <div class="done">
                  <div class="tick">✓</div>
                  <h2>Request Sent</h2>
                  <p class="done-text">Your booking request has been sent. Once the salon confirms, you will receive a confirmation message here.</p>
                  <div class="done-actions">
                    <button class="theme-btn" id="goNew">Book another</button>
                    <a href="{{ url('/') }}" class="btn btn--secondary theme-btn">Back to Home</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- RIGHT SUMMARY (STATIC VERSION) -->
            <aside class="sb-right">
            <div class="summary">
                <h4>Summary</h4>

                <div class="summary-row">
                <div>
                    <small>Service</small>
                    <div class="summary-value">Hair Cut</div>
                </div>
                <div class="summary-muted">45 min</div>
                </div>

                <div class="summary-row">
                <div>
                    <small>Barber</small>
                    <div class="summary-value">Thomas</div>
                </div>
                <img src="{{ asset('images/barber-img1.png') }}" class="barber-pic" alt="Thomas">
                </div>

                <div class="summary-row">
                <div>
                    <small>Date</small>
                    <div class="summary-value">Oct 25, 2025</div>
                </div>
                <div class="summary-value">10:30 AM</div>
                </div>

                <div class="summary-divider"></div>

                <div class="summary-row">
                <div><small>Service price</small></div>
                <div>$25</div>
                </div>
                <div class="summary-row">
                <div><small>Barber extra</small></div>
                <div>$10</div>
                </div>
                <div class="summary-row total">
                <div>Total</div>
                <div>$35</div>
                </div>
            </div>
            </aside>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
