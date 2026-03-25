<x-app>
    <x-hero 
        title="{{ __('messages.training_title') ?? 'Engineering Training' }}"
        subtitle="{{ __('messages.training_hero_desc') ?? 'Elite in-office training for the next generation of civil engineers. Bridge the gap between academic theory and practical site application.' }}"
        image="https://lh3.googleusercontent.com/aida-public/AB6AXuD9oMp0xwKnV0EZ4RnCfJBc74voFJSbz8I9-kZ5UpNfGxU42XeS72xedYxEEFIYCnFwxZhGSA0nSNk3uTe7wkDpRrxkq0D0Y5O1FApX7iyv8pBzvxEUVlrFfHfQwN5BbiiLlaWki7fRv6MrL-wdgFjyKOHC0t12m18o8G49TYzMmzrTY97V_YUmTaQPwQqxdKu2XQ6aluWdqszkxfPxr2_VA87lmUiqNvjpHNMB5WBuIEq43s-VRtxCDS42xPGVRYavWMEC73TjphM"
        :primaryAction="['label' => __('messages.apply_admission') ?? 'Apply for Admission', 'url' => '#application']"
    />

    <!-- The Standard Section -->
    <section class="py-24 bg-white" id="curriculum">
        <div class="max-w-[1280px] mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-12 md:gap-20 items-start">
                <div class="md:w-1/3 md:sticky md:top-24">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">
                        {{ __('messages.academy_standard') ?? 'The Academy Standard' }}
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-8">
                        {{ __('messages.academy_desc') ?? 'Our rigorous training program is meticulously designed to transform promising graduates into elite field engineers capable of managing premium projects.' }}
                    </p>
                </div>
                <div class="md:w-2/3 grid grid-cols-1 gap-6">
                    <div class="group bg-[#f9f8f8] p-8 rounded-lg shadow-sm border border-gray-200 hover:border-[#c8af9e] transition-all duration-300">
                        <div class="h-12 w-12 rounded-full bg-[#c8af9e]/20 flex items-center justify-center text-[#553f2f] mb-6 group-hover:bg-[#553f2f] group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined">apartment</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">{{ __('messages.physical_training') ?? 'Physical In-Office Training' }}</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Immerse yourself in our state-of-the-art engineering labs. Direct mentorship from senior civil engineers who have led the region's most iconic projects.
                        </p>
                    </div>
                    <div class="group bg-[#f9f8f8] p-8 rounded-lg shadow-sm border border-gray-200 hover:border-[#c8af9e] transition-all duration-300">
                        <div class="h-12 w-12 rounded-full bg-[#c8af9e]/20 flex items-center justify-center text-[#553f2f] mb-6 group-hover:bg-[#553f2f] group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined">verified</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">{{ __('messages.certificate') ?? 'Global Certification' }}</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Upon completion of the 12-week intensive, receive a globally recognized certification accredited by the International Engineering Alliance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Section -->
    <section class="py-24 bg-[#f9f8f8]" id="application">
        <div class="max-w-[1280px] mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <!-- Text Side -->
                <div class="lg:w-5/12 pt-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">
                        {{ __('messages.apply_admission') ?? 'Apply for Admission' }}
                    </h2>
                    <p class="text-slate-600 mb-8 text-lg">
                        Seats are limited to ensure personalized mentorship. Please complete the form below to begin your application process for the upcoming intake.
                    </p>
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                </div>
                <!-- Form Side -->
                <div class="lg:w-7/12">
                    <div class="bg-white p-8 md:p-10 rounded-xl border border-gray-200 shadow-xl">
                        <h3 class="text-xl font-bold text-slate-900 mb-8 border-b border-gray-200 pb-4">
                            Candidate Registration
                        </h3>
                        <form action="{{ route('training.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700" for="full_name">Full Name</label>
                                    <input class="w-full bg-white border @error('full_name') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-3 text-slate-900 focus:ring-2 focus:ring-[#c8af9e] outline-none transition-all placeholder:text-gray-400" id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" required/>
                                    @error('full_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700" for="phone">Phone Number</label>
                                    <input class="w-full bg-white border @error('phone') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-3 text-slate-900 focus:ring-2 focus:ring-[#c8af9e] outline-none transition-all placeholder:text-gray-400" id="phone" name="phone" type="tel" value="{{ old('phone') }}" required/>
                                    @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700" for="email">Email Address</label>
                                    <input class="w-full bg-white border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-3 text-slate-900 focus:ring-2 focus:ring-[#c8af9e] outline-none transition-all placeholder:text-gray-400" id="email" name="email" type="email" value="{{ old('email') }}" required/>
                                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-slate-700" for="experience_level">Years of Experience</label>
                                    <select name="experience_level" class="w-full bg-white border @error('experience_level') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-3 text-slate-900 focus:ring-2 focus:ring-[#c8af9e] outline-none transition-all" id="experience_level" required>
                                        <option disabled="" selected="" value="">Select an option</option>
                                        <option value="student" {{ old('experience_level') == 'student' ? 'selected' : '' }}>Student (Final Year)</option>
                                        <option value="0-2" {{ old('experience_level') == '0-2' ? 'selected' : '' }}>0-2 Years</option>
                                        <option value="3-5" {{ old('experience_level') == '3-5' ? 'selected' : '' }}>3-5 Years</option>
                                        <option value="5+" {{ old('experience_level') == '5+' ? 'selected' : '' }}>5+ Years</option>
                                    </select>
                                    @error('experience_level') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700" for="university">University or Current Company</label>
                                <input class="w-full bg-white border @error('university') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-3 text-slate-900 focus:ring-2 focus:ring-[#c8af9e] outline-none transition-all placeholder:text-gray-400" id="university" name="university" type="text" value="{{ old('university') }}" required/>
                                @error('university') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-slate-700" for="message">Statement of Interest</label>
                                <textarea name="message" class="w-full bg-white border @error('message') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-3 text-slate-900 focus:ring-2 focus:ring-[#c8af9e] outline-none transition-all resize-none placeholder:text-gray-400" id="message" rows="4" required>{{ old('message') }}</textarea>
                                @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="pt-4">
                                <button class="w-full bg-[#553f2f] hover:bg-[#c8af9e] hover:text-[#553f2f] text-white font-bold py-4 px-6 rounded-lg transition-colors duration-300 shadow-md" type="submit">
                                    {{ __('messages.submit') ?? 'Submit Application' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
