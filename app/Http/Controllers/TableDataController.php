<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\BsuRepositoryInterface;
use App\Contracts\Repositories\CarRepositoryInterface;
use App\Contracts\Repositories\CompRepositoryInterface;
use App\Contracts\Repositories\CustomerRepositoryInterface;
use App\Contracts\Repositories\DriverRepositoryInterface;
use App\Contracts\Repositories\MixtureRepositoryInterface;
use App\Contracts\Repositories\OrderRepositoryInterface;
use App\Contracts\Repositories\OrderStateRepositoryInterface;
use App\Services\TableDataService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class TableDataController extends Controller
{
    /**
     * TableDataController constructor.
     */
    public function __construct(
        private TableDataService $tableDataService,
        private CarRepositoryInterface $carRepository,
        private BsuRepositoryInterface $bsuRepository,
        private CompRepositoryInterface $compRepository,
        private CustomerRepositoryInterface $customerRepository,
        private DriverRepositoryInterface $driverRepository,
        private MixtureRepositoryInterface $mixtureRepository,
        private OrderRepositoryInterface $orderRepository,
        private OrderStateRepositoryInterface $orderStateRepository
    ) {}

    /**
     * Get all data from all tables
     */
    public function getAllTablesData(): JsonResponse
    {
        try {
            $data = $this->tableDataService->getAllTablesData();

            return response()->json([
                'success' => true,
                'message' => 'Data retrieved successfully',
                'data' => $data,
                'timestamp' => now(),
                'total_records' => $this->countTotalRecords($data),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get all tables data: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve data',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all cars
     */
    public function getCars(): JsonResponse
    {
        try {
            $cars = $this->tableDataService->getAllCars();

            return response()->json([
                'success' => true,
                'message' => 'Cars retrieved successfully',
                'data' => $cars,
                'total' => $cars->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get cars: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve cars',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get car by ID
     */
    public function getCarById(int $id): JsonResponse
    {
        try {
            $car = $this->carRepository->find($id);

            return response()->json([
                'success' => true,
                'message' => 'Car retrieved successfully',
                'data' => $car,
            ], Response::HTTP_OK);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Car not found',
                'error' => "Car with ID {$id} does not exist",
            ], Response::HTTP_NOT_FOUND);

        } catch (\Exception $e) {
            Log::error('Failed to get car by ID: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve car',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all BSU records
     */
    public function getBsu(): JsonResponse
    {
        try {
            $bsu = $this->tableDataService->getAllBsu();

            return response()->json([
                'success' => true,
                'message' => 'BSU records retrieved successfully',
                'data' => $bsu,
                'total' => $bsu->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get BSU: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve BSU records',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all comp records
     */
    public function getComp(): JsonResponse
    {
        try {
            $comp = $this->tableDataService->getAllComp();

            return response()->json([
                'success' => true,
                'message' => 'Comp records retrieved successfully',
                'data' => $comp,
                'total' => $comp->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get Comp: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve comp records',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all customers
     */
    public function getCustomers(): JsonResponse
    {
        try {
            $customers = $this->tableDataService->getAllCustomers();

            return response()->json([
                'success' => true,
                'message' => 'Customers retrieved successfully',
                'data' => $customers,
                'total' => $customers->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get customers: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve customers',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all drivers
     */
    public function getDrivers(): JsonResponse
    {
        try {
            $drivers = $this->tableDataService->getAllDrivers();

            return response()->json([
                'success' => true,
                'message' => 'Drivers retrieved successfully',
                'data' => $drivers,
                'total' => $drivers->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get drivers: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve drivers',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all mixtures
     */
    public function getMixtures(): JsonResponse
    {
        try {
            $mixtures = $this->tableDataService->getAllMixtures();

            return response()->json([
                'success' => true,
                'message' => 'Mixtures retrieved successfully',
                'data' => $mixtures,
                'total' => $mixtures->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get mixtures: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve mixtures',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all orders
     */
    public function getOrders(): JsonResponse
    {
        try {
            $orders = $this->tableDataService->getAllOrders();

            return response()->json([
                'success' => true,
                'message' => 'Orders retrieved successfully',
                'data' => $orders,
                'total' => $orders->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get orders: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve orders',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get order by ID with relations
     */
    public function getOrderById(int $id): JsonResponse
    {
        try {
            $order = $this->orderRepository->find($id);
            $order->load(['customer', 'orderStates', 'bsu']);

            return response()->json([
                'success' => true,
                'message' => 'Order retrieved successfully',
                'data' => $order,
            ], Response::HTTP_OK);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found',
                'error' => "Order with ID {$id} does not exist",
            ], Response::HTTP_NOT_FOUND);

        } catch (\Exception $e) {
            Log::error('Failed to get order by ID: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve order',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get all order states
     */
    public function getOrderStates(): JsonResponse
    {
        try {
            $orderStates = $this->tableDataService->getAllOrderStates();

            return response()->json([
                'success' => true,
                'message' => 'Order states retrieved successfully',
                'data' => $orderStates,
                'total' => $orderStates->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get order states: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve order states',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get orders by state
     */
    public function getOrdersByState(string $state): JsonResponse
    {
        try {
            $orders = $this->orderRepository->getByState($state);

            return response()->json([
                'success' => true,
                'message' => "Orders with state '{$state}' retrieved successfully",
                'data' => $orders,
                'total' => $orders->count(),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get orders by state: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve orders',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Search orders by date range
     */
    public function searchOrdersByDate(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
            ]);

            $orders = $this->orderRepository->getByDateRange(
                $validated['start_date'],
                $validated['end_date']
            );

            return response()->json([
                'success' => true,
                'message' => 'Orders retrieved successfully',
                'data' => $orders,
                'total' => $orders->count(),
                'date_range' => [
                    'start' => $validated['start_date'],
                    'end' => $validated['end_date'],
                ],
            ], Response::HTTP_OK);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);

        } catch (\Exception $e) {
            Log::error('Failed to search orders by date: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to search orders',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get dashboard statistics
     */
    public function getDashboardStats(): JsonResponse
    {
        try {
            $stats = [
                'total_cars' => $this->carRepository->all()->count(),
                'total_bsu' => $this->bsuRepository->all()->count(),
                'total_customers' => $this->customerRepository->all()->count(),
                'total_drivers' => $this->driverRepository->all()->count(),
                'total_orders' => $this->orderRepository->all()->count(),
                'total_mixtures' => $this->mixtureRepository->all()->count(),
                'active_orders' => $this->orderRepository->getActiveOrdersCount(),
                'recent_orders' => $this->orderRepository->getRecentOrders(10),
            ];

            return response()->json([
                'success' => true,
                'message' => 'Statistics retrieved successfully',
                'data' => $stats,
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            Log::error('Failed to get dashboard stats: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve statistics',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Count total records across all tables
     */
    private function countTotalRecords(array $data): int
    {
        $total = 0;
        foreach ($data as $items) {
            if ($items instanceof Collection) {
                $total += $items->count();
            } elseif (is_array($items)) {
                $total += count($items);
            }
        }

        return $total;
    }
}
