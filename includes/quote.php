<div class="banner-form">
                  <div class="quote-widget" id="quote-widget">
                    <form
                      id="point-to-points"
                      method="post"
                      class="quote p-4"
                      action="testurl.php"
                    >
                      <h2>Get an instant quote</h2>
                      <div class="form-field">
                        <label for="exampleInput">Pick-up</label>
                        <div class="easy-autocomplete" style="width: 372px">
                          <input
                            id="provider-remote2"
                            name="from"
                            class="form-control"
                            style=""
                            placeholder="Enter airport, seaport, postcode"
                            required=""
                            autocomplete="off"
                          />
                        
                        </div>
                        <span class="form-addons">
                          <i class="fa fa-map-marker"></i>
                        </span>
                      </div>
                      <div class="input_fields_wrap add_via form-field">
                        <div class="row col-cstm"></div>
                      </div>
                      <div class="form-field">
                        <label for="exampleInput">Drop-off</label>
                        <div class="easy-autocomplete" style="width: 372px">
                          <input
                            id="provider-remote1"
                            name="to"
                            class="form-control"
                            style=""
                            placeholder="Enter airport, seaport, postcode"
                            required=""
                            autocomplete="off"
                          />
                         
                        </div>
                        <span class="form-addons">
                          <i class="fa fa-map-marker"></i>
                        </span>
                      </div>

                      <div class="col-sm-12">
                        <div class="row">
                          <div class="form-check r-input col-sm-6">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              id="accept_tc1"
                              name="check_return"
                              value="return"
                              onchange="valueC()"
                              required=""
                              aria-required="true"
                            />
                            <label class="form-check-label" for="accept_tc1">
                              Return Journey?</label
                            >
                          </div>

                          <div class="col-cstm return-trip">
                            <div class="row">
                              <div
                                class="col-md-12 col-sm-12 col-xs-12 col-cstm"
                              >
                                <div class="form-field">
                                  <div class="form-field">
                                    <label for="exampleInput">Pick-up</label>
                                    <div
                                      class="easy-autocomplete"
                                      style="width: 100px"
                                    >
                                      <input
                                        id="provider-remote3"
                                        name="returnfrom"
                                        class="form-control"
                                        style=""
                                        placeholder="Enter airport, seaport, postcode"
                                        required=""
                                        autocomplete="off"
                                      />
                                    </div>
                                    <span class="form-addons">
                                      <i class="fa fa-map-marker"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="col-md-12 col-sm-12 col-xs-12 col-cstm"
                              >
                                <div class="form-field">
                                  <label for="exampleInput">Drop-off</label>
                                  <div
                                    class="easy-autocomplete"
                                    style="width: 100px"
                                  >
                                    <input
                                      id="provider-remote4"
                                      name="returnto"
                                      class="form-control"
                                      style=""
                                      placeholder="Enter airport, seaport, postcode"
                                      required=""
                                      autocomplete="off"
                                    />
                                  </div>
                                  <span class="form-addons">
                                    <i class="fa fa-map-marker"></i>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button
                        class="btn main-banner-btn btn-block getquotebtn"
                        type="button"
                        name="book_now11"
                        onclick="checkformalert()"
                      >
                        Get Quote
                      </button>
                    </form>
                  </div>
                </div>