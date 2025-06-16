<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AddEmployee;
use App\Models\Blogs;
use App\Models\CallbackRequest;
use App\Models\CareerVaccancy;
use App\Models\LandingContent;
use App\Models\LandingWhatWeoffer;
use App\Models\Latestvideos;
use App\Models\OurServices;
use App\Models\ServiceDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $workingDesignations = CareerVaccancy::select('designation')->get();
        $NewCallBack = CallbackRequest::count();
        return view('admin.dashboard', compact('NewCallBack', 'workingDesignations'));
    }

    public function GetLandingcontent()
    {
        $FetchLandingContent = LandingContent::where('id', 7)->first();
        return response()->json([
            'status' => 200,
            'data' => $FetchLandingContent
        ]);
    }

    public function AddLandingContent(Request $request)
    {
        $getData = $request->validate([
            'landing-main-heading' => 'nullable|string',
            'landing-meta-content' => 'nullable',
            'landing-meta-description' => 'nullable',
            'landing-main-background' => 'nullable|url',
        ], [
            'landing-main-heading.string' => 'Main heading must be a string',
            'landing-main-background.url' => 'Main background must be a valid URL',
        ]);

        $matchData = [
            'main_heading' => $getData['landing-main-heading'],
            'meta_content' => $getData['landing-meta-content'],
            'meta_description' => $getData['landing-meta-description'],
            'landing_background' => $getData['landing-main-background'],
        ];

        $success = LandingContent::where('id', 7)->update($matchData);

        if ($success) {
            return response()->json([
                'status' => 200,
                'message' => 'Landing content updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to update landing content'
            ]);
        }
    }

    public function Callbackrequests()
    {
        $FetchRequests = CallbackRequest::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => 200,
            'data' => $FetchRequests
        ]);
    }

    public function WeOfferAdd(Request $request)
    {
        $getData = $request->validate([
            'service-name' => 'required|string',
            'service-related-image' => 'required|url',
            'service-description' => 'required|min:10'
        ], [
            'service-name.required' => 'Service name is required',
            'service-name.string' => 'Service name must be a string',
            'service-related-image.required' => 'Service image is required',
            'service-related-image.url' => 'Service image must be a valid URL',
            'service-description.required' => 'Description is required',
            'service-description.min' => 'Description must be 10 characters long!'
        ]);

        $matchData = [
            'service_name' => $getData['service-name'],
            'service_img_url' => $getData['service-related-image'],
            'service_description' => $getData['service-description']
        ];
        try {
            LandingWhatWeoffer::Create(
                $matchData
            );

            return response()->json([
                'status' => 200,
                'message' => 'Data added successfully!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!',
                'error' => $th->getMessage()
            ]);
        }
    }

    public function AboutUsAdd(Request $request)
    {
        $getData = $request->validate([
            'about-heading' => 'required|min:3',
            'about-first-img' => 'required|url',
            'about-second-image' => 'required|url',
            'about-description' => 'required|min:5',
            'about-first-point' => 'required|min:3',
            'about-second-point' => 'required|min:3',
            'about-third-point' => 'required|min:3',
        ], [
            'about-heading.required' => 'Heading is required!',
            'about-heading.min' => 'Heading must be three characters long!',
            'about-first-img.required' => 'First image is required!',
            'about-first-img.url' => 'Please submit a url',
            'about-second-image.required' => 'First image is required!',
            'about-second-image.url' => 'Please submit a url',
            'about-description.required' => 'Description is required!',
            'about-description.min' => 'Description must be five characters long!',
            'about-first-point.required' => 'First point is required!',
            'about-first-point.min' => 'First point must be three characters long!',
            'about-second-point.required' => 'Second point is required!',
            'about-second-point.min' => 'Second point must be three characters long!',
            'about-third-point.required' => 'Third point is required!',
            'about-third-point.min' => 'Third point must be three characters long!',
        ]);

        $matchData = [
            'about_heading' => $getData['about-heading'],
            'about_description' => $getData['about-description'],
            'about_first_img' => $getData['about-first-img'],
            'about_second_img' => $getData['about-second-image'],
            'about_first_point' => $getData['about-first-point'],
            'about_second_point' => $getData['about-second-point'],
            'about_third_point' => $getData['about-third-point']
        ];

        $success = AboutUs::create($matchData);
        if ($success) {
            return response()->json([
                'status' => 200,
                'message' => 'Data created successfully!'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }

    public function OurServicesAdd(Request $request)
    {
        $getData = $request->validate([
            'services-icon' => 'required',
            'services-name' => 'required|min:2',
            'services-image' => 'required|url',
            'services-description' => 'required|min:5'
        ], [
            'services-icon.required' => 'Icon is required!',
            'services-name.required' => 'Service name is required!',
            'services-name.min' => 'Service name must be two characters long!',
            'services-image.required' => 'Image is required!',
            'services-image.url' => 'Please submit a url of image!',
            'services-description.required' => 'Description is required!',
            'services-description.min' => 'Description must be minimum five characters long!'
        ]);

        $matchData = [
            'icon' => $getData['services-icon'],
            'name' => $getData['services-name'],
            'image' => $getData['services-image'],
            'description' => $getData['services-description']
        ];

        $success = OurServices::create($matchData);
        Cache::forget('all_services');
        if ($success) {
            return response()->json([
                'status' => 200,
                'message' => 'Services added successfully!'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }

    public function LatestVideosAdd(Request $request)
    {
        $getData = $request->validate([
            'video-link' => 'required|url',
            'video-image' => 'required|url',
            'video-content' => 'required|min:5'
        ], [
            'video-link.required' => 'Image is required!',
            'video-link.url' => 'Please submit a url of image!',
            'video-image.required' => 'Image is required!',
            'video-image.url' => 'Please submit a url of image!',
            'video-content.required' => 'Description is required!',
            'video-content.min' => 'Description must be minimum five characters long!'
        ]);

        $matchData = [
            'video_link' => $getData['video-link'],
            'video_image' => $getData['video-image'],
            'video_content' => $getData['video-content'],
        ];

        $success = Latestvideos::create($matchData);
        if ($success) {
            return response()->json([
                'status' => 200,
                'message' => 'Video organised successfully!'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }

    public function BlogsAdd(Request $request)
    {
        $getData = $request->validate([
            'blog-tittle' => 'required',
            'blog-image' => 'required|url',
            'blog-description' => 'required|min:5'
        ], [
            'blog-tittle.required' => 'Title is required!',
            'blog-image.required' => 'Image is required!',
            'blog-image.url' => 'Please submit a url of image!',
            'blog-description.required' => 'Description is required!',
            'blog-description.min' => 'Description must be minimum five characters long!'
        ]);

        $matchData = [
            'blog_tittle' => $getData['blog-tittle'],
            'blog_image' => $getData['blog-image'],
            'blog_description' => $getData['blog-description'],
        ];

        $success = Blogs::create($matchData);
        if ($success) {
            return response()->json([
                'status' => 200,
                'message' => 'Blog added successfully!'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }

    public function ServicesShow()
    {
        $data = OurServices::all();
        if ($data) {
            return response()->json([
                'status' => 200,
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'data' => "Something went wrong!"
            ]);
        }
    }

    public function ServicesDescription(Request $request)
    {
        try {
            $request->validate([
                'service-name' => 'required|integer',
                'service-description' => 'required|min:2'
            ], [
                'service-name.required' => 'Service name is required!',
                'service-description.required' => 'Description required!',
                'service-description.min' => 'Description must be 2 or 3 characters long!'
            ]);

            $result = ServiceDescription::updateOrCreate(
                ['services_id' => $request['service-name']],
                ['services_description' => $request['service-description']]
            );

            if ($result) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Description added or updated successfully!'
                ]);
            }

            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        } catch (\Exception $e) {
            Log::error('ServicesDescription Error: ' . $e->getMessage());
            return response()->json([
                'status' => 500,
                'message' => 'Internal server error!'
            ]);
        }
    }

    public function AddcareerVaccancy(Request $request)
    {
        $request->validate([
            'designation-name' => 'required',
            'salary-range' => 'required',
            'start-date' => 'required',
            'role-requirements' => 'required',
            'job-description' => 'required'
        ], [
            'designation-name.required' => 'Designation is required!',
            'salary-range.required' => 'Salary range is required!',
            'start-date.required' => 'Start date is required!',
            'role-requirements.required' => 'Role requirements is required!',
            'job-description.required' => 'Description is required!',
        ]);

        $matchData = [
            'designation' => $request['designation-name'],
            'salary_range' => $request['salary-range'],
            'start_date' => $request['start-date'],
            'requirements' => $request['role-requirements'],
            'description' => $request['job-description']
        ];

        $result = CareerVaccancy::create($matchData);
        if ($result) {
            return response()->json([
                'status' => 200,
                'message' => 'Career Vacancy Created Successfully!'
            ]);
        }
    }

    public function FetchworkingDesignation()
    {
        $workingdesignation = CareerVaccancy::all();

        return response()->json([
            'status' => 200,
            'data' => $workingdesignation
        ]);
    }

    public function AddEmployeeDetails(Request $request)
    {
        $request->validate([
            'employee-position' => 'required|string',
            'employee-start-date' => 'date|required',
            'employee-designation' => 'required|string',
            'employee-name' => 'required',
            'employee-contact-number' => 'required|digits:10',
            'employee-email-id' => 'email|required',
            'employee-age' => 'integer|required',
            'employee-country' => 'required|string',
            'employee-city' => 'required|string',
            'employee-joining-date' => 'required|date',
            'employee-prevoius-employeer' => 'required',
            'employee-last-withdrawn-salary' => 'required',
            'employee-prevoius-designation' => 'required',
            'employee-last-location' => 'required',
            'employee-last-years-of-working' => 'required'
        ], [
            'employee-position.required' => 'Position is required',
            'employee-start-date.date' => 'Start date not a valid date.',
            'employee-start-date.required' => 'Start date is required',
            'employee-designation.required' => 'esignation is required',
            'employee-name.required' => 'Employee name is required!',
            'employee-contact-number.digits' => 'Contact number should be 10 characters long!',
            'employee-contact-number.required' => 'Contact number is required!',
            'employee-email-id.required' => 'Email id is required!',
            'employee-email-id.email' => 'email id should be a valid email format.',
            'employee-age.required' => 'Age is mandatory',
            'employee-age.integer' => 'Age should be a number',
            'employee-country.required' => 'Country is required',
            'employee-city.required' => 'City is required',
            'employee-joining-date.required' => 'Joining date is required',
            'employee-joining-date.date' => 'Please provide a valide date.',
            'employee-prevoius-employeer.required' => 'Prevoius employer is required',
            'employee-last-withdrawn-salary.required' => 'Last withdrawn salary is required',
            'employee-prevoius-designation.required' => 'Prevoius designation is required',
            'employee-last-location.required' => 'Previous location is required',
            'employee-last-years-of-working.required' => 'Total years of working required'
        ]);

        $matchData = [
            'position' => $request['employee-position'],
            'start_date' => $request['employee-start-date'],
            'designation' => $request['employee-designation'],
            'name' => $request['employee-name'],
            'contact_no' => $request['employee-contact-number'],
            'email' => $request['employee-email-id'],
            'age' => $request['employee-age'],
            'country' => $request['employee-country'],
            'city' => $request['employee-city'],
            'prevoius_joining_date' => $request['employee-joining-date'],
            'prevoius_employeer' => $request['employee-prevoius-employeer'],
            'last_withdran_salary' => $request['employee-last-withdrawn-salary'],
            'prevoius_designation' => $request['employee-prevoius-designation'],
            'prevoius_location' => $request['employee-last-location'],
            'total_years_of_working' => $request['employee-last-years-of-working']
        ];

        $result = AddEmployee::updateOrCreate(
            [
                'contact_no' => $request['employee-contact-number'],
                'email' => $request['employee-email-id'],
            ],
            $matchData
        );

        if ($result) {
            return response()->json([
                'status' => 200,
                'message' => 'Employee added to our team.'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }
    }
}
